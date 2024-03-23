<?php

    //include my database;
    include '_cnx/_cnx.php';

    if (isset($_POST['add'])) {
        /** Declaration the my variables */
        $name = $_POST['name'];
        $due_date = $_POST['due_date'];
        $priority = $_POST['priority'];
        $status = $_POST['status'];
        $message = '';


        /** Insert the data into the database */
        $query = "INSERT INTO `task` (name, due_date, priority, status) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($query);

        if ($stmt->execute([$name, $due_date, $priority, $status])){
            echo 'Task added successfully';
        }

        else{
            echo 'Task not added';
        }
    }
    else {
        echo 'Your champs is empty';
    }
