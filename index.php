<?php require_once "classes/sub/Student.php"; ?>
<html>
<head>
	<title>All</title>
</head>
<body>
<a href="add.php">Add</a>
<table border="1">
	<thead>
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Address</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach(Student::all() as $student): ?>
		<tr>
			<td><?php echo $student->name ?></td>
			<td><?php echo $student->age ?></td>
			<td><?php echo $student->address ?></td>
			<td>
				<a href="edit.php?id=<?php echo $student->id ?>">Edit</a> |
				<a href="delete.php?id=<?php echo $student->id ?>">Delete</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<!-- <?php echo Student::paginate(5) ?> -->
</body>
</html>

