﻿<?php session_start();
require_once('includes/functions.php');
$error=99;
  if(!isset($_SESSION['usuario'])){ 
        if(isset($_POST['btnLogin'])){
                if(comprobarLogin($_POST['email'],$_POST['pass'])==1){
                    $_SESSION['usuario'] = $_POST['email'];
                     header ("Location: index.php");
                   
                }else{
                    $error = 1;
                }
        }else{ 
                $error=0;
            }
    }else{
            $error=2;
    }

        /*
            ERROR 0 = TODAVIA NO SE ENVIARON LOS DATOS DEL FORMULARIO
            ERROR 1 = USUARIO O CONTRASENA MALOS
            ERROR 2 = YA INICIO SESION
        */
 ?>
<!DOCTYPE html>
<html lang="en">
<?php ?>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login Form </title>
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="css/modern-business.css" rel="stylesheet"/>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
	<style>
        body{
            padding-top:0;
            
        }
		.dropdown label , .dropdown input , .dropdown button{
			margin-bottom:10px;
		}
		.modal-title{
			text-align:center;
		}
	#tblFormulario tr td{
		padding:5px;
	}
        .navbar{
            margin-bottom:0;
        }
        .active{
            height:20px;
        }
        #contentLogin {
                 background: #f9f9f9;
            	background: -moz-linear-gradient(top,  rgba(248,248,248,1) 0%, rgba(249,249,249,1) 100%);
            	background: -webkit-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
            	background: -o-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
            	background: -ms-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
            	background: linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
            	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f8f8f8', endColorstr='#f9f9f9',GradientType=0 );
            	-webkit-box-shadow: 0 1px 0 #fff inset;
            	-moz-box-shadow: 0 1px 0 #fff inset;
            	-ms-box-shadow: 0 1px 0 #fff inset;
            	-o-box-shadow: 0 1px 0 #fff inset;
            	box-shadow: 0 1px 0 #fff inset;
            	border: 1px solid #c4c6ca;
            	margin: 0 auto;
            	padding: 25px 0 0;
            	position: relative;
            	text-align: center;
            	text-shadow: 0 1px 0 #fff;
            	width: 400px;
}
    #contentLogin:before {
        content: "";
        -webkit-transform: rotate(-3deg);
        -moz-transform: rotate(-3deg);
        -ms-transform: rotate(-3deg);
        -o-transform: rotate(-3deg);
        /*transform: rotate(-3deg);*/
        top: 0;
        z-index: -2;
        }
        #contentLogin h1{
        	color: #7E7E7E;
        	font: bold 25px Helvetica, Arial, sans-serif;
        	letter-spacing: -0.05em;
        	line-height: 20px;
        	margin: 10px 0 30px;
            
        }
        #contentLogin h1:before,
        #contentLogin h1:after {
        	content: "";
        	height: 1px;
        	position: absolute;
        	top: 10px;
        	width: 27%;
        }
        .contenedor{
            margin: 100px auto; position: relative; width: 900px;
            
        }
        #contentLogin h1:after {
        	background: rgb(126,126,126);
        	background: -moz-linear-gradient(left,  rgba(126,126,126,1) 0%, rgba(255,255,255,1) 100%);
        	background: -webkit-linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
        	background: -o-linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
        	background: -ms-linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
        	background: linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
            right: 0;
        }
        #contentLogin h1:before {
        	background: rgb(126,126,126);
        	background: -moz-linear-gradient(right,  rgba(126,126,126,1) 0%, rgba(255,255,255,1) 100%);
        	background: -webkit-linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
        	background: -o-linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
        	background: -ms-linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
        	background: linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
            left: 0;
        }
        #contentLogin:after,
        #contentLogin:before {
        	background: #f9f9f9;
        	background: -moz-linear-gradient(top,  rgba(248,248,248,1) 0%, rgba(249,249,249,1) 100%);
        	background: -webkit-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
        	background: -o-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
        	background: -ms-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
        	background: linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
        	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f8f8f8', endColorstr='#f9f9f9',GradientType=0 );
        	border: 1px solid #c4c6ca;
        	content: "";
        	display: block;
        	height: 100%;
        	left: -1px;
        	position: absolute;
        	width: 100%;
        }
        #contentLogin:after {
        	-webkit-transform: rotate(2deg);
        	-moz-transform: rotate(2deg);
        	-ms-transform: rotate(2deg);
        	-o-transform: rotate(2deg);
        	transform: rotate(2deg);
        	top: 0;
        	z-index: -1;
        }
        #contentLogin:before {
        	-webkit-transform: rotate(-3deg);
        	-moz-transform: rotate(-3deg);
        	-ms-transform: rotate(-3deg);
        	-o-transform: rotate(-3deg);
        	transform: rotate(-3deg);
        	top: 0;
        	z-index: -2;
        }
        #contentLogin form { margin: 0 20px; position: relative }
        #contentLogin form input[type="text"],
        #contentLogin form input[type="password"] {
        	-webkit-border-radius: 3px;
        	-moz-border-radius: 3px;
        	-ms-border-radius: 3px;
        	-o-border-radius: 3px;
        	border-radius: 3px;
        	-webkit-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
        	-moz-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
        	-ms-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
        	-o-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
        	box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
        	-webkit-transition: all 0.5s ease;
        	-moz-transition: all 0.5s ease;
        	-ms-transition: all 0.5s ease;
        	-o-transition: all 0.5s ease;
        	transition: all 0.5s ease;
        	background: #eae7e7 url(http://cssdeck.com/uploads/media/items/8/8bcLQqF.png) no-repeat;
        	border: 1px solid #c8c8c8;
        	color: #777;
        	font: 13px Helvetica, Arial, sans-serif;
        	margin: 0 0 10px;
        	padding: 15px 10px 15px 40px;
        	width: 80%;
        }
        #contentLogin form input[type="text"]:focus,
        #contentLogin form input[type="password"]:focus {
        	-webkit-box-shadow: 0 0 2px #ed1c24 inset;
        	-moz-box-shadow: 0 0 2px #ed1c24 inset;
        	-ms-box-shadow: 0 0 2px #ed1c24 inset;
        	-o-box-shadow: 0 0 2px #ed1c24 inset;
        	box-shadow: 0 0 2px #ed1c24 inset;
        	background-color: #fff;
        	border: 1px solid #ed1c24;
        	outline: none;
        }
        #username { background-position: 10px 10px !important }
        #password { background-position: 10px -53px !important }
        #contentLogin form input[type="submit"] {
        	background: rgb(254,231,154);
        	background: -moz-linear-gradient(top,  rgba(254,231,154,1) 0%, rgba(254,193,81,1) 100%);
        	background: -webkit-linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
        	background: -o-linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
        	background: -ms-linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
        	background: linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
        	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fee79a', endColorstr='#fec151',GradientType=0 );
        	-webkit-border-radius: 30px;
        	-moz-border-radius: 30px;
        	-ms-border-radius: 30px;
        	-o-border-radius: 30px;
        	border-radius: 30px;
        	-webkit-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
        	-moz-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
        	-ms-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
        	-o-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
        	box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
        	border: 1px solid #D69E31;
        	color: #85592e;
        	cursor: pointer;
        	float: left;
        	font: bold 15px Helvetica, Arial, sans-serif;
        	height: 35px;
        	margin: 20px 0 35px 15px;
        	position: relative;
        	text-shadow: 0 1px 0 rgba(255,255,255,0.5);
        	width: 120px;
        }
        #contentLogin form input[type="submit"]:hover {
        	background: rgb(254,193,81);
        	background: -moz-linear-gradient(top,  rgba(254,193,81,1) 0%, rgba(254,231,154,1) 100%);
        	background: -webkit-linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
        	background: -o-linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
        	background: -ms-linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
        	background: linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
        	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fec151', endColorstr='#fee79a',GradientType=0 );
        }
        #contentLogin form div a {
        	color: #004a80;
            float: right;
            font-size: 12px;
            margin: 30px 15px 0 0;
            text-decoration: underline;
        }
        .button {
        	background: rgb(247,249,250);
        	background: -moz-linear-gradient(top,  rgba(247,249,250,1) 0%, rgba(240,240,240,1) 100%);
        	background: -webkit-linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
        	background: -o-linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
        	background: -ms-linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
        	background: linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
        	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f7f9fa', endColorstr='#f0f0f0',GradientType=0 );
        	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
        	-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
        	-ms-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
        	-o-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
        	box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
        	-webkit-border-radius: 0 0 5px 5px;
        	-moz-border-radius: 0 0 5px 5px;
        	-o-border-radius: 0 0 5px 5px;
        	-ms-border-radius: 0 0 5px 5px;
        	border-radius: 0 0 5px 5px;
        	border-top: 1px solid #CFD5D9;
        	padding: 15px 0;
        }
        .button a {
        
        	color: #7E7E7E;
        	font-size: 17px;
        	padding: 2px 0 2px 40px;
        	text-decoration: none;
        	-webkit-transition: all 0.3s ease;
        	-moz-transition: all 0.3s ease;
        	-ms-transition: all 0.3s ease;
        	-o-transition: all 0.3s ease;
        	transition: all 0.3s ease;
        }
        .button a:hover {
        	background-position: 0 -135px;
        	color: #00aeef;
        }
        .sectionLogin{
            background: #DCDDDF url(http://cssdeck.com/uploads/media/items/7/7AF2Qzt.png);
            height:100%;
        }
	</style>
</head>
<body>
    <?php include('cabecera.php') ?>
          <div class="section sectionLogin">
        
        <div class="contenedor">
                    <?php if($error==99): ?>
                  
                    <?php endif; ?>
                    <?php if($error == 0): ?>
                    	<section id="contentLogin">
                    		<form method="POST" id="frmLogin" action="login.php">
                    			<h1>Login Form</h1>
                    			<div>
                    				<input type="text" placeholder="Email" required="" id="username" name="email" />
                    			</div>
                    			<div>
                    				<input type="password" placeholder="Password" required="" id="password" name="pass"/>
                    			</div>
                    			<div>
                    				<input type="submit" value="Log in" name="btnLogin"/>
                    				<a href="#">Lost your password?</a>
                    				<a href="#">Register</a>
                    			</div>
                    		</form><!-- form -->
                    		<div class="button">
                    			<a href="index.php"></a>
                    		</div><!-- button -->
                    	</section><!-- content -->
                     <?php endif; ?>
                      <?php if($error == 1): ?>
                     	<section id="contentLogin">
                    		<form method="POST" id="frmLogin" action="login.php">
                    			<h1>Login Form</h1>
                    			<div class="form-group has-error">
                    				<input type="text" placeholder="Please re-enter the email" required="" id="username" name="email" />
                    			</div>
                    			<div class="form-group has-error">
                    				<input type="password" placeholder="Please re-enter the password" required="" id="password" name="pass"/>
                    			</div>
                    			<div>
                    				<input type="submit" value="Log in" name="btnLogin"/>
                    				<a href="#">Lost your password?</a>
                    				<a href="#">Register</a>
                    			</div>
                    		</form><!-- form -->
                    		<div class="button">
                    			<a href="index.php"></a>
                    		</div><!-- button -->
                    	</section><!-- content -->
                      <?php endif; ?>
                      <?php if($error == 2): ?>
                      <?php endif; ?>
                </div>
            
                  
               
           
        
        <!-- /.container -->
    </div>
    <!-- /.section -->
    
    
        <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>


</body>

</html>