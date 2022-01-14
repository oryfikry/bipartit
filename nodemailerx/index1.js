const nodemailer = require('nodemailer');
// route 
const userRouter = require('./routes/user') 


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
        pass: 'KONzvx2hvCEx',
    },

})

// const template = {
//     from : 'admin-bipartit@oryfikry.com',
//     to : 'oryza4444@gmail.com',
//     subject : 'test subject send an email',
//     text : 'test text send email '
// } 
const receiver = ['irfan.k@posco.net','sumail.sasumi@gmail.com','irfankf75@gmail.com'];
const textMail = ['test text send email to posco','test text send email to sumail','test text send email to 75'];

function template(receiver,textMail) {
    return{
        from : 'admin-bipartit@oryfikry.com',
        subject : 'Election Bipartit 2022 Invitation' ,
        to : receiver,
        text : textMail
    }
} 
transporter.sendMail(template, function(error, info){
    if(error) throw error;
    res.send('Email sent ' + info.response);
});
// end 

    res.send('this an started home rest api');
})

app.use('/user', userRouter)

app.listen(port,()=>{
    console.log(`app running at port${port}`)
})


