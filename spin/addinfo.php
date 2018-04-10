
<?php
            // Try and connect to the database
            $connection = mysqli_connect('softoya.com', 'softoyac_clique',  'p@ssw0rd',  'softoyac_cliquedevelopment') or die(mysqli_errno());
			
            // If connection was not successful, handle the error
            if($connection === false) {

                MessageBox("Fail to connect to the database!",1);

                false;

            }
            else
            {
                $connection;

            }
	
		$CliqueID = $_POST['CliqueID'];
	//	$Prize = $_Post['prize'];
		
		$add = mysqli_query($connection,"INSERT INTO spin (CliqueID) VALUES ('$CliqueID')");
			if ($add) {
				header('Location:spinnerexample.php');
			} else {
				header('Location:spinnerexample.php');
			}

?>

