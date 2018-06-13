<?php

if(isset($_GET['Submit'])){
	$ctr = $_GET['ctr'];
	$oldData = $_GET['oldData'];
	if(file_exists("newfile.txt")){
		$data = file_get_contents("newfile.txt");
		$variable = explode("\n", $data);
		$index = key($variable);
		$newData = $_GET['uone'].",".$_GET['utwo'].",".$_GET['uthree'].",".$_GET['ufour'];

		foreach ($variable as $key => $variable) {
			
			$data = str_replace($oldData, $newData, $data);
			file_put_contents("newfile.txt", $data);

			if($data){
				header("Location: index.php");
				exit();
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" style="margin-left: 20%; margin-top: 2%;">
	<div class="col-md-8">
		<form class="form-horizontal" action="update.php" method="GET">
			
			<?php

			$oldData = "".$_GET["one"].",".$_GET["two"].",".$_GET["three"].",".$_GET["four"];
			//$oldName = $_GET["one"];
			// $oldAge = $_GET["age"];
			// $oldEmail = $_GET["email"];
			// $ctr = $_GET["ctr"];

			echo "<label>First Name</label>";
			echo "<input type='text' name='uone' placeholder='".$_GET['one']."'><br>";

			echo "<label>Last Name</label>";
			echo "<input type='text' name='utwo' placeholder='".$_GET['two']."'><br>";

			echo "<label>Address</label>";
			echo "<input type='text' name='uthree' placeholder='".$_GET['three']."'><br>";

			echo "<label>Age</label>";
			echo "<input type='text' name='ufour' placeholder='".$_GET['four']."'><br>";

			echo "<input type='hidden' name='oldData' value='".$oldData."'>";
			echo "<input type='hidden' name='ctr' value='".$_GET['ctr']."'>";
			echo "<input type='submit' name='Submit'>";

			?>
		</form>
	</div>
	</div>
</body>
</html>

