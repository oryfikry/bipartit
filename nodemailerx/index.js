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
        html : `<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <meta name="x-apple-disable-message-reformatting">
            <title></title>
            <!--[if mso]>
          <style>
            table {border-collapse:collapse;border-spacing:0;border:none;margin:0;}
            div, td {padding:0;}
            div {margin:0 !important;}
          </style>
          <noscript>
            <xml>
              <o:OfficeDocumentSettings>
                <o:PixelsPerInch>96</o:PixelsPerInch>
              </o:OfficeDocumentSettings>
            </xml>
          </noscript>
          <![endif]-->
            <style>
                table,
                td,
                div,
                h1,
                p {
                    font-family: Arial, sans-serif;
                }
        
                @media screen and (max-width: 530px) {
                    .unsub {
                        display: block;
                        padding: 8px;
                        margin-top: 14px;
                        border-radius: 6px;
                        background-color: #555555;
                        text-decoration: none !important;
                        font-weight: bold;
                    }
        
                    .col-lge {
                        max-width: 100% !important;
                    }
                }
        
                @media screen and (min-width: 531px) {
                    .col-sml {
                        max-width: 27% !important;
                    }
        
                    .col-lge {
                        max-width: 73% !important;
                    }
                }
            </style>
        </head>
        
        <body style="margin:0;padding:0;word-spacing:normal;background-color:#939297;">
            <div role="article" aria-roledescription="email" lang="en"
                style="text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#939297;">
                <table role="presentation" style="width:100%;border:none;border-spacing:0;">
                    <tr>
                        <td align="center" style="padding:0;">
                            <!--[if mso]>
                  <table role="presentation" align="center" style="width:600px;">
                  <tr>
                  <td>
                  <![endif]-->
                            <table role="presentation"
                                style="width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                                <tr>
                                    <td style="padding:40px 30px 30px 30px;text-align:center;font-size:24px;font-weight:bold;">
                                        <a href="#" style="text-decoration:none;"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:30px;background-color:#ffffff;">
                                        <h1
                                            style="margin-top:0;margin-bottom:16px;font-size:26px;line-height:32px;font-weight:bold;letter-spacing:-0.02em;">
                                            Election Bipartit 2022 </h1>
                                        <p style="margin:0;">Click button below to participate in election !.</p>
                                        <p>   <a href="#"
                                            style="background: #ff3884; text-decoration: none; padding: 10px 25px; color: #ffffff; border-radius: 4px; display:inline-block; mso-padding-alt:0;text-underline-color:#ff3884">
                                            <!--[if mso]><i style="letter-spacing: 25px;mso-font-width:-100%;mso-text-raise:20pt">&nbsp;</i><![endif]--><span
                                                style="mso-text-raise:10pt;font-weight:bold;">Participate Now !</span>
                                            <!--[if mso]><i style="letter-spacing: 25px;mso-font-width:-100%">&nbsp;</i><![endif]--></a></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:0;font-size:24px;line-height:28px;font-weight:bold;">
                                        <a href="#" style="text-decoration:none;"></a>
                                    </td>
                                </tr>
                           
                                <tr>
                                    <td
                                        style="padding:30px;font-size:24px;line-height:28px;font-weight:bold;background-color:#ffffff;border-bottom:1px solid #f0f0f5;border-color:rgba(201,201,207,.35);">
                                        <a href="#" style="text-decoration:none;">
                                         
                                            </a>
                                    </td>
                                </tr>
                               
                                <tr>
                                    <td
                                        style="padding:30px;text-align:center;font-size:12px;background-color:#404040;color:#cccccc;">
                                       
                                        <p style="margin:0;font-size:14px;line-height:20px;">&reg; Admin Bipartit 2022<br>
                                            Bila ada kesalahan atau error mohon hubungi admin bipartit di - 081236825 <br>
                                            <a target="_blank" class="unsub" href="oryfikry.com" style="color:#cccccc;text-decoration:underline;">provided by. Oryfikry</a></p>
                                    </td>
                                </tr>
                            </table>
                            <!--[if mso]>
                  </td>
                  </tr>
                  </table>
                  <![endif]-->
                        </td>
                    </tr>
                </table>
            </div>
        </body>
        
        </html>`
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
                    mailer.push(transport.sendMail(template(email[i],link[i])))
                    // setReceive(email[i])
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


