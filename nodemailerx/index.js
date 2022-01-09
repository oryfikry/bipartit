const nodemailer = require('nodemailer');


const express = require('express')
const app = express()
const port = 3000

app.get('/', (req, res) => {
    // api mailer 
const nodemailer = require('nodemailer');

const transporter = nodemailer.createTransport({
    // service: 'gmail',
    host: 'srv118.niagahoster.com',
    port: 465,
    // secure: true,
    auth: {
        user: 'admin-bipartit@oryfikry.com',
        pass: 'W;F$ruF4g{S(',
    },

})

const mailOption = {
    from : 'admin-bipartit@oryfikry.com',
    to : 'sumail.sasumi@gmail.com',
    subject : 'test subject send an email',
    text : 'test text send email '
} 

transporter.sendMail(mailOption, function(error, info){
    if(error) throw error;
    res.send('Email sent ' + info.response);
});
// end 

    res.send('this an started home rest api');
})

app.listen(port,()=>{
    console.log(`app running at port${port}`)
})


