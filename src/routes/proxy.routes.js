import { Router } from "express";
import { isLoggedIn } from "../lib/auth";
import {
    renderAddProxy,
    addProxy,
    renderProxys,
    deleteProxy,
    stopProxy,
    startProxy,
    editProxy,
    renderEditProxy,
    renderViewProxy,
} from "../controllers/proxy.controller";

const router = Router();
// Authorization
router.use(isLoggedIn);

// Routes
router.get("/", isLoggedIn, renderProxys);
router.get("/add", renderAddProxy);
router.post("/add", addProxy);
router.get("/edit/:id", renderEditProxy);
router.post("/edit/:id", editProxy);
router.get("/view/:id", renderViewProxy);
router.get("/delete/:id", deleteProxy);
router.get("/stop/:id", stopProxy);
router.get("/start/:id", startProxy);

export default router;
