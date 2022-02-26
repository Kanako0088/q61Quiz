// const express = require('express');
const mysql = require('mysql');

const app = express();

var connection = mysql.createConnection({
  database: 'laraveldb',
  host     : 'db',
  user     : 'root',
  password : 'root'
});

connection.connect((err) => {
  if (err) {
    console.log('error connecting: ' + err.stack);
    return;
  }
  console.log('success');
});

app.get('/', (req, res) => {
  connection.query(
    'SELECT * FROM users',
    (error, results) => {
      console.log(results);
      // res.render('hello.ejs');
    }
  );
});

app.listen(8000);
