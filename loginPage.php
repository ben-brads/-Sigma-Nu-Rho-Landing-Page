<!DOCTYPE html>
<html>
    <head>
        <title>Active Member Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css"/>
        <script src="js/uikit.min.js"></script>
        <link rel="stylesheet" href="css/loginPage.css">
        <script src="js/uikit-icons.min.js"></script>
        
    </head>
<body>
    <img src="images/snucrest.png" alt="snucrest">
    <div class="uk-flex uk-animation-fade">
	<div class="uk-width-1-1">
		<div class="uk-container">
			<div class="uk-grid uk-grid-stack" uk-grid>
				<div class="uk-width-1-1@m">
					<div class="uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large">
						<h3 class="uk-card-title uk-text-center">Welcome back brother!</h3>
						<form action="login.php" method="POST">
                            <input type="hidden" name="action" value="do_login">
							<div class="uk-margin">
								<div class="uk-inline uk-width-1-1">
									<span class="uk-form-icon" uk-icon="icon: user"></span>
									<input class="uk-input uk-form-large" type="text" id="username" name="username" autofocus value="<?php print $username; ?>">
								</div>
							</div>
							<div class="uk-margin">
								<div class="uk-inline uk-width-1-1">
									<span class="uk-form-icon" uk-icon="icon: lock"></span>
									<input class="uk-input uk-form-large" type="password" id="password" name="password">	
								</div>
							</div>
							<div class="uk-margin">
								<button type="submit" value="Submit" class="uk-button uk-button-primary uk-button-large uk-width-1-1 snul">Login</button>
							</div>
                            <div class="uk-margin">
								<a href="creatUserPage.php">Create User</a>
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