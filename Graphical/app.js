var express = require("express");
var app = express();
var bodyParser = require("body-parser");
app.use(express.static('public'));
var sqlite3 = require("sqlite3").verbose();
app.use(bodyParser.urlencoded({ extended: true }));
app.set('view engine', 'ejs');
app.use(express.json());

let db = new sqlite3.Database('mydb.sqlite3', (err) => {
    if (err) {
      return console.error(err.message);
    }
    console.log('Connected to the database');
  });

let clrs=["#FF0000","#FFA500","#00FF00","#0000FF","#800080","#FFFF00"];
let nums=["1","2","3","4","5","6","A","B","C","D","E","F"];

function shuffle(array) {
  var currentIndex = array.length,  randomIndex;
  while (0 !== currentIndex) {
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex--;
    [array[currentIndex], array[randomIndex]] = [
      array[randomIndex], array[currentIndex]];
  }
  return array;
}


function generate(clrs,nums)
{
  var final=[];
  final.push([clrs[0],nums[0],nums[6]]);
  final.push([clrs[1],nums[1],nums[7]]);
  final.push([clrs[2],nums[2],nums[8]]);
  final.push([clrs[3],nums[3],nums[9]]);
  final.push([clrs[4],nums[4],nums[10]]);
  final.push([clrs[5],nums[5],nums[11]]);
  return final;
}

function disp(final)
{
  console.log(final[0]);
  console.log(final[1]);
  console.log(final[2]);
  console.log(final[3]);
  console.log(final[4]);
  console.log(final[5]);
}

app.get("/",function(req,res){
  res.render("templogin.ejs")
})

app.get("/log",function(req,res){
res.render("templogin.ejs")
})

app.post("/login",function(req,res){
var {uname,psw}=req.body
console.log(uname);
db.all(`SELECT ppass,color FROM user WHERE uname='${uname}'`, (err, row) =>
{
  if(err)
  {
    console.log(err)
  }
  else{
    console.log(row[0]);
    if(row[0].ppass===psw)
    {
      nums=shuffle(nums);
      clrs=shuffle(clrs);
      var final=generate(clrs,nums);
      disp(final);
      res.render("login2.ejs",{user:uname,final:final,color:row[0].color})
    }
    else{
      res.send("Incorrect credentials")
    }
  }
});
})


app.post("/first",function(req,res){
  var {uname,pwd}=req.body
  db.all(`SELECT spass FROM user WHERE uname='${uname}'`, (err, row) =>
  {
    if(err)
    {
      console.log(err)
    }
    else{
      if(row[0].spass===pwd)
      {
        res.status(200).json({ message: 'Logged In' });
      }
      else{
        res.status(401).json({ message: 'Failed Login' });
      }
    }
  });
  })


  app.get("/final",function(req,res){
    res.render("final.ejs")
  })



app.post("/register",async function(req,res){
  var {uname,ppass,spass,color}=req.body;
  console.log(color);
  db.run(`INSERT INTO user(uname,ppass,spass,color) VALUES(?,?,?,?)`, [uname,ppass,spass,color], function (err) {
      if (err) {
        res.status(401).json({ message: 'Error' })
      }
      else {
        res.status(200).json({ message: 'Inserted!' })
      }
    })
})


app.listen(3000, function () {
  console.log("Server Running at 3000");
})
