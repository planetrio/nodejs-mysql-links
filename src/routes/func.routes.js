import { Router } from "express";
import { isLoggedIn } from "../lib/auth";
import {
    renderAddFunc,
    addFunc,
    renderFuncs,
    deleteFunc,
    editFunc,
    renderEditFunc,
    renderViewFunc,
} from "../controllers/func.controller";

const router = Router();
// Authorization
router.use(isLoggedIn);

// Routes
router.get("/", isLoggedIn, renderFuncs);
router.get("/add", renderAddFunc);
router.post("/add", addFunc);
router.get("/edit/:id", renderEditFunc);
router.post("/edit/:id", editFunc);
router.get("/view/:id", renderViewFunc);
router.get("/delete/:id", deleteFunc);

export default router;
