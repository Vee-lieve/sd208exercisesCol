const loginController = require('../controllers/loginController');
// const authorization = require("./../middleware/authorization");
const express = require('express');
const router = express.Router();

router.get('/', loginController.getLoginAccnt);
router.post('/login', loginController.userDoLogin);
router.get('/register', loginController.getRegisteredAccnt);
router.get('/register/:id', loginController.getRegisteredAccntById);
router.post('/add', loginController.addAccnt);

module.exports = router;