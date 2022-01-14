const express = require('express')
const fetch = require('node-fetch')
const app = express()
const port = 3000
app.get('/', (req, res) => {

var name = [];
  function fetch_data(){
     fetch('http://127.0.0.1:8000/testo')
        .then(res => res.json())
        .then(json => {
            for(i=0; i < json.length; i++){
                name.push(json[i].name)
            } 
            console.log(json);
            res.send(json);
        
  
        });
    } 
 fetch_data()

})

app.listen(port,()=>{
    console.log(`app running at port${port}`)
})

