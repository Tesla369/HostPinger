<?php
ob_start();
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#000000"/>
<center><h1><a href="./"><img src="../img/logo.png" width="50"></a> H<b style="color:#ff0000">0</b>stP<b style="color:#00ff00">1</b>nger</h1></center>
<link rel="icon" href="../img/logo.png  " type="image/icon type">
<title>
HostPinger
</title>
<style>

@import url("https://fonts.googleapis.com/css2?family=Asap&family=Roboto:ital,wght@0,500;0,900;1,500&display=swap");

header {
  width: 100%;
  height: 40vh;
  display: inline-block;
  flex-direction: column;
  align-items: center;
}
header h1 {
  position: relative;
  left: 10%;
  width: 80%;
  font-size: 60px;
  font-weight: 600;
  color: transparent;
  -webkit-background-clip: text;
  background-clip: text;   
}

.preloader {
  background-image: url('../img/pikrepo.jpg');
  background-repeat: no-repeat;
  /*background-position: center;*/
  background-attachment: fixed;
  background-size: 100% 100%;
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 999999;
    -webkit-transition: 0.6s;
    -o-transition: 0.6s;
    transition: 0.6s;
    margin: 0 auto;
}
.preloader .preloader-circle {
    width: 100px;
    height: 100px;
    position: absolute;
    top: 50%;
    left:50%;
    margin: -76px 0 0 -76px;
    border-style: solid;
    border-width: 3px;
    border-top-color: #ff656a;
    border-bottom-color: transparent;
    border-left-color: transparent;
    border-right-color: transparent;
    z-index: 10;
    border-radius: 50%;
    -webkit-box-shadow: 0 1px 5px 0 rgba(35, 181, 185, 0.15);
    box-shadow: 0 1px 5px 0 rgba(35, 181, 185, 0.15);
    background-color: #ffffff;
    -webkit-animation: zoom 2000ms infinite ease;
    animation: zoom 2000ms infinite ease;
    -webkit-transition: 0.6s;
    -o-transition: 0.6s;
    transition: 0.6s;
}
.preloader .preloader-circle2 {
    border-top-color: #0078ff;
}
.preloader .preloader-img {
    position: absolute;
    top: 50%;
    z-index: 200;
    left: 0;
    right: 0;
    margin: 0 auto;
    text-align: center;
    display: inline-block;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    padding-top: 6px;
    -webkit-transition: 0.6s;
    -o-transition: 0.6s;
    transition: 0.6s;
}
.preloader .preloader-img img {
    max-width: 55px;
}
.preloader .pere-text strong {
    font-weight: 800;
    color: #dca73a;
    text-transform: uppercase;
}

@-webkit-keyframes zoom {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        -webkit-transition: 0.6s;
        -o-transition: 0.6s;
        transition: 0.6s;
    }
    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
        -webkit-transition: 0.6s;
        -o-transition: 0.6s;
        transition: 0.6s;
    }
}
@keyframes zoom {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        -webkit-transition: 0.6s;
        -o-transition: 0.6s;
        transition: 0.6s;
    }
    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
        -webkit-transition: 0.6s;
        -o-transition: 0.6s;
        transition: 0.6s;
    }
}

#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 120px;
  height: 120px;
  margin: -76px 0 0 -76px;
  border: 16px solid #ff0000;
  border-radius: 50%;
  border-top: 16px solid #00ff00;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
  0%   {filter: blur(8px);}
  25%  {filter: blur(6px);}
  50% {filter: blur(4px);}
  75%  {filter: blur(2px);}
  100% {filter: blur(0px);}

}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
  0%   {filter: blur(8px);}
  25%  {filter: blur(6px);}
  50% {filter: blur(4px);}
  75%  {filter: blur(2px);}
  100% {filter: blur(0px);}
}

#myDiv {
  display: none;
  text-align: center;
}
th, td {
  text-align: center;
  padding-top: 5px;
  padding-bottom: 5px;
  padding-right: 15px;
  padding-left: 15px;
}

@keyframes colorchange {
  0%   {background: red;filter: blur(8px);}
  25%  {background: green;filter: blur(6px);}
  50% {background: linear-gradient(to left, #800000 0%, #003300 100%);filter: blur(4px);}
  75%  {background: linear-gradient(to right, #800000 0%, #003300 100%);filter: blur(2px);}
  100% {background: linear-gradient(to left, #800000 0%, #003300 100%);filter: blur(0px);}
}

th {
  position: sticky;
  top: 0;
  border: 1px solid cyan;
  background: linear-gradient(to right, #00ffff 0%, #808080 2%, #5A5A5A 10%, #000000 30%, #000000 70%, #5A5A5A 90%, #808080 98%, #00ffff 100%);
  color: white;
  }

.tableContainer {
    height: 45%;
    width: 60%;
    overflow-y: scroll;
}
.table {
    position: sticky;
}

::-webkit-scrollbar {
    display: none;
}

.tableContainer {
    -ms-overflow-style: none;  /* Internet Explorer 10+ */
    scrollbar-width: none;  /* Firefox */
}
.tableContainer::-webkit-scrollbar { 
    display: none;  /* Safari and Chrome */
}

body {
font-family: "Asap", sans-serif;
color: white;
 /*background: radial-gradient(#e0ffff, #000000);*/
  background-image: url('../img/image.jpg');
  background-repeat: no-repeat;
  /*background-position: center;*/
  background-attachment: fixed;
  background-size: 100% 100%;
  /*height: 100%;
  filter: blur(8px);
    -webkit-filter: blur(8px);
  animation-name: colorchang;
  animation-duration: 4s;*/
}

tr {
color: black;
}

.panel { display: none; }
.show { display: block; }

/*
button { text-transform: uppercase; }
button:hover { cursor: pointer; background-color: #fffff0; }
*/


button{
  font-family: "Asap", sans-serif;
  color: cyan;
  background-color: inherit;
  border: 0;
  cursor: pointer;

}

.button1 {
	border: 0;
	border-color: #18bccc;
	border-radius: 100%;
        cursor: pointer;
        ///padding-top: 10;
	///padding-left: 10;
	///height: 30;
	width: 40;
	///z-index: 1;
        appearance: none;
        background-color: inherit;
	color: cyan;
	font-size: 24px;
        transition: transform .7s ease-in-out;
        margin-left:10px;
}

.button1:hover {
	color: white;
        transform: rotate(360deg);
}

.button2{

  font-family: "Asap", sans-serif;
  color: cyan;
  background-color: inherit;
  border: 0;
  cursor: pointer;

}

.button2:hover {
	color: white;
}

.button3 {
        border: 0;
        border-color: #18bccc;
        border-radius: 100%;
        cursor: pointer;
        ///padding-top: 10;
        ///padding-left: 10;
        ///height: 30;
        width: 40;
        ///z-index: 1;
        appearance: none;
        background-color: inherit;
        color: cyan;
        font-size: 24px;
        transition: transform .7s ease-in-out;
        margin-left:10px;
}

.button3:hover {
        color: white;
        transform: rotate(360deg);
}

#username {
  border: none;
  background: transparent;
  margin: 0;
  padding: 7px 8px;
  font-size: 14px;
  color: inherit;
  border: 1px solid transparent;
  border-radius: inherit;
}

#username::placeholder {
color: #bbb;
}

#username:focus {
  box-shadow: 0 0 3px 0 cyan;
  border-color: cyan;
  outline: none;
}

#password {
  border: none;
  background: transparent;
  margin: 0;
  padding: 7px 8px;
  font-size: 14px;
  color: inherit;
  border: 1px solid transparent;
  border-radius: inherit;
}

#password::placeholder {
color: #bbb;
}

#password:focus {
  box-shadow: 0 0 3px 0 cyan;
  border-color: cyan;
  outline: none;
}

#ibdoid {
  border: none;
  background: transparent;
  margin: 0;
  padding: 7px 8px;
  font-size: 14px;
  color: inherit;
  border: 1px solid transparent;
  border-radius: inherit;
}

#ibdoid::placeholder {
color: #bbb;
}

#ibdoid:focus {
  box-shadow: 0 0 3px 0 cyan;
  border-color: cyan;
  outline: none;
}

#q { 
  border: none;
  background: transparent;
  margin: 0;
  padding: 7px 8px;
  font-size: 14px;
  color: inherit;
  border: 1px solid transparent;
  border-radius: inherit;
   margin-left: 5%;
   /*padding: 5px; 
   font-size: 1em;  
   line-height: 20px; 
   background-color: inherit;
   color: white;
   border-color: #18bccc;
   border-radius: 12px;*/
}

#q::placeholder {
color: #bbb;
}

#b { 
   /* image replacement */
   /*text-indent: -99999px;*/
  text-indent: -999px;
  overflow: hidden;
  width: 24px;
  padding: 0;
  margin: 0;
  border: 1px solid transparent;
  border-radius: inherit;
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg style='color: rgb(0, 255, 255);' xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' class='bi bi-gear-wide-connected' viewBox='0 0 16 16'%3e%3cpath d='M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z' fill='%2300ffff'%3e%3c/path%3e%3c/svg%3e");
  cursor: pointer;
  opacity: 0.7;
  font-size: 20px;

   /* placing next to input using float or absolute positioning omitted ... */
}

#b::hover {
  font-size: 20px;
  opacity: 1;
}

#b button::after {content: "ADMIN";}
.buttons .button3:after {content: "ADMIN";}

#b1 { 
   /* image replacement */
   /*text-indent: -99999px;*/
  text-indent: -999px;
  overflow: hidden;
  width: 24px;
  padding: 0;
  margin: 0;
  border: 1px solid transparent;
  border-radius: inherit;
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg style='color: rgb(0, 255, 255);' width='24' height='24' viewBox='0 0 48 48' fill='none' xmlns='http://www.w3.org/2000/svg'%3e%3cpath fill-rule='evenodd' clip-rule='evenodd' d='M24 42C33.9411 42 42 33.9411 42 24C42 14.0589 33.9411 6 24 6C14.0589 6 6 14.0589 6 24C6 33.9411 14.0589 42 24 42ZM24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z' fill='%2300ffff'%3e%3c/path%3e%3cpath d='M12 35.6309C12 34.5972 12.772 33.7241 13.7995 33.6103C21.515 32.7559 26.5206 32.8325 34.218 33.6287C35.2324 33.7337 36 34.5918 36 35.6116C36 36.1807 35.7551 36.7275 35.3262 37.1014C26.2414 45.0195 21.0488 44.9103 12.6402 37.1087C12.2306 36.7286 12 36.1897 12 35.6309Z' fill='%2300ffff'%3e%3c/path%3e%3cpath fill-rule='evenodd' clip-rule='evenodd' d='M34.1151 34.6234C26.4784 33.8334 21.5449 33.7587 13.9095 34.6042C13.3954 34.6612 13 35.1002 13 35.6309C13 35.9171 13.1187 36.1885 13.3204 36.3757C17.4879 40.2423 20.6461 41.9887 23.7333 41.9999C26.8309 42.0113 30.1592 40.2783 34.6691 36.3476C34.8767 36.1667 35 35.8964 35 35.6116C35 35.0998 34.6154 34.6752 34.1151 34.6234ZM13.6894 32.6164C21.4852 31.7531 26.5628 31.8315 34.3209 32.6341C35.8495 32.7922 37 34.0838 37 35.6116C37 36.465 36.6336 37.2884 35.9832 37.8553C31.4083 41.8426 27.598 44.0141 23.726 43.9999C19.8435 43.9857 16.2011 41.7767 11.9601 37.8418C11.3425 37.2688 11 36.4624 11 35.6309C11 34.0943 12.1487 32.787 13.6894 32.6164Z' fill='%2300ffff'%3e%3c/path%3e%3cpath d='M32 20C32 24.4183 28.4183 28 24 28C19.5817 28 16 24.4183 16 20C16 15.5817 19.5817 12 24 12C28.4183 12 32 15.5817 32 20Z' fill='%2300ffff'%3e%3c/path%3e%3cpath fill-rule='evenodd' clip-rule='evenodd' d='M24 26C27.3137 26 30 23.3137 30 20C30 16.6863 27.3137 14 24 14C20.6863 14 18 16.6863 18 20C18 23.3137 20.6863 26 24 26ZM24 28C28.4183 28 32 24.4183 32 20C32 15.5817 28.4183 12 24 12C19.5817 12 16 15.5817 16 20C16 24.4183 19.5817 28 24 28Z' fill='%2300ffff'%3e%3c/path%3e%3c/svg%3e");
  cursor: pointer;
  opacity: 0.7;
  font-size: 20px;

   /* placing next to input using float or absolute positioning omitted ... */
}

#b1::hover {
  opacity: 1;
}

#q:focus {
  box-shadow: 0 0 3px 0 cyan;
  border-color: cyan;
  outline: none;
}

#ib { 
  border: none;
  background: transparent;
  margin: 0;
  padding: 7px 8px;
  font-size: 14px;
  color: inherit;
  border: 1px solid transparent;
  border-radius: inherit;
}

#ib::placeholder {
color: #bbb;
}

#ib:focus {
  box-shadow: 0 0 3px 0 cyan;
  border-color: cyan;
  outline: none;
}

.loginbox {
   background: rgba(256, 256, 256, 0.1);
   margin-top: 10%;
   margin-bottom: 10%;
   margin-left: 35%;
   margin-right: 35%;
   overflow: hidden;
}

.logintxt{
   color: white;
}

.searchform{ margin-left: -100%; }

</style>
</head>
<center>

<body onload="myFunction()">
<!-- Preloader Start -->
<div id="preloader-active">
<div class="preloader d-flex align-items-center justify-content-center">
<div class="preloader-inner position-relative">
<div class="preloader-circle">
<div class="preloader-img pere-text"><img src="../img/loaderimg.png" /></div></div>
</div>
</div>
</div>
<!-- Preloader Ends -->

<div style="display:none;" id="myDiv" class="animate-bottom">
<div class="container">
<div class="loginbox">
<h1 class="logintxt">Profile</h1>

<div class="buttons">
<button data-id="usrlogin" class="button1" id="b1" onclick="window.location.href='../usr'">USER</button> User
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button data-id="admlogin" class="button1" id="b">ADMIN</button> Admin
&nbsp&nbsp&nbsp&nbsp
<button data-id="clear" class="button1" onclick="clearAllResults()">x</button> Close
</div>

<div class="panel" id="admlogin">
<h4>ADMIN LOGIN:</h4>
<form action="<?php echo($_SERVER["SCRIPT_NAME"]);?>" method="POST">
<input type="text" id="username" name="username" placeholder="Username" size="10" autocomplete="off">
&nbsp&nbsp&nbsp&nbsp
<input type="password" id="password" name="password" placeholder="Password" size="10" autocomplete="off">
&nbsp&nbsp&nbsp&nbsp
<button class="button2" type="submit" name="loginadmin" id="loginadmin" value="submit">Login</button>
</form>
<p id="loginentop"></p>
</div>

<div class="panel" id="clear">
</div>

<br>
<div><br></div>
</div>

<?php

require('../common/db_connect.php');

// Assigning POST values to variables.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username) && $username === "")
{
// echo "Error Processing your Request. Please fill all the Required Fields. Empty Username";
echo "<script>alert('Error Processing your Request. Please fill all the Required Fields')</script>";
echo "<script type='text/javascript'>window.location='./#Required Fields are Empty'</script>";
exit();
}

if (empty($password) && $password === "")
{
// echo "Error Processing your Request. Please fill all the Required Fields. Empty Password";
echo "<script>alert('Error Processing your Request. Please fill all the Required Fields')</script>";
echo "<script type='text/javascript'>window.location='./#Required Fields are Empty'</script>";
exit();
}

// $password = hash("sha1", $password, false);

// Prevent HTMLi/XSS
$username = trim(htmlspecialchars($username));
$password = trim(htmlspecialchars($password));

// Prevent SQLi
$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);


$query = "SELECT * FROM AuthInfo WHERE username = '" . $username;
$query.= "' AND BINARY password = '" . $password . "'";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
//session_start();
$_SESSION['valid'] = true;
$_SESSION['timeout'] = time();
$_SESSION['username'] = $username;
header("Location: ../admin");
exit();
}

else{
// echo "Invalid Login Credentials";
echo "<script>alert('Invalid Login Credentials')</script>";
// echo "<script>document.getElementById(\"loginentop\").innerHTML = \"Login Failed\"</script>";
echo "<script>window.location='./#INVALID LOGIN CREDENTIALS'</script>";
}


}
?>

<script>

// Cache out buttons container, and all of the panels
const buttons = document.querySelector('.buttons');
const panels = document.querySelectorAll('.panel');

// Add an event listener to the buttons container
buttons.addEventListener('click', handleClick);

// When a child element of `buttons` is clicked
function handleClick(e) {
 
  // Check to see if its a button
  if (e.target.matches('button')) {

    // For every element in the `panels` node list use `classList`
    // to remove the show class
    panels.forEach(panel => panel.classList.remove('show'));

    // "Destructure" the `id` from the button's data set
    const { id } = e.target.dataset;

    // Create a selector that will match the corresponding
    // panel with that id. We're using a template string to
    // help form the selector. Basically it says find me an element
    // with a "panel" class which also has an id that matches the id of
    // the button's data attribute which we just retrieved.
    const selector = `.panel[id="${id}"]`;

    // Select the `div` and, using classList, again add the
    // show class
    document.querySelector(selector).classList.add('show');
  }
}

</script>

    <script>
        (function(document) {
            'use strict';

            var TableFilter = (function(myArray) {
                var search_input;

                function _onInputSearch(e) {
                    search_input = e.target;
                    var tables = document.getElementsByClassName(search_input.getAttribute('data-table'));
                    myArray.forEach.call(tables, function(table) {
                        myArray.forEach.call(table.tBodies, function(tbody) {
                            myArray.forEach.call(tbody.rows, function(row) {
                                var text_content = row.textContent.toLowerCase();
                                var search_val = search_input.value.toLowerCase();
                                row.style.display = text_content.indexOf(search_val) > -1 ? '' : 'none';
                            });
                        });
                    });
                }

                return {
                    init: function() {
                        var inputs = document.getElementsByClassName('search-input');
                        myArray.forEach.call(inputs, function(input) {
                            input.oninput = _onInputSearch;
                        });
                    }
                };
            })(Array.prototype);

            document.addEventListener('readystatechange', function() {
                if (document.readyState === 'complete') {
                    TableFilter.init();
                }
            });

        })(document);
    </script>

<script>

var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("preloader-active").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</body>
</center>
</html>
