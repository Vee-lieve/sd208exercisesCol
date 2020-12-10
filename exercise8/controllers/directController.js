const Register = require("../model/userModel")

module.exports = {
    gotoHome(req, res) {
        Register.find({}  , (err , data)=>{
            res.render('pages/home', { title: "Home", data: err? [] :data, logInUser: req.user });
        })
    },

    gotoLogin(req, res) {
        res.render('pages/login', { title: "Login", data: "data" })
    },
}