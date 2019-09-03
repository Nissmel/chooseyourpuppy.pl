<!DOCTYPE HTML>
<html lang="pl">
<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<title>Choose your puppy</title>
	
	<link rel="icon" href="fav.png" type="image/x-icon">
	
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
</head>

<style>
	header {
	  background-color: #404040;
	  width: 30%;
	  height: 60px;
	  padding: 10px;
	  margin-right: 10px;
	      
      left: -1%;
	  
	  color: white;
	  font-size: 40px;
	  font-family: 'Nunito', bold;
	  text-align: right;
	}
	
	header_red {
		background-color: #E0322B;
		width: 803px;
		height: 60px;
		left: auto;
		padding: 10px;
		position: absolute;
		top:0px;
		text-align: left;
		margin-left: 7px;
	}

	body {
	  font-size: 20px;
	  font-family: 'Nunito', bold;
	  position: absolute;
	  left: 19%;
	}
	
	h4{
	  font-size: 25px;
	  font-family: 'Nunito', bold;
	  text-align:center;
	}
    
    h5{
	  font-size: 25px;
	  font-family: 'Nunito', bold;
	  text-align:center;
      margin-top:-25px;
	}

	.ramka{ 
		border: solid;
		margin: 10px;
		padding-top:40px;
		width: 400px;
        float: left;
        margin-right: 145px;
        margin-left: 80px;
	}
	.ramka_wynik{ 
		border: solid;
		margin: 10px;
		padding-top:40px;
		width: 400px;
	}
	
	img {
		text-align:center;
		display:block;
		margin:100px;
		margin-top: 10px;
		max-width:1000px;
	}
	
	wybor{
		display: block;
		margin-left:250px;
		margin-top: -33px;
	}
	
	legend{ 
		padding-left:20px;
		padding-right:20px;
		margin-bottom:-50px;
	}
	
</style>

<body>

	<header>Choose your<header_red> puppy</header_red></header>

<?php
	function ratio($user,$db)
	{
			if($db<$user)
			{
				return $db/$user;
			}
			else
				return $user/$db;
	}
	

	require_once "connect.php";

	$connection = new mysqli($host,$db_user,$db_password,$db_name);
	
	?>
	<fieldset id="-" class="ramka">
	<legend><h4>Your choice:</h4></legend>
	
	<?php
	$Weight = $_POST['Weight'];
	$LifeSpan= $_POST['LifeSpan'];
	$Size= $_POST['Size'];
	$Popularity= $_POST['Popularity'];
	$Intelligence= $_POST['Intelligence'];
	
	$SensitivityLevel= $_POST['SensitivityLevel'];
	$EasyToGroom= $_POST['EasyToGroom'];
	$DroolingPotential= $_POST['DroolingPotential'];
	$GeneralHealth= $_POST['GeneralHealth'];
	$ToleratesBeingAlone= $_POST['ToleratesBeingAlone'];

	$EasyToTrain= $_POST['EasyToTrain'];
	$PreyDrive= $_POST['PreyDrive'];
	$WanderlustPotential= $_POST['WanderlustPotential'];
	$TendencyToBark= $_POST['TendencyToBark'];
	$PotentialForMouthiness= $_POST['PotentialForMouthiness'];
	
	$connection->query("INSERT INTO form_info VALUES ('NULL','$Weight','$LifeSpan','$Size','$Popularity','$Intelligence','$SensitivityLevel','$EasyToGroom','$DroolingPotential','$GeneralHealth','$ToleratesBeingAlone','$EasyToTrain','$PreyDrive','$WanderlustPotential','$TendencyToBark','$PotentialForMouthiness')");

	echo "Weight: ";
	echo $Weight."<br/>";	
	echo "Life Span: ";
	echo $LifeSpan."<br/>";
	echo "Size: ";
	echo $Size."<br/>";
	echo "Popularity: ";
	echo $Popularity."<br/>";
	echo "Intelligence: ";
	echo $Intelligence."<br/>";
	
	echo "Sensitivity Level: ";
	echo $SensitivityLevel."<br/>";
	echo "Easy To Groom: ";
	echo $EasyToGroom."<br/>";
	echo "Drooling Potential: ";
	echo $DroolingPotential."<br/>";
	echo "General Health: ";
	echo $GeneralHealth."<br/>";
	echo "Tolerates Being Alone: ";
	echo $ToleratesBeingAlone."<br/>";
	
	echo "Easy To Train: ";
	echo $EasyToTrain."<br/>";
	echo "Prey Drive: ";
	echo $PreyDrive."<br/>";
	echo "Wanderlust Potential: ";
	echo $WanderlustPotential."<br/>";
	echo "Tendency To Bark: ";
	echo $TendencyToBark."<br/>";
	echo "Potential For Mouthiness: ";
	echo $PotentialForMouthiness."<br/><br/>";
	?>
	</fieldset>
	<fieldset id="-" class="ramka_wynik">
	<legend><h4>Your ratio table:</h4></legend>
	
	<?php
	$max_ratio =0.0;
	$max_breed = "";
    $z =0;
    
      $sql ="SELECT count(*) AS count FROM information_schema.columns WHERE table_name = 'puppers'";
        $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_assoc($result);
        $z = $row['count'];

	for($i=2; $i<=$z;$i++) {
      
        $sql ="SELECT * FROM puppers";
        $result = mysqli_query($connection,$sql);
    	$row = mysqli_fetch_assoc($result);
        
		$name = $row[$i];
		//name zwraca komórke o nazwie 'i'
		echo $name.":    ";
		
		
		$row = mysqli_fetch_assoc($result);
		$int = (float)$row[$i];		
		$sum = 4*(ratio($Weight,$int));
		
		$row = mysqli_fetch_assoc($result);
		$int = (float)$row[$i];		
		$sum = $sum + 4*((ratio($LifeSpan,$int)));
		
		$row = mysqli_fetch_assoc($result);
		$int = (float)$row[$i];		
		$sum = $sum + 4*((ratio($Size,$int)));
		
		$row = mysqli_fetch_assoc($result);
		$int = (float)$row[$i];		
		$sum = $sum + 4*((ratio($Popularity,$int)));
		
		$row = mysqli_fetch_assoc($result);
		$int = (float)$row[$i];		
		$sum = $sum + 4*((ratio($Intelligence,$int)));
		
		$row = mysqli_fetch_assoc($result);
		$int = (float)$row[$i];		
		$sum = $sum + (ratio($SensitivityLevel,$int));
		
		$row = mysqli_fetch_assoc($result);
		$int = (float)$row[$i];		
		$sum = $sum + (ratio($EasyToGroom,$int));
		
		$row = mysqli_fetch_assoc($result);
		$int = (float)$row[$i];		
		$sum = $sum + (ratio($DroolingPotential,$int));
		
		$row = mysqli_fetch_assoc($result);
		$int = (float)$row[$i];		
		$sum = $sum + (ratio($GeneralHealth,$int));
		
		$row = mysqli_fetch_assoc($result);
		$int = (float)$row[$i];		
		$sum = $sum + (ratio($ToleratesBeingAlone,$int));
		
		$row = mysqli_fetch_assoc($result);
		$int = (float)$row[$i];		
		$sum = $sum + (ratio($EasyToTrain,$int));
		
		$row = mysqli_fetch_assoc($result);
		$int = (float)$row[$i];		
		$sum = $sum + (ratio($PreyDrive,$int));
		
		$row = mysqli_fetch_assoc($result);
		$int = (float)$row[$i];		
		$sum = $sum + (ratio($WanderlustPotential,$int));
		
		$row = mysqli_fetch_assoc($result);
		$int = (float)$row[$i];		
		$sum = $sum + (ratio($TendencyToBark,$int));
		
		$row = mysqli_fetch_assoc($result);
		$int = (float)$row[$i];		
		$sum = $sum + (ratio($PotentialForMouthiness,$int));

		
		$sum=number_format(($sum/30)*100, 2, '.', ' ');
		echo $sum."<br/>";
		
		if($sum>$max_ratio)
		{
			$max_ratio = $sum;
			$max_breed = $name;
		}		
	}
	?>
	</fieldset>	
	<h5>
	<?php
	
	echo "<br/><br/><b>"."Your perfect match is:  ",$max_breed, ", and your compliance is:  ", $max_ratio."%<br/>";

	$connection->close();
	
?>
</h5>
<img src="breeds/<?php echo $max_breed; ?>.jpg">

</body>

