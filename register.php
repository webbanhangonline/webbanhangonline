<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>REGISTER</title>
	<link rel="stylesheet" href="">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
	<style type="text/css" media="screen">
		body {
			background: url('https://static-communitytable.parade.com/wp-content/uploads/2014/03/rethink-target-heart-rate-number-ftr.jpg') fixed;
			background-size: cover;
		}

		*[role="form"] {
			max-width: 530px;
			padding: 15px;
			margin: 0 auto;
			border-radius: 0.3em;
			background-color: #f2f2f2;
		}

		*[role="form"] h2 { 
			font-family: 'Open Sans' , sans-serif;
			font-size: 40px;
			font-weight: 600;
			color: #000000;
			margin-top: 5%;
			text-align: center;
			text-transform: uppercase;
			letter-spacing: 4px;
		}


		
	</style>
	<script type="text/javascript">
		
		$(function(){
			$.validator.setDefaults({
				highlight: function(element){
					$(element)
					.closest('.form-group')
					.addClass('has-error')
				},
				unhighlight: function(element){
					$(element)
					.closest('.form-group')
					.removeClass('has-error')
				}
			});

			$.validate({
				rules:
				{	
					password: "required",
					birthDate: "required",
					weight: {
						required:true,
						number:true
					},
					height:  {
						required:true,
						number:true
					},
					email: {
						required: true,
						email: true
					}
				},
				messages:{			
					email: {
						required: true,
						email: true
					}
				},
				password: {
					required: " Please enter password"
				},
				birthDate: {
					required: " Please enter birthdate"
				},
				email: {
					required: ' Please enter email',
					email: ' Please enter valid email'
				},
				weight: {
					required: " Please enter your weight",
					number: " Only numbers allowed"
				},
				height: {
					required: " Please enter your height",
					number: " Only numbers allowed"
				},
			}
			
		});
		});
	</script>
</head>
<body>
	<div class="container">
		<form class="form-horizontal" role="form" action="controller/c_rigister.php" method="post">
			<h2>Đăng Kí</h2>
			<div class="form-group">
				<label for="firstName" class="col-sm-3 control-label">Họ Và Tên</label>
				<div class="col-sm-9">
					<input type="text" name="user_fullname" placeholder="Họ Và Tên" class="form-control" autofocus>
				</div>
			</div>
			
			<div class="form-group">
				<label for="email" class="col-sm-3 control-label">Email* </label>
				<div class="col-sm-9">
					<input type="email" id="email" placeholder="Email" class="form-control" name= "user_email">
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-sm-3 control-label">Tên Đăng Nhập*</label>
				<div class="col-sm-9">
					<input type="text" name="user_name" placeholder="Tên Đăng Nhập" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-sm-3 control-label">Password*</label>
				<div class="col-sm-9">
					<input type="password" name="user_password" placeholder="Password" class="form-control">
				</div>
			</div>
			
			<div class="form-group">
				<label for="birthDate" class="col-sm-3 control-label">Ngày Sinh*</label>
				<div class="col-sm-9">
					<input type="date" name="user_birthday" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-sm-3 control-label">Địa Chỉ</label>
				<div class="col-sm-9">
					<input type="text" name="user_address" placeholder="Tên Địa Chỉ" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="phoneNumber" class="col-sm-3 control-label">Số Điện Thoại </label>
				<div class="col-sm-9">
					<input type="phoneNumber" name="user_phone" placeholder="Số Điện Thoại" class="form-control">
					
				</div>
			</div>
			
			
			<div class="form-group">
				<label class="control-label col-sm-3">Gender</label>
				<div class="col-sm-6">
					<div class="row">
						<div class="col-sm-4">
							<label class="radio-inline">
							<input type="radio" name="user_gender" value="0">Female
							</label>
						</div>
						<div class="col-sm-4">
							<label class="radio-inline">
								<input type="radio" name="user_gender" value="1">Male
							</label>
						</div>
					</div>
				</div>
			</div> <!-- /.form-group -->
			
			<button type="submit" class="btn btn-primary btn-block">Đăng kí</button>
		</form> <!-- /form -->
	</div> 
	
</body>
</html>