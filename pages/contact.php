<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Contact</title>
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/jquery.js"></script>
  <script src="../js/app.js"></script>
  <style>
      .error{
          color: white;
      }
      textarea{
          max-width: 100%;
          min-width: 100%;
          resize: none;
      }
  </style>
</head>
<body style="background-color:rgba(40, 57, 101, 0.9);">
<nav  class="nav-links" id="horizontal">
            <a href="#home" id="logo"><img class="logo" src="../Images/Asset1.png" alt="logo"></a>
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#About">ABOUT US</a></li>
                <li><a href="#Blog">BLOGS</a></li>
                <li><a href="#contuct">CONTACT</a></li>
            </ul>
            <div>
            <?php
                if(isset($_SESSION["user"])){

                    ?>
                    <div style="text-align:center;">
                        <h5> <?php echo $_SESSION["user"]; ?></h5>
                    </div>
                    </div>
                    <div style="margin-left:1vw;" class="nav-btn"> 
                        <a href="logout.php"  id="logout" >logout</a>
                    </div>
                    <?php
                }
                else{
                    ?>
                    <div class="nav-btn"> 
                        <a href="login.php" id="create-btnlink">Creat Account</a>
                    </div>
                </div>
                    <?php
                }
            ?>
            
            
            <!-- menu bars -->
            <div class="menu-bars" id="menu-bars">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </nav>
        <!-- overlay -->
        <div class="overlay slide-right" id="overlay">
            <nav id="vertical">
                <ul>
                <li id="nav-1" class="slide-out-1"><a href="#home">Home</a></li>
                <li id="nav-2" class="slide-out-2"><a href="#about">About</a></li>
                <li id="nav-3" class="slide-out-3"><a href="#Blog">Blogs</a></li>
                <li id="nav-4" class="slide-out-4"><a href="#contact">Contact</a></li>
                <?php if(isset($_SESSION["user"])){ ?>
                    <li id="nav-5" class="slide-out-5"><a href="includes/logout.php">logout</a></li>
                <?php }else{
                    ?>
                    <li id="nav-5" class="slide-out-5"><a href="login.php">Create Account</a></li>
                    <?php
                } ?>
                <li id="nav-6" class="slide-out-6"><a href="#home" id="logo"><img class="logo" src="Images/Asset1.png" alt="logo"></a></li>
                </ul>
            </nav>
        </div>        
    
        <div class="login-container">
            <div class="login-wrap">
                <div class="login-html">
                    <input id="tab-1" type="radio" name="tab" class="sign-in" ><label style="display:none;" for="tab-1" class="tab">Sign In</label>
                    <input id="tab-2" type="radio" name="tab" class="sign-up" checked><label for="tab-2" class="tab">Contact Us</label>
                    <div class="login-form">
                        <form id="sign-up"  class="sign-up-htm">
                            <!-- 2ND  -->
                            
                            <div class="error">
                                <p id="fill_err"></p><!-- EMPTY INPUTS -->
                            </div>

                            <!-- Email -->
                            <div class="group">
                                <label for="email" class="label">Email:</label>
                                <input id="email" type="text" class="input">	
                            </div>
                            <div class="error">
                                <p id="email_err"></p><!-- User error handler -->
                            </div>

                            <!-- Email -->

                            <div class="group">
                                <label for="phone" class="label">Phone:</label>
                                <input id="phone" type="text" class="input" >
                            </div>
                            <div class="error">
                                <p id="phone_err"></p><!-- password char error handler -->
                            </div>

                            <!-- message -->

                            <div class="group">
                                <label for="message" class="label">Message:</label>
                                <textarea name="message" id="message" cols="50" rows="10"></textarea>
                            </div>
                            <div class="error">
                                <p id="mail_err"></p><!-- Email error handler -->
                            </div>

                            <!-- SUBMIT 2  -->

                            <div class="group">	
                                <input id="sub" type="submit" class="button" value="Send">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
            <div class="illustration">
                <img src="../img/security_SVG.svg" alt="illustration">
            </div>
        </div>

                
<script>

    $(document).on("click" , "#sub",(e)=>{
        e.preventDefault();
        $('#sub').attr("disabled",true);
        let sub = $("#sub").val()
        let mail = $("#email").val()
        let phone = $("#phone").val()
        let message = $("#message").val()
        
        $.ajax({
            
            url:"../includes/contact.inc.php",
            method:"post",
            data:{
                sub:sub,
                mail:mail,
                phone:phone,
                message:message
            },success:(data,stat)=>{
                $('#sub').attr("disabled",false);
                if(data.includes("sections!") ){
					console.log(data)
					$("#fill_err").html(data);
				}else if(data.includes("email!") ){
					console.log(data)
					$("#email_err").html(data);
				}else if(data.includes("number!") ){
					console.log(data)
					$("#phone_err").html(data);
				}
                else{
                    console.log(data)
                    $("#fill_err").html(data);
                    window.location.href = "../index.php";
                }
					
            }
        })
        $(document).on("click", "#sub",(e)=>{
				$("#fill_err").html("");
				$("#email_err").html("");
				$("#phone_err").html("");
				
			})

    })



	
</script>
  
</body>
</html>