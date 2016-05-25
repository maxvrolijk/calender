<?php
	require "database.connection.php";
	require "delete.logic.php";
?>
	<h1>Delete calendar date</h1>
	<p>Are you sure you want to delete:</p>

	<form method="post">

		<div>
			<input type="hidden" name="id" value="<?=$birthdays['id']?>">
			<label for="name">id:</label>
			<span><?=$birthdays['id']?></span>	
		</div>	

		<div>
			<input type="text" name="person" value="<?=$birthdays['person']?>">
			<label for="name">person:</label>
			<span><?=$birthdays['person']?></span>	
		</div>

		<div>
			<input type="text" name="day" value="<?=$birthdays['day']?>">
			<label for="name">day:</label>
			<span><?=$birthdays['day']?></span>	
		</div>

		<div>
			<input type="text" name="month" value="<?=$birthdays['month']?>">
			<label for="name">month:</label>
			<span><?=$birthdays['month']?></span>	
		</div>

		<div>
			<input type="text" name="year" value="<?=$birthdays['year']?>">
			<label for="name">year:</label>
			<span><?=$birthdays['year']?></span>	
		</div>

		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>

	</form>	
