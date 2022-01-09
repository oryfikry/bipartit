const nodemailer = require('nodemailer');

const transporter = nodemailer.createTransport({
    service: 'gmail',
    auth: {
        user: 'sumail.sasumi@gmail.com',
        password: 'Kimochi69',
    }
})

const mailOption = {
    from : 'admin@bipartit.com',
    to : 'oryza4444@gmal.com',
    subject : 'test subject send an email',
    text : 'test text send email '
} 

transporter.sendMail(mailOption, function(error, info){
    if(error)()=> console.log(error);
    console.log('Email sent ' + info.response);
})