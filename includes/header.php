<?php
date_default_timezone_set('Asia/Colombo');
?>

<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #03092b;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: white;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #04198b;
  color: white;
}

.header-right {
  float: right;
}
.header-left {
  float: left;
  padding: 2px;
}
.school-info-card{
  background-color: #d6d6cd;
  padding: 2px;
  font-weight: bold;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
  .header-left {
    float: none;
  }
}

#schooltitle{
	font-family: fantasy;
	font-size: 30px;
	color: #b2beb5;
	text-decoration: none;
}
#timehandle{
	font-family: monospace;
	font-size: 14px;
	color: #b2beb5;
	text-decoration: none;
}
.menu-bar{
	background: #03092b;
	text-align: center;
}
.admin-access-btn1{
 position: absolute; 
 right: 0px;
 top:0px;
 background-color: yellow;
 color: black;
}
.admin-access-btn2{
 position: absolute; 
 right: 100px;
 top:0px;
 background-color: yellow;
 color: black;
}
</style>
</head>

<body>

<div class="menu-bar">
	<span id="schooltitle" href="index.php">කහදූව ජාතික පාසල</span><br>
	<span id="timehandle"><?php echo "". date("l ") . date("| Y.m.d |");?><?php include_once("clock.php");?></span>
</div>

<div class="header">

  <div class="header-left school-info-card">
    <span>පාසල් අංකය : 07184<br>සංඝණන අංකය : 06145<br>පාසල් වර්ගය : 1-AB</span>
  </div>

  <div class="header-right">
    <a href="index.php"><i class="fas fa-home">&nbsp;&nbsp;මුල් පිටුව</i></a>
    <a href="index.php#about-area"><i class="fas fa-info">&nbsp;&nbsp;අප ගැන</i></a>
    <a href="contact-us.php"><i class="fas fa-phone-alt">&nbsp;&nbsp;විමසීම්</i></a>
  </div>

</div>