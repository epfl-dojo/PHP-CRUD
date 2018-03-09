const express = require('express')
const app = express()
var exec = require('child_process').exec;



app.post('/', function(req, res) {
  exec('git pull', function callback(error, stdout, stderr){
      console.log("tutto bene")// result
  });

});

app.listen(3000, () => console.log('Example app listening on port 3000!'))
