var express = require('express');
var morgan = require('morgan');
var path = require('path');
var pool = require('pg').Pool;
var crypto = require('crypto');
var bodyParser = require('body-parser');
var session = require('express-session');

var config = {
    user: 'aksanuraag',
    database: 'aksanuraag',
    host: 'db.imad.hasura-app.io',
    port: '5432',
    password: process.env.DB_PASSWORD
};


var app = express();
app.use(morgan('combined'));
app.use(bodyParser.json());
app.use(session({
    secret: 'someRandomSecretValue',
    cookie: { maxAge: 1000 * 60 * 60 * 24 * 30}
}))
app.get('/', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'login.html'));
});

app.get('/ui/style.css', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'style.css'));
});

app.get('/ui/madi.png', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'madi.png'));
});

function createTemplate(data){
    var title = data.title;
    var date = data.date;
    var heading = data.heading;
    var content = data.content;
    var htmlTemplate = ``;
}


app.get('/' , function(req, res){
    re.sendFile(path.join(__dirname, 'ui', 'index.html'));
});

function hash(input , salt){
    var hashedWord = crypto.pbkdf25sync(input, salt, 1000, 512, 'sha512');
    return hashedWord.toString('hex');
}

app.get('/hash/:input' , function(req, res){
    var hashedPd = hash(req.params.input, 'salt-for-some-string');
    res.send(hashedPd);
})















var port = 8080; // Use 8080 for local development because you might already have apache running on 80
app.listen(8080, function () {
  console.log(`IMAD course app listening on port ${port}!`);
});















