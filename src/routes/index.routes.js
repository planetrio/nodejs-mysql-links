import { Router } from "express";
import { isLoggedIn } from "../lib/auth";
const router = Router();

import { renderIndex } from "../controllers/index.conroller";

router.get("/", isLoggedIn, renderIndex);

export default router;
