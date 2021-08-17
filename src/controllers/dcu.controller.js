import pool from "../database";
const got = require('got');

export const renderAddDCU = (req, res) => {
    res.render("dcu/add");
};

export const addDCU = async (req, res) => {
    const { imageName, authUsername, authPassword, instanceType, portRemote, name } = req.body;

    var portMapping = "";
    if (portRemote) {
        portMapping = "0:" + portRemote;
    }

    try {
        const { data } = await got.post('http://localhost:7001/api/v1/dcu/run', {
            json: true, 
            body: {
                "AuthPassword": authPassword,
                "AuthUsername": authUsername,
                "ImageName": imageName,
                "InstanceType": instanceType,
                "Name": name,
                "PortMapping": portMapping,
            }
        });
        req.flash("success", "DCU Start Request Created Successfully");
    } catch (error) {
        console.log(error.body);
        req.flash("error", "DCU Start Request Failed.");
    }

    res.redirect("/dcu");
};

export const renderDCUs = async (req, res) => {
    try {
        const response = await got('http://localhost:7001/api/v1/dcu/', { json: true });
        var rows = response.body;
        res.render("dcu/list", { rows });
    } catch (error) {
        console.log(error);
        res.render("dcu/list", {});
    }
};

export const stopDCU = async (req, res) => {
    const { id } = req.params;
    try {
        const response = await got('http://localhost:7001/api/v1/dcu/stop/'+id, { json: true });
        req.flash("success", "DCU Stop Request Successful");
    } catch (error) {
        console.log(error.body);
    }
    res.redirect("/dcu/view/" + id);
};

export const deleteDCU = async (req, res) => {
    const { id } = req.params;
    try {
        const response = await got('http://localhost:7001/api/v1/dcu/delete/'+id, { json: true });
        req.flash("success", "DCU Delete Request Successful");
    } catch (error) {
        console.log(error.body);
    }
    res.redirect("/dcu");
};

export const renderEditDCU = async (req, res) => {
    const { id } = req.params;
    const links = await pool.query("SELECT * FROM links WHERE id = ?", [id]);
    console.log(links);
    res.render("dcu/edit", { link: links[0] });
};

export const editDCU = async (req, res) => {
    const { id } = req.params;
    const { title, description, url } = req.body;
    const newDCU = {
        title,
        description,
        url,
    };
    await pool.query("UPDATE links set ? WHERE id = ?", [newDCU, id]);
    req.flash("success", "DCU Updated Successfully");
    res.redirect("/dcu");
};

export const renderViewDCU = async (req, res) => {
    const { id } = req.params;
    try {
        const response = await got('http://localhost:7001/api/v1/dcu/info/'+id, { json: true });
        var dcu = response.body;
        console.log(dcu);

        let endpoint = "No HTTP endpoint specified";
        if (dcu["Ports"]){
            //get user gateway server
            const gatway_server = await pool.query("SELECT domain FROM gateway_servers WHERE id = ? limit 1", [req.user.gateway_server_id]);
            const domain = gatway_server[0]["domain"];
            endpoint = "http://"+dcu["InstanceId"]+"."+domain+"/";
        }
        dcu["Endpoint"] = endpoint;

        res.render("dcu/view", { dcu });
    } catch (error) {
        console.log(error.body);
        res.redirect("/dcu");
    }
};
