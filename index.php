
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
				<?php

					//include my database;
					include '_cnx/_cnx.php';

					if (isset($_POST['add'])) {
						/** Declaration the my variables */
						$name = htmlspecialchars($_POST['name']);
						$due_date = htmlspecialchars($_POST['due_date']);
						$priority = htmlspecialchars($_POST['priority']);
						$status = htmlentities($_POST['status']);
						$message = "";

						if (empty($_POST['name']) || empty($_POST['due_date']) || empty($_POST['priority']) || empty($_POST['status'])) {
							
							echo  'The form is empty';
						} 

						else {

							/** Insert the data into the database */
							$query = "INSERT INTO `task` (name, due_date, priority, status) VALUES (?, ?, ?, ?)";
							$stmt = $conn->prepare($query);
							
							if ($stmt->execute([$name, $due_date, $priority, $status])){
								echo 'Task added successfully';
							}
							
							else {
								echo 'Task not added';
							}
						}


					}
				?>

				<div class="block1">
					<!-- Inclusing my php code -->
					<?php 	echo '<h1>My Todo List with PHP</h1>'; ?>

					<form action="index.php" method="post">
						<label for="name_task">Name task :</label>
						<input type="text" name="name" id="name_task" require>

						<label for="due_date">Due_date :</label>
						<input type="date" name="due_date" id="due_date" require>

						<label for="status">Status :</label>
						<select name="status" id="">
							<option value="0">Select</option>
							<option value="1">In progress</option>
							<option value="2">Suspended</option>
							<option value="3">Cancelled</option>
							<option value="3">Completed</option>
						</select>

						<label for="priority">Priority :</label>
						<select name="priority" id="">
							<option value="0">Select your priority</option>
							<option value="1">High</option>
							<option value="2">Medium</option>
							<option value="3">Low</option>
						</select>

						<input type="submit" value="Add" name="add">
					</form>
				</div>

				<div class="block2">
					<?php 
						include '_cnx/_cnx.php';

						$query = $conn->query('SELECT * FROM `task`');

						echo '<table>';
						echo '<thead>';
							echo '<tr>';
							echo '<th>Id_Task</th>';
							echo '<th>Name</th>';
							echo '<th>Due_date</th>';
							echo '<th>Status</th>';
							echo '<th>Priority</th>';
							echo '<th>Action</th>';
							echo '</tr>';
						echo '</thead>';

						while ($variables = $query->fetch()) {
							echo '<tbody>';
							echo '<tr>';
                            echo '<td>'.$variables['id_task'].'</td>';
                            echo '<td>'.$variables['name'].'</td>';
                            echo '<td>'.$variables['due_date'].'</td>';
                            echo '<td>'.$variables['status'].'</td>';
                            echo '<td>'.$variables['priority'].'</td>';
                            echo '</tr>';
							echo '</tbody>';
						}

						echo '</table>';
					?>
				</div>
			</div>
		</div>
	</section>	
</body>
</html>

