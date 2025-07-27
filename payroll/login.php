<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin | Employee's Payroll Management System</title>
 	

<?php include('./header.php'); ?>
<?php include('./db_connect.php'); ?>
<?php 
session_start();
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>

</head>
<style>
	body{
		margin-top: 100px;
		width: 100%;
	    height: calc(100%);
		background-color: white;
	}
	.container{
		display:flex;
		flex-direction: row;
		align-items: center;
		width: 1000px;
	}
	.frm{
		padding:10px;
		border: 1px solid black;
		border-radius:10px;
		width: 100%;
	}
	button{
		margin-top: 10px;
	}
	@media only screen and (max-width: 600px) {
		body{
			margin-top: 0px;
		}
		.container{
			display:flex;
			flex-direction: column;
			align-items: center;
			width: 90%;
		}
		img{
			width: 100%;
		}
	}
</style>

<body>
	<div class="container">
		<img src="assets\img\cover.jpg" alt="Login Cover" width="500px">
		<div class="frm">
			<form id="login-form" >
					<label for="username" class="control-label">Username</label>
					<input type="text" id="username" name="username" class="form-control">
					<label for="password" class="control-label">Password</label>
					<input type="password" id="password" name="password" class="form-control">
				<center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button></center>
			</form>
		</div>
	</div>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=home';
				}else if(resp == 2){
					location.href ='voting.php';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>	
</html>