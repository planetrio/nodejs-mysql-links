import { Router } from "express";
import auth from "./auth.routes";
import index from "./index.routes";
import dcu from "./dcu.routes";
import func from "./func.routes";
import proxy from "./proxy.routes";
import marketplace from "./marketplace.routes";
import user from "./user.routes";

const router = Router();

router.use(index);
router.use(auth);
router.use(user);
router.use("/dcu", dcu);
router.use("/serverless", func);
router.use("/proxy", proxy);
router.use("/marketplace", marketplace);

export default router;
