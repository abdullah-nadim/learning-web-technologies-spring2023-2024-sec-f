<html lang="en">
<head>
   <title>Name Form</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset style="width:0px">
            <legend>Name</legend>
            <input type="text" name="name" value="" />
            <hr>
            <input type="submit" name="" value="Submit" />
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$name = $_POST["name"];
					$message = "";

					if (empty($name)) {
						$message = "Name cannot be empty.";
					} 
					elseif (!preg_match("/^[a-zA-Z][a-zA-Z .-]*$/", $name)) {
						$message = "Invalid name format.";
					} 
					elseif (str_word_count($name) < 2) {
						$message = "Name must contain at least two words.";
					}

					if ($message) {
						echo "<script>alert('$message');</script>";
					} else {
						echo "<script>alert('Form submitted successfully!');</script>";
					}
				}
				?>
        </fieldset>
    </form>
</body>

</html>