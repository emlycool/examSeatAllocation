<?php include('../core/server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="registration.php">
  	<?php include('../core/errors.php'); ?>
	  <div class="input-group">
  	  <label>Firstname</label>
  	  <input type="text" name="firstname" value="<?php echo $firstname; ?>">
  	</div>
	  <div class="input-group">
  	  <label>Secondname</label>
  	  <input type="text" name="secondname" value="<?php echo $secondname; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Middlename</label>
  	  <input type="text" name="middlename" value="<?php echo $middlename; ?>">
  	</div>
	  <div class="input-group">
  	  <label>Matricno</label>
  	  <input type="text" name="matricno" value="<?php echo $matricno; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
	  <div class="input-group">
  	  <label>Level</label>
  	  <input type="text" name="levels" value="<?php echo $levels; ?>">
  	</div>
	  <div class="input-group">
  	  <label>Department</label>
  	  <input type="text" name="department" value="<?php echo $department; ?>">
  	</div>
	  <div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>