import pool from "../database";
const got = require('got');

export const renderAddProxy = (req, res) => {
    res.render("func/add");
};

export const addProxy = async (req, res) => {
    const { name, port } = req.body;

    try {
        const { data } = await got.post('http://localhost:7001/api/v1/proxy/run', {
            json: true, 
            body: {
                "Name": name,
                "Port": Number(port),
            }
        });
        req.flash("success", "Proxy Start Request Created Successfully");
    } catch (error) {
        console.log(error.body);
        req.flash("error", "Proxy Start Request Failed.");
    }

    res.redirect("/proxy");
};

export const renderProxys = async (req, res) => {
    try {
        const response = await got('http://localhost:7001/api/v1/proxy/', { json: true });
        var rows = response.body;
        res.render("proxy/list", { rows });
    } catch (error) {
        console.log(error);
        res.render("proxy/list", {});
    }
};

export const deleteProxy = async (req, res) => {
    const { id } = req.params;
    try {
        const response = await got('http://localhost:7001/api/v1/proxy/delete/' + id, { json: true });
        req.flash("success", "Proxy Delete Request Successful");
    } catch (error) {
        console.log(error.body);
    }
    res.redirect("/proxy");
};

export const stopProxy = async (req, res) => {
    const { id } = req.params;
    try {
        const response = await got('http://localhost:7001/api/v1/proxy/stop/' + id, { json: true });
        req.flash("success", "Proxy Stop Request Successful");
    } catch (error) {
        console.log(error.body);
    }
    res.redirect("/proxy");
};

export const startProxy = async (req, res) => {
    const { id } = req.params;
    try {
        const response = await got('http://localhost:7001/api/v1/proxy/start/' + id, { json: true });
        req.flash("success", "Proxy Start Request Successful");
    } catch (error) {
        console.log(error.body);
    }
    res.redirect("/proxy");
};

export const renderEditProxy = async (req, res) => {
    const { id } = req.params;
    const links = await pool.query("SELECT * FROM links WHERE id = ?", [id]);
    console.log(links);
    res.render("proxy/edit", { link: links[0] });
};

export const editProxy = async (req, res) => {
    const { id } = req.params;
    const { title, description, url } = req.body;
    const newProxy = {
        title,
        description,
        url,
    };
    await pool.query("UPDATE links set ? WHERE id = ?", [newProxy, id]);
    req.flash("success", "Proxy Updated Successfully");
    res.redirect("/proxy");
};

export const renderViewProxy = async (req, res) => {
    const { id } = req.params;
    try {
        //const response = await got('http://localhost:7001/api/v1/func/info/' + id, { json: true });
        var row = {InstanceId : id};//response.body;
        res.render("proxy/view", { row });
    } catch (error) {
        console.log(error.body);
        res.redirect("/proxy");
    }
};
