import { Router } from "express";
import { isLoggedIn } from "../lib/auth";
import {
    renderAddDCU,
    addDCU,
    renderDCUs,
    deleteDCU,
    stopDCU,
    editDCU,
    renderEditDCU,
    renderViewDCU,
} from "../controllers/dcu.controller";

const router = Router();
// Authorization
router.use(isLoggedIn);

// Routes
router.get("/", isLoggedIn, renderDCUs);
router.get("/add", renderAddDCU);
router.post("/add", addDCU);
router.get("/edit/:id", renderEditDCU);
router.post("/edit/:id", editDCU);
router.get("/view/:id", renderViewDCU);
router.get("/delete/:id", deleteDCU);
router.get("/stop/:id", stopDCU);

export default router;
