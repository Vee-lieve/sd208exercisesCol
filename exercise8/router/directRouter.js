const directController = require('../controllers/directController');
const express = require('express');
const router = express.Router();

router.get('/home', directController.gotoHome)
router.get('/login', directController.gotoLogin)

module.exports = router;