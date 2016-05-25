<?php 
    require "database.connection.php";
    $query = "SELECT * FROM birthdays where $id=$id";
    $result = $db->query($query);
    $birthdays = $result->fetch_all(MYSQLI_ASSOC);
 ?>
<!doctype html>

<html>
	<head>
		<title>Verjaardagskalender</title>
        <link href="main.css" rel="stylesheet" type="text/css">
	</head>
	   
<? foreach $birthdays = $birthday ?>
	<body>
		<h1><?php echo $month?></h1>
        <h1><?php echo $month?></h1>
        <h1><?php echo $month?></h1>
        <h1><?php echo $month?></h1>
        <h1><?php echo $month?></h1>
        <h1><?php echo $month?></h1>
        <h1><?php echo $month?></h1>
        <h1><?php echo $month?></h1>
        <h1><?php echo $month?></h1>
        <h1><?php echo $month?></h1>
        <h1><?php echo $month?></h1>
        <h1><?php echo $month?></h1>
          <a href="delete.php?id=$id">x</a>
        
        <p><a href="create.php">+Toevoegen</a></p>

	</body>
</html>     