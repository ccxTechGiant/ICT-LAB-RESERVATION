<?php 
//include("includes/header.php");
include("functions/db.php");
include("functions/functions.php");
?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>ICT LAB MANAGEMENT SYSTEM</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oleo+Script:400,700'>
        <link rel="stylesheet" href="settings/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="settings/css/style.css">
    </head>

    <body>

        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="logo span4">
                        <h1 ><a href="../" style="font-size: 17px;color: blue;">ICT<span class="red">.LABORATORY</span></a></h1>
                    </div>
                    <div class="links span8">
                        <a class="home" href="" rel="tooltip" data-placement="bottom" data-original-title="Home"></a>
                        <a class="blog" href="" rel="tooltip" data-placement="bottom" data-original-title="Blog"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="register-container container">
            <div class="row">
                <div class="iphone span5">
                    <img src="settings/img/gif_map.gif" alt="">
                </div>
                <div class="register span6">
				<div class="row">
					<div class="col-lg-6 col-lg-offset-3">    
					<?php validate_user_registration(); ?>						
					</div>
				</div>
                    <form action="" method="post" >
                        <h2>CREATE ACCOUNT</h2>
						 <label for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name" placeholder="first name...">
                        <label for="last_name">Last Name</label>
                        <input type="text" id="last_name" name="last_name" placeholder="surname...">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="username...">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="email...">
						<label for="phone">Phone</label>
						<input type="tel" name="phone" id="phone" tabindex="1" class="form-control" placeholder="Phone" value="" required >
						<label for="password">Password</label>
						<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
						 <label for="confirm_password">Confirm password</label>
						<input type="password" name="confirm_password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required>
						<div><a href="../stagging/administration/pages-login.php">Have an account? Sign in</a></div>
                        <button type="submit">REGISTER</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Javascript -->
        <script src="settings/js/jquery-1.8.2.min.js"></script>
        <script src="settings/bootstrap/js/bootstrap.min.js"></script>
        <script src="settings/js/jquery.backstretch.min.js"></script>
        <script src="settings/js/scripts.js"></script>

    </body>

</html>
<?php include("includes/footer.php") ?>
