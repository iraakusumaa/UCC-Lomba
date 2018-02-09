<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="styles.css">
  

<style>
  body{
	padding: 0;
	bottom: 0;
    }
    a{
      text-decoration: none;
      color: #000;
    }
    a:hover{
      color: #fff;
      text-decoration: none;
    }

    #wrapper{
      background: url('https://images.pexels.com/photos/845242/pexels-photo-845242.jpeg?w=940&h=650&auto=compress&cs=tinysrgb');
      background-size: 100% 100%;
      background-repeat: no-repeat;
      min-height: 100vh;
      max-width: 100%;
      padding: 50px 0 5px;
    }


    /* === HALAMAN DEPAN INDEX.HTML === */
    .welcome{
      margin-left: 500px;
      margin-top: 200px;
      text-align: center;
    }
    .welcome a{
      padding: 10px;
      height: auto;
    }


    .card{
      height: 200px;
      padding-top: 30px;
    }

    /* === Sign Up dan Sign In === */
    #main{
      background: orange;  /* fallback for old browsers */
      text-align: center;
      padding: 5px;
      width: 400px;
      height: auto;
      margin: auto;
    }
    .main-img{
      padding: 5px 0;
    }
    .main-img img{
      border-radius: 50%;
      border: 5px solid #fff;
      width: 150px;
      height: 150px;
    }
    .main-header{
      padding: 10px 0 20px;
    }
    .main-header h2{
      text-transform: uppercase;
      color: #fff;
    }
    .main-form i{
      float: left;
      width: 10%;
      padding: 12px 0;
      color: #fff;
    }
    .main-form input{
      float: left;
      width: 90%;
      margin-bottom: 10px;
      height: 40px;
      border: none;
      background: transparent;
      color: #fff;
      padding-left: 10px;
      -webkit-transition: all 0.30s ease-in-out;
      -moz-transition: all 0.30s ease-in-out;
      -ms-transition: all 0.30s ease-in-out;
      -o-transition: all 0.30s ease-in-out;
    }
    .main-form input:focus{
      box-shadow: 0 0 5px rgba(81, 203, 238, 1);

      border: 1px solid rgba(81, 203, 238, 1);
    }
    .form-login, .form-password, .form-confrim{
      display: inline-block;
      width: 100%;
      color: #fff;
      border-bottom: 2px solid #fff;
    }
    ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
      color: #fff;
    }
    ::-moz-placeholder { /* Firefox 19+ */
      color: #fff;
    }
    :-ms-input-placeholder { /* IE 10+ */
      color: #fff;
    }
    :-moz-placeholder { /* Firefox 18- */
      color: #fff;
    }
    .main-form .form-button{
      padding: 10px 0;
    }
    .main-form button{
      width: 100%;
      color: #fff;
      background: red;

    }
    .main-form button:hover{
      -webkit-box-shadow: 7px 6px 23px 1px rgba(0,0,0,0.75);
      -moz-box-shadow: 7px 6px 23px 1px rgba(0,0,0,0.75);
      box-shadow: 7px 6px 23px 1px rgba(0,0,0,0.75);
    }
    #main p{
      color: #fff;
    }
  
  
</style>

</head>
<body>

<div id="wrapper">
	<div id="main">
		<div class="main-img">
			<img src="https://images.pexels.com/photos/449734/pexels-photo-449734.jpeg?w=940&h=650&auto=compress&cs=tinysrgb">
		</div>
		<div class="main-header">
			<h2>Sign Up Form</h2>
		</div>
		<div class="main-form">
			<form action=""  name="form" method="post">
                 <div class="form-login">
					<span><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
					<input type="text" name="name" id="name" placeholder="Name">
					<div class="clearfix"></div>
				</div>
				<div class="form-login">
					<span><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
					<input type="email" name="email" id="email" placeholder="Email">
					<div class="clearfix"></div>
				</div>
				<div class="form-password">
					<span><i class="fa fa-lock" aria-hidden="true"></i></span>
					<input type="password" name="password" id="password" placeholder="Password">
					<div class="clearfix"></div>
				</div>
				<div class="form-confrim">
					<span><i class="fa fa-lock" aria-hidden="true"></i></span>
					<input type="password" name="confrim" id="confrim" placeholder="Confrim Password">
					<div class="clearfix"></div>
				</div>
                {{ csrf_field()}}
				<div class="form-button">
				<button type="submit" class="btn" id="submit">REGISTER NOW</button>
				</div>
			</form>
		</div>
		<p>Have an Account? Please <a href="login.html">Login</a> now!</p>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- <script type="text/javascript">

var emailDOM = document.getElementById("email");
var passwordDOM = document.getElementById("password");
var confrimDOM = document.getElementById("confrim");
var submitDOM = document.getElementById("submit");

submitDOM.addEventListener('click', function(){
	var email = emailDOM.value;
	var password = passwordDOM.value;
	var confrim = confrimDOM.value;

	if(email == "" || password == "" || confrim == ""){
		alert("Form Kurang Lengkap");
		return;
	}if(password != confrim){
		alert("Password tidak sama");
		return;
	}else{
		alert("Berhasil Daftar"); 
	}
});

</script> -->


</body>
</html>