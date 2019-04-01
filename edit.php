<?php 
require_once "classes/sub/Student.php";
$student = Student::find($_GET['id']);
?>
<a href="index.php">All</a>
<h1>Edit Page</h1>
<form method="post" action="update.php?id=<?php echo $student->id ?>">
	<input type="text" name="name" placeholder="Name" value="<?php echo $student->name ?>">
	<input type="text" name="age" placeholder="Age" value="<?php echo $student->age ?>">
	<input type="text" name="address" placeholder="Address" value="<?php echo $student->address ?>">
	<button>Update</button>
</form>