import pool from "../database";
const authCtrl = {};

const passport = require('passport');

authCtrl.renderSignUp = async (req, res) => {
    const servers = await pool.query("SELECT * FROM gateway_servers order by id asc");

    res.render('auth/signup', { title: 'Sign Up for Planetr', layout: 'noauth', servers: servers });
};

authCtrl.signUp = passport.authenticate('local.signup', {
    successRedirect: '/',
    failureRedirect: '/signup',
    failureFlash: true
});

authCtrl.renderSignIn = (req, res, next) => {
    res.render('auth/signin', { title: 'Sign In to Planetr', layout: 'noauth' });
};

authCtrl.signIn = passport.authenticate('local.signin', {
    successRedirect: '/',
    failureRedirect: '/signin',
    failureFlash: true
});

authCtrl.logout = (req, res, next) => {
    req.logOut();
    res.redirect('/signin');
};

module.exports = authCtrl;