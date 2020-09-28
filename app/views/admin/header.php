<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Complete PHP with MVC</title>
  <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>


<style>
body {font-family: arial;font-size: 15px;line-height: 18px;margin: 0 auto;width: 1100px;background:#EEEEEE}
a{color:#77d25b;} 
.headeroption {background: #77d25b url("") no-repeat scroll 25px 12px;height: 74px;overflow: hidden;padding-left: 140px;}
.headeroption h2{color: #000;font-size: 30px;padding-top: 2px;text-shadow: 0 1px 1px #fff;}
.content{background: #fff;font-size: 16px;line-height: 22px;margin-bottom: 3px;margin-top: 3px;min-height: 380px;overflow: hidden;padding: 10px;}

.subject {border-bottom: 1px solid #77d25b;font-size: 20px;margin-bottom: 10px;padding-bottom: 10px;}
.subject p{margin:0;}
 
.insert{color:#06960E;font-weight:bold;}
.delete{color:#DE5A24;font-weight:bold;}

.adminLeft{
  border-right: 1px solid #ddd;
  float: left;
  margin-right: 10px;
  padding-right: 10px;
  width: 220px;
}
.widget{margin-bottom: 20px;}
.widget h3{
  background: #77d25b none repeat scroll 0 0;
  border-bottom: 2px solid #ddd;
  color: #000;
  margin: 0 0 2px;
  padding: 5px;
  text-shadow: 0 1px 1px #fff;
}
.widget ul{margin: 0; padding: 0px; list-style: none;}
.widget ul li{display: block;}
.widget ul li a{
  background: #ddd none repeat scroll 0 0;
  border-bottom: 1px solid #fff;
  color: #000;
  display: block;
  padding: 5px 10px;
  text-decoration: none;
}
.widget ul li a:hover{
  background: #bebebe;
}
.adminRight{
  width: 800px;
  float: right;
}
.adminRight h2{
  width: 800px;
  float: right;
  padding: 5px 10px;
  background: #fafafa;
}





.mainleft{border-right: 1px dotted #999;float:left;margin-right:16px;width: 350px;}
.mainright{float:right;width:450px;}

.tblone{width:800px;border:1px solid #fff;}
.tblone td{padding:5px 10px;text-align:center;}

table.tblone tr:nth-child(2n+1){background:#fff;height:30px;}
table.tblone tr:nth-child(2n){background:#fdf0f1;height:30px;}

input[type="text"] {border:1px solid #ddd;margin-bottom:5px;padding:5px;width:228px;font-size:16px}
input[type="submit"]{cursor: pointer}
.cat{border:1px solid #ddd;margin-bottom:5px;padding:5px;width:228px;font-size:16px; cursor: pointer;}

.footeroption{height:90px;background:#77d25b;overflow:hidden;padding-top:10px;}
.footerone {background: #669e55;border-radius: 5px;float: left;font-size:18px;line-height:23px;margin-left: 90px;padding:6px 10px;text-align:center;text-shadow: 1px 0 2px #fff;width:900px;overflow: hidden;}
.footerone p{margin:0;}
</style>
</head>
<body>
  <header class="headeroption">
    <h2> Complete PHP with MVC </h2>
	
  </header>
<div class="content">


Admin Portal <hr/>