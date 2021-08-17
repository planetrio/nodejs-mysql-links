import pool from "../database";
const got = require('got');


export const renderMarketplace = async (req, res) => {
    const cats = await pool.query("SELECT * FROM marketplace_category order by category_indx asc");
    for (const cat of cats) {
        const items = await pool.query("SELECT * FROM marketplace where category_id="+cat.id);
        cat["items"] = items;        
    };

    const featured = await pool.query("SELECT * FROM marketplace where featured='yes' limit 1");

    var rows = {};
    rows["featured"] = featured;
    rows["cats"] = cats;

    res.render("marketplace/list", { rows });
};

