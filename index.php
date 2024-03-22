<?php

	include '_cnx/_cnx.php';

	echo '<h1>My Todo List with PHP</h1>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="style/main.css">

	<title>Document</title>
</head>
<body>
	<section>
		<div class="container">
			<div class="box">
				<div class="block1">
					<form action="add.php" method="post">
						<label for="name_task">Name task :</label>
						<input type="text" name="name_task" id="name_task" require>

						<label for="due_date">Name task :</label>
						<input type="date" name="due_date" id="due_date" require>

						<label for="name_task">Status :</label>
						<select name="status" id="">
							<option value="0">Select</option>
							<option value="1">finished</option>
							<option value="2">en cours</option>
							<option value="3">warning</option>
						</select>

						<label for="priority">Priority :</label>
						<select name="priority" id="">
							<option value="0">Select your priority</option>
							<option value="1">high</option>
							<option value="2">Medium</option>
							<option value="3">Low</option>
						</select>

						<input type="submit" value="Add">
					</form>
				</div>

				<div class="block2">
					<table>
						<thead>
							<tr>
								<th>Id_Task</th>
								<th>Name_task</th>
								<th>Due_date</th>
								<th>Status</th>
								<th>Priority</th>
								<th>Action</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</section>	
</body>
</html>

