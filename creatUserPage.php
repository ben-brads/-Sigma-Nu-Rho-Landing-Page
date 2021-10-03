<!DOCTYPE html>
<html>
    <head>
        <title>Active Member Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css"/>
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
        <script src="js/jquery-2.1.4.min.js"></script>
    <style>
        html {
            height: 100%;
        }
        body {
             height: 100%;
             margin: 0;
             background-repeat: no-repeat;
             background-attachment: fixed;
             background-color: #f5f5f5;
         
        
        }
        .snul {
            color: gold;
            background-color: black;
        }
        .snul:hover {
            background-color: grey;
        }
       
    </style>
    <script>
        
        $(function(){
        			
            $("#confirmPass").keyup(function(){
                var password = $("#password").val();
                var confirmPassword = $("#confirmPass").val();
                
               if(password.localeCompare(confirmPassword) !=0)
               {
                    document.getElementById("confirmPass").setCustomValidity("Passwords Don't Match");
                 
                   
               }
                else
                {
                   document.getElementById("confirmPass").setCustomValidity("");
                    
                }
            });
        });
  
    </script>
    </head>
<body>
    <div class="uk-flex uk-animation-fade top">
	<div class="uk-width-1-1">
		<div class="uk-container">
			<div class="uk-grid uk-grid-stack" uk-grid>
				<div class="uk-width-1-1@m">
					<div class="uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large">
						<h3 class="uk-card-title uk-text-center">Create your Rho Chapter Account</h3>
						<form action="createUser.php" method="POST">
                            <input type="hidden" name="action" value="do_create">
							<div class="uk-margin">
								<div class="uk-inline uk-width-1-1">
								
                                    <label for="firstName">First name:</label>
									<input class="uk-input uk-form-medium" type="text" id="firstName" name="firstName" required>
								</div>
							</div>
							<div class="uk-margin">
								<div class="uk-inline uk-width-1-1">
									
                                    <label for="lastName">Last name:</label>
									<input class="uk-input uk-form-medium" type="text" id="lastName" name="lastName" required>	
								</div>
							</div>
                            <div class="uk-margin">
								<div class="uk-inline uk-width-1-1">
									
                                    <label for="username">User name:</label>
									<input class="uk-input uk-form-medium" type="text" id="username" name="username" required>	
								</div>
							</div>
                            <div class="uk-margin">
								<div class="uk-inline uk-width-1-1">
									
                                     <label for="password">Password:</label>
									<input class="uk-input uk-form-medium" type="password" id="password" name="password" required>	
								</div>
							</div>
                            <div class="uk-margin">
								<div class="uk-inline uk-width-1-1">
									
                                    <label for="confirmPass">Confirm Password:</label>
									<input class="uk-input uk-form-medium" type="password" id="confirmPass" name="confirmPass" required>	
								</div>
							</div>
                            <div class="uk-margin">
								<div class="uk-inline uk-width-1-1">
									
                                      <label for="birthday">Birthday:</label>
									<input class="uk-input uk-form-medium" type="date" id="birthday" name="birthday" required>	
								</div>
							</div>
                            <div class="uk-margin">
								<div class="uk-inline uk-width-1-1">
									
                                        <label for="email">Email:</label>
                                    
									<input class="uk-input uk-form-medium" type="email" id="email" name="email" required>	
								</div>
							</div>
							<div class="uk-margin">
								<button type="submit" value="Submit" class="uk-button uk-button-primary uk-button-large uk-width-1-1 snul">Create User</button>
							</div>
                            <?php
                            if($error) {
                                 print "<div class='uk-alert-danger' uk-alert>
                                        <a class='uk-alert-close' uk-close></a>
                                        <p>$error</p>
                                        </div>";
                            }
                            ?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
    
</body>
</html>