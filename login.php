
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <!-- <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'> -->
  <link rel="stylesheet" href="css/style.css">

  <script src="js/jquery.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-container">
	<div class="login-wrap">
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
			<div class="login-form">
				<form class="sign-in-htm">
					
					<!-- 1ST  -->
					<div class="error">
						<p id="fill_err2"></p><!-- User error handler -->
					</div>
					
					<div class="group">
						<label for="user" class="label">Username</label>
						<input id="user_log" type="text" class="input">
					</div>
					<div class="error">
						<p id="user_err2"></p><!-- User error handler -->
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input id="pwd_log" type="password" class="input" data-type="password">
					</div>
					<div class="error">
						<p id="pwd_err2"></p><!-- User error handler -->
					</div>
					<div class="group">
						<input id="check" type="checkbox" class="check" checked>
						<label for="check"><span class="icon"></span> Keep me Signed in</label>
					</div>
					<div class="group">
						<!-- SUBMIT 1  -->
						<input id="sub_log" type="submit" class="button" value="Sign In">
					</div>
					<div class="hr"></div>
					<div class="foot-lnk">
						<a href="#forgot">Forgot Password?</a>
					</div>
				</form>
				<form id="sign-up"  class="sign-up-htm">
					<!-- 2ND  -->
					
					<div class="error">
						<p id="fill_err"></p><!-- EMPTY INPUTS -->
					</div>

					<!-- USER NAME -->
					<div class="group">
						<label for="user" class="label">Username</label>
						<input id="user" type="text" class="input">	
					</div>
					<div class="error">
						<p id="user_err"></p><!-- User error handler -->
					</div>

					<!-- PASSword -->

					<div class="group">
						<label for="pass" class="label">Password</label>
						<input id="pwd" type="password" class="input" data-type="password">
					</div>
					<div class="error">
						<p id="pwd_err"></p><!-- password char error handler -->
					</div>

					<!-- rep PASS -->
					<div class="group">
						<label for="pass" class="label">Repeat Password</label>
						<input id="pwd_rep" type="password" class="input" data-type="password">
					</div>
					<div class="error">
						<p id="match_err"></p><!-- pwd not matched error handler -->
					</div>

					<!-- Email -->

					<div class="group">
						<label for="pass" class="label">Email Address</label>
						<input id="mail" type="text" class="input">
					</div>
					<div class="error">
						<p id="mail_err"></p><!-- Email error handler -->
					</div>

					<!-- SUBMIT 2  -->

					<div class="group">	
						<input id="sub_2" type="submit" class="button" value="Sign Up">
					</div>
					<div class="hr"></div>
					<div class="foot-lnk">
						<label for="tab-1">Already Member?</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="illustration">
		<img src="img/security_SVG.svg" alt="illustration">
	</div>
</div>


<script>

	// FOR LOGIN

	$(document).on("click", "#sub_log",(e)=>{
		e.preventDefault();
		

		let sub_log = $("#sub_log").val();
		let user = $("#user_log").val();
		let pwd = $("#pwd_log").val();
		
		
		$.ajax({
			url:"includes/login.inc.php",
			method:"post",
			data:{
				sub_log:sub_log,
				user:user,
				pwd:pwd,
			},success:(data ,status)=>{
				if(data.includes("empty") ){
				console.log("its 1")
				$("#fill_err2").html(data);
			}else if(data.includes("found") ){
				console.log("its 2")
				$("#user_err2").html(data);
			}else if(data.includes("wrong") ){
				console.log("its 3")
				$("#pwd_err2").html(data);
			}
			$(document).on("click", "#sub_log",(e)=>{
				$("#fill_err2").html("");
				$("#user_err2").html("");
				$("#pwd_err2").html("");
				
			})
				
			if(data == ""){
				console.log("yes")
				window.location.href = "index.php";
			}
				
			}
		})
	})




	// AJAX SIGN-UP
$(document).ready(()=>{
	$(document).on("click", "#sub_2",(e)=>{
		e.preventDefault();
		$('#sub_2').attr("disabled",true);
		// FOR SIGN UP
		let sub_2 = $("#sub_2").val();
		let user = $("#user").val();
		let pwd = $("#pwd").val();
		let pwd_rep = $("#pwd_rep").val();
		let mail = $("#mail").val();
		let i =0;
		$.ajax({
		url:"includes/signUp.inc.php",
		method:"post",
		data:{
			sub_2:sub_2,
			user:user,
			pwd:pwd,
			pwd_rep:pwd_rep,
			mail:mail
		},success:(data_1 ,status)=>{
			$('#sub_2').attr("disabled",false);
			console.log(data_1);
			if(data_1.includes("Fill") ){
				console.log("its 1")
				$("#fill_err").html(data_1);
			}else if(data_1.includes("user") ){
				console.log("its 2")
				$("#user_err").html(data_1);
			}else if(data_1.includes("short") ){
				console.log("its 3")
				$("#pwd_err").html(data_1);
			}else if(data_1.includes("match") ){
				console.log("its 4")
				$("#match_err").html(data_1);
			}else if(data_1.includes("Email")  ){
				console.log("its 4")
				$("#mail_err").html(data_1);
			}else {			
				$("#sign-up").empty()
				$("#sign-up").html('<div class="group"><label for="code" class="label">CODE:</label><input id="code" type="text" class="input"></div><div class="error"><p id="code_err"></p></div><div class="group">	<input id="send" type="submit" class="button" value="send"></div>')
				let random = data_1;
					
				$(document).on("click" , "#send" , (d)=>{
					d.preventDefault();
					$("#sub_2").attr("disabled",true)
					let code = $("#code").val()
					let send = $("#send").val()
	
					$.ajax({
						url:"includes/signUp.inc.php",
						method:"post",
						data:{
							random:random,
							user:user,
							pwd:pwd,
							mail:mail,
							pwd_rep,
							code:code,
							send:send
						},
						success:(data_2)=>{
							
							if(data_2.includes("added!") ){
								console.log(data_2)
								$("#code_err").html(data_2);
							}else if(data_2.includes("wrong!") ){
								console.log(data_2)
								$("#code_err").html(data_2);
							}else if(data_2.includes("successfuly") ){
								console.log(data_2)
								$("#code_err").html(data_2);
								window.location.href = "index.php";
							}
							$(document).on("click", "#send",(e)=>{
								$("#code_err").html("");
								
							})
						}
					})
							
				})			
			}
			
			$(document).on("click", "#sub_2",(e)=>{
				$("#fill_err").html("");
				$("#user_err").html("");
				$("#pwd_err").html("");
				$("#match_err").html("");
				$("#mail_err").html("");
			})

		}
		})
	})
})
	
	
</script>
  
</body>
</html>
