/**
 * Reading Environment Variables
 */
import { config } from "dotenv";
config();

export default {
    database: {
        connectionLimit: 10,
        host: process.env.DATABASE_HOST || "localhost",
        user: process.env.DATABASE_USER || "root",
        password: process.env.DATABASE_PASSWORD || "password",
        database: process.env.DATABASE_NAME || "planetr",
    },
    port: process.env.PORT || 4000,
};
