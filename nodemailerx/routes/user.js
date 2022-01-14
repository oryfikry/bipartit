const express = require('express');
const res = require('express/lib/response');
const router = express.Router()
const Validator = require('fastest-validator')

const {User} = require('../models/User')

router.post('/', async(req,res)=>{
    // res.send('model user')
    const schema ={
        id : 'string',
        name : 'string',
        email : 'string',
        is_receive : 'string'
    }
    // const validate = Validator.default(req, schema)

    // if(validate.length){
    //     return res
    //     .status(404)
    //     .json(validate)
    // }
    // const user = await User.create(req.body)
     res.json('oke')

});

// update 

router.put('/:id', async (req,res)=>{
    const id = req.params.id
    res.send(id)

    const user = await User.findByPk(id)

    if(!user){
        res.json({mesage: 'user not found !'})
    }

})

module.exports = router;