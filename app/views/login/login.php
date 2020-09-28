<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Admin Login Page</title>
<style>
body {font-family: arial;font-size: 15px;line-height: 18px;margin: 0 auto;width: 1100px;background:#EEEEEE}
a{color:#77d25b;} 

.content{background: #fff;font-size: 16px;line-height: 22px;margin-bottom: 3px;margin-top: 3px;min-height: 380px;overflow: hidden;padding: 10px;}

.subject {border-bottom: 1px solid #77d25b;font-size: 20px;margin-bottom: 10px;padding-bottom: 10px;}
.subject p{margin:0;}
 
.insert{color:#06960E;font-weight:bold;}
.delete{color:#DE5A24;font-weight:bold;}

.mainleft{border-right: 1px dotted #999;float:left;margin-right:16px;width: 350px;}
.mainright{float:right;width:450px;}

.tblone{width:100%;border:1px solid #fff;}
.tblone td{padding:5px 10px;text-align:center;}

table.tblone tr:nth-child(2n+1){background:#fff;height:30px;}
table.tblone tr:nth-child(2n){background:#fdf0f1;height:30px;}

input[type="text"], input[type="password"] {border:1px solid #ddd;margin-bottom:5px;padding:5px;width:228px;font-size:16px}
input[type="submit"]{cursor: pointer}


.loginForm{
    width: 400px;
    margin: 50px auto;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 5px 5px 5px 5px #999;
    padding: 20px;
}




.footeroption{height:90px;background:#77d25b;overflow:hidden;padding-top:10px;}
.footerone {background: #669e55;border-radius: 5px;float: left;font-size:18px;line-height:23px;margin-left: 90px;padding:6px 10px;text-align:center;text-shadow: 1px 0 2px #fff;width:900px;overflow: hidden;}
.footerone p{margin:0;}
</style>
</head>
<body>
  <header class="headeroption">
	
  </header>
<div class="content">


<h3>Login Page</h3> <hr/>

<div class="loginForm">
    <form action="<?php echo BASE_URL; ?>/LoginController/loginAuth" method="post">
        <table>
            <tr>
                <td><b>User Name</b></td>
                <td><input type="text" name="username" placeholder="Username"/></td>
            </tr>

            <tr>
                <td><b>Password</b></td>
                <td><input type="password" name="password" placeholder="Password"/></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Login"/></td>
            </tr>
        </table>
    </form>
</div>

</div>

</body>
</html>