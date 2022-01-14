// route 
const userRouter = require('./routes/user') 


const express = require('express')
const fetch = require('node-fetch')

const app = express()
const port = 3000

app.get('/', (req, res) => {
    // api mailer 
const nodemailer = require('nodemailer');

function template(receiver,textMail) {
    return{
        from : 'admin-bipartit@oryfikry.com',
        subject : 'Election Bipartit 2022 Invitation' ,
        to : receiver,
        text : 'berikut ini adalah link bipartit 2022 => ' + textMail
    }
} 

function setReceive(receiver){
    // app.post('/received/'+receiver, function (req, res) {
        console.log( receiver+' received');
    //   })
}

async function main(){
    const transport = nodemailer.createTransport({
        // service: 'gmail',
        host: 'srv118.niagahoster.com',
        port: 465,
        // secure: true,
        auth: {
            user: 'admin-bipartit@oryfikry.com',
            pass: 'KONzvx2hvCEx',
        },
    });
    // const receivers = ['irfan.k@posco.net','sumail.sasumi@gmail.com','irfankf75@gmail.com'];
    // const textMails = ['test text send email to posco','test text send email to sumail','test text send email to 75'];

    const email =[];
    const link =[];
    const mailer = [];
        fetch('http://127.0.0.1:8000/testo')
            .then(res => res.json())
            .then(json => {
                for(i=0; i < json.length; i++){
                    email.push(json[i].email)
                    link.push(json[i].link)
                    // add delay 2 second to prevent spam detection 
                    // setTimeout(mailer.push(transport.sendMail(template(email[i],link[i]))),2000)
                    setReceive(email[i])
                    console.log(template(email[i],link[i]));
                } 
                // console.log(json);
                // res.send(json);
   
            });
         
        

    // for (let i = 0; i < receivers.length; i++) {
    //   for (let j = 0; j < 5; j++) {
        // mailer.push(transport.sendMail(template(receivers[i],textMails[i])));
    //   }
    // }

    return await Promise.all(mailer);
     
} 


main()
.then((res) => console.log(res))
.catch((e) => console.error(e))


// transporter.sendMail(template, function(error, info){
//     if(error) throw error;
//     res.send('Email sent ' + info.response);
// });
// end 

    res.send('this an started home rest api');
})

// app.use('/user', userRouter)

app.listen(port,()=>{
    console.log(`app running at port${port}`)
})


