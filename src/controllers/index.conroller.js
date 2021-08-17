const indexCtrl = {};
const got = require('got');

indexCtrl.renderIndex = async (req, res) => {
    var totaldcu = 0;
    try {
        const response = await got('http://localhost:7001/api/v1/dcu/', { json: true });
        totaldcu = Object.keys(response.body).length;
    } catch (error) {
        console.log(error);
    }

    var totalfunc = 0;
    try {
        const response = await got('http://localhost:7001/api/v1/func/', { json: true });
        totalfunc = Object.keys(response.body).length;
    } catch (error) {
        console.log(error);
    }

    res.render('index', { totaldcu: totaldcu, totalfunc: totalfunc });
};

module.exports = indexCtrl;
