<?php 

	if (isset($_GET['submit'])) {
		$result1 = $_GET['num1'];
		$result2 = $_GET['num2'];
		$oparator = $_GET['operator'];
		switch ($oparator) {
			case "None":
				echo '<script>alert("You need to select an operator!")</script>';
				break;
			case "Add":
				echo "<script>document.getElementById('result').textContent = $result1 + $result2 </script>";
				break;

			case "Minus":
				echo "<script>document.getElementById('result').textContent = $result1 - $result2 </script>";
				break;

			case "Multiply":
				echo "<script>document.getElementById('result').textContent = $result1 * $result2 </script>";
				break;

			case "Divide":
				echo "<script>document.getElementById('result').textContent = $result1 / $result2 </script>";
				break;
				
			default:
				echo '<script>alert("You need to select an operator!")</script>';
				break;
		}
	}

