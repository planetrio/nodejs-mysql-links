import pool from "../database";
const got = require('got');
const FormData = require('form-data');
var fs = require('fs');

export const renderAddFunc = (req, res) => {
    res.render("func/add");
};

export const addFunc = async (req, res) => {
    const { name } = req.body;

    console.log('Name=' + name);

    if (!req.files || Object.keys(req.files).length === 0) {
        return res.status(400).send('No WASM files were uploaded.');
    }

    let wasmFile = req.files.wasmFile;
    console.log("Filepath=" + wasmFile.data)

    const form = new FormData();
    form.append('Name', name);
    form.append('File', fs.createReadStream(wasmFile.tempFilePath));

    try {
        form.submit('http://localhost:7001/api/v1/func/create', function (err, res) {
            req.flash("success", "Function Create Request Created Successfully");
        });

    } catch (error) {
        console.log(error.body);
        req.flash("error", "Function Create Request Failed.");
    }

    res.redirect("/serverless");
};

export const renderFuncs = async (req, res) => {
    try {
        const response = await got('http://localhost:7001/api/v1/func/', { json: true });
        var rows = response.body;
        res.render("func/list", { rows });
    } catch (error) {
        console.log(error);
        res.render("func/list", {});
    }
};

export const deleteFunc = async (req, res) => {
    const { id } = req.params;
    try {
        const response = await got('http://localhost:7001/api/v1/func/delete/' + id, { json: true });
        req.flash("success", "Function Delete Request Successful");
    } catch (error) {
        console.log(error.body);
    }
    res.redirect("/serverless");
};

export const renderEditFunc = async (req, res) => {
    const { id } = req.params;
    const links = await pool.query("SELECT * FROM links WHERE id = ?", [id]);
    console.log(links);
    res.render("func/edit", { link: links[0] });
};

export const editFunc = async (req, res) => {
    const { id } = req.params;
    const { title, description, url } = req.body;
    const newFunc = {
        title,
        description,
        url,
    };
    await pool.query("UPDATE links set ? WHERE id = ?", [newFunc, id]);
    req.flash("success", "Func Updated Successfully");
    res.redirect("/serverless");
};

export const renderViewFunc = async (req, res) => {
    const { id } = req.params;
    try {
        //const response = await got('http://localhost:7001/api/v1/func/info/' + id, { json: true });
        var row = {InstanceId : id};//response.body;
        res.render("func/view", { row });
    } catch (error) {
        console.log(error.body);
        res.redirect("/serverless");
    }
};
