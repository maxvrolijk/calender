<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"){

		$birthdays = NULL;
		if (isset($_GET['id'])) {
			// Get birthdays for id
			$id = $db->escape_string($_GET["id"]);
			$query = "SELECT * FROM birthdays WHERE id=$id";
			$result = $db->query($query);
		
			$birthdays = $result->fetch_assoc();		
		}
		if ($birthdays == NULL) {
			// No birthdays found
			http_response_code(404);
			exit();
		}        

	} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST['confirmed'])){
			// Prepare data for delete
			$id = $db->escape_string($_POST["id"]);
	
			// Prepare query and execute
			$query = "DELETE FROM birthdays WHERE id=$id";
			$result = $db->query($query);
		}
		
		// Tell the browser to go back to the index page.
		header("Location:index.html");
		exit();
	}

?>