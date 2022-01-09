const express = require('express')
const path = require('path')
const CookieParser = require('cookie-parser')
const logger = require('morgan')

const indexRouter = require('./routes/index')
const mailerRoute = require('./routes/mailer')

const app = express()
const port = '3000'

app.use(logger('dev'))
app.use(express.json())
app.use(express.urlencoded({extended:false}))
app.use(CookieParser())
app.use(express.static(path.join(__dirname,'public')))

app.use('/', indexRouter)
app.use('mailer',mailerRoute)

module.exports = app;
app.listen(port,()=>{
    console.log(`app running at port${port}`)
})
