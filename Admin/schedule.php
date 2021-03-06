<?php 
include('../core/server.php');
include('../core/header.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Portal</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
  <div class="header">
  	<h2>Seat Allocation</h2>
  </div>
	
  <form method="post" action="schedule.php">
  	<?php include('../core/errors.php'); ?>

    <div class="input-group">
  	  <label>Level</label>
  	  <input type="text" name="levels" value="<?php echo $levels; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Department</label>
  	  <input type="text" name="department" value="<?php echo $department; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Enrollnumber</label>
  	  <input type="number" name="enrollnumber" value="<?php echo $enrollnumber; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Classroom</label>
  	  <input type="text" name="classroom" value="<?php echo $classroom; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Course</label>
  	  <input type="text" name="course" value="<?php echo $course; ?>">
  	</div>
    <div class="input-group">
  	  <label>Exam Date</label>
  	  <input type="date" name="examdate" value="<?php echo $examdate; ?>">
  	</div>
    <div class="input-group">
  	  <label>start time</label>
  	  <input type="number" name="starttime" value="<?php echo $starttime; ?>">
  	</div>
    <div class="input-group">
  	  <label>End Time</label>
  	  <input type="number" name="endtime" value="<?php echo $endtime; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_seat">Register</button>
  	</div>
  </form>
</body>
</html>