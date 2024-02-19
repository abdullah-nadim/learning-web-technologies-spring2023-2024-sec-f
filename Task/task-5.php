<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task 5</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset style="width:15%">
            <legend>Degree</legend>
            <input type="checkbox" name="check[]" value="SSC" />  SSC
            <input type="checkbox" name="check[]" value="HSC" />  HSC
            <input type="checkbox" name="check[]" value="BSC" />  BSc
            <input type="checkbox" name="check[]" value="MSC" />  MSc <br>
			<hr>
			
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$selected = 0;
					$degrees = ['SSC', 'HSC', 'BSc', 'MSc'];
					$error = "";

					foreach ($degrees as $degree) {
						if (isset($_POST[$degree])) {
							$selected++;
						}
					}

					if ($selected < 2) {
						$error = "You must select at least two degrees.";
					} else {
						$error = "Form submitted successfully.";
					}

					if ($error) {
						echo "<script>alert('$error');</script>";
					} else {
						echo "<script>alert('Form submitted successfully!');</script>";
					}
				}
			?>
			
		<input type="submit" name="submit" value="Submit" />	
        </fieldset>
       
    </form>
</body>
</html>