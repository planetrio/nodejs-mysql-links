import passport from "passport";
import { Strategy as LocalStrategy } from "passport-local";

import pool from "../database";
import * as helpers from "./helpers";

passport.use(
    "local.signin",
    new LocalStrategy(
        {
            usernameField: "username",
            passwordField: "password",
            passReqToCallback: true,
        },
        async (req, username, password, done) => {
            console.log(">Signin " + username);

            const rows = await pool.query("SELECT * FROM users,  WHERE username = ?", [
                username,
            ]);
            if (rows.length > 0) {
                const user = rows[0];
                const validPassword = await helpers.matchPassword(
                    password,
                    user.password
                );
                if (validPassword) {
                    done(null, user, req.flash("success", "Welcome " + user.username));
                } else {
                    done(null, false, req.flash("message", "Incorrect Password"));
                }
            } else {
                return done(
                    null,
                    false,
                    req.flash("message", "The Username does not exists.")
                );
            }
        }
    )
);

passport.use(
    "local.signup",
    new LocalStrategy(
        {
            usernameField: "username",
            passwordField: "password",
            passReqToCallback: true,
        },
        async (req, username, password, done) => {
            console.log(">Signup " + username);

            const { fullname,email, gateway_server_id } = req.body;

            let phone = '';
            let company = '';
            let address = '';
            let city = '';
            let state = '';
            let country = '';

            let newUser = {
                fullname,
                username,
                password,
                email,
                phone,
                company,
                address,
                city,
                state,
                country,
                gateway_server_id,
            };

            newUser.password = await helpers.encryptPassword(password);
            // Saving in the Database
            const result = await pool.query("INSERT INTO users SET ? ", newUser);
            newUser.id = result.insertId;
            return done(null, newUser);
        }
    )
);

passport.serializeUser((user, done) => {
    done(null, user.id);
});

passport.deserializeUser(async (id, done) => {
    const rows = await pool.query("SELECT u.*, g.domain FROM users u, gateway_servers g WHERE u.gateway_server_id=g.id and u.id = ?", [id]);
    done(null, rows[0]);
});
