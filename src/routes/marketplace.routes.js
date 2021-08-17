import { Router } from "express";
import { isLoggedIn } from "../lib/auth";
import {
    renderMarketplace,
} from "../controllers/marketplace.controller";

const router = Router();
// Authorization
router.use(isLoggedIn);

// Routes
router.get("/", isLoggedIn, renderMarketplace);

export default router;
