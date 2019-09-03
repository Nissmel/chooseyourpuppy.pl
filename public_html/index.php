
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
	body{
		width:1200px;
		margin: 0 auto;
		
	}
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
	
	.tlo{
		background-image: url("https://i.imgur.com/FxE4tdf.jpg");
		width: 100%;
		height: 810px;
		background-repeat: no-repeat;
		background-size: contain;
		
		color: white;
		font-size: 70px;
		font-family: 'Nunito', sans-serif;
		text-align: center;
		
		line-height: 1400px;
		white-space: nowrap;
	}
	
	h4{
	  font-size: 25px;
	  font-family: 'Nunito', bold;
	}
	
	h5{
	  font-size: 20px;
	  font-family: 'Nunito', bold;
	}
	
	fieldset { 
		border: none;
	}
	
	.ramka{ 
		border: solid;
		padding:none;
		height:280px;
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
	
	.button  {
	  -webkit-border-radius: 7;
	  -moz-border-radius: 7;
	  border-radius: 7px;
	  font-family: Nunito;
	  color: #ffffff;
	  font-size: 20px;
	  background: #E0322B;
	  padding: 10px 30px 10px 30px;
	}

	.button:hover {
	  background: #eb4e49;
	}
	
</style>
</head>

<body>

	<header>Choose your<header_red> puppy</header_red></header>


	<div class="tlo">
	Here you will find your 100% match
	</div>


	<form action="form_data.php" method="post">
	<br><br><br>
	
	<fieldset id="-" class="ramka">
	<legend><h4>General information:</h4></legend>
	
		<h5>
			Weight:
			<wybor>
			  <fieldset id="Weight">
				1<input type="radio" value="1" name="Weight" required>
				2<input type="radio" value="2" name="Weight" required>
				3<input type="radio" value="3" name="Weight" required>
				4<input type="radio" value="4" name="Weight" required>
				5<input type="radio" value="5" name="Weight" required>
			  </fieldset>
			 </wybor>
			 
			Life Span:
			<wybor>
			  <fieldset id="LifeSpan">
				1<input type="radio" value="1" name="LifeSpan" required>
				2<input type="radio" value="2" name="LifeSpan" required>
				3<input type="radio" value="3" name="LifeSpan" required>
				4<input type="radio" value="4" name="LifeSpan" required>
				5<input type="radio" value="5" name="LifeSpan" required>
			  </fieldset>
			 </wybor>
			 
			 Size:
			<wybor>
			  <fieldset id="Size">
				1<input type="radio" value="1" name="Size" required>
				2<input type="radio" value="2" name="Size" required>
				3<input type="radio" value="3" name="Size" required>
				4<input type="radio" value="4" name="Size" required>
				5<input type="radio" value="5" name="Size" required>
			  </fieldset>
			 </wybor>
			 
			 Popularity:
			<wybor>
			  <fieldset id="Popularity">
				1<input type="radio" value="1" name="Popularity" required>
				2<input type="radio" value="2" name="Popularity" required>
				3<input type="radio" value="3" name="Popularity" required>
				4<input type="radio" value="4" name="Popularity" required>
				5<input type="radio" value="5" name="Popularity" required>
			  </fieldset>
			 </wybor>
			 
			 Intelligence:
			<wybor>
			  <fieldset id="Intelligence">
				1<input type="radio" value="1" name="Intelligence" required>
				2<input type="radio" value="2" name="Intelligence" required>
				3<input type="radio" value="3" name="Intelligence" required>
				4<input type="radio" value="4" name="Intelligence" required>
				5<input type="radio" value="5" name="Intelligence" required>
			  </fieldset>
			 </wybor>
		</h5>
	</fieldset>
	
	
	<fieldset id="-" class="ramka">
	<legend><h4>Health and adaptability:</h4></legend>
	
		<h5>
			Sensitivity Level:
			<wybor>
			  <fieldset id="SensitivityLevel">
				1<input type="radio" value="1" name="SensitivityLevel" required>
				2<input type="radio" value="2" name="SensitivityLevel" required>
				3<input type="radio" value="3" name="SensitivityLevel" required>
				4<input type="radio" value="4" name="SensitivityLevel" required>
				5<input type="radio" value="5" name="SensitivityLevel" required>
			  </fieldset>
			 </wybor>
			 
			Easy To Groom:
			<wybor>
			  <fieldset id="EasyToGroom">
				1<input type="radio" value="1" name="EasyToGroom" required>
				2<input type="radio" value="2" name="EasyToGroom" required>
				3<input type="radio" value="3" name="EasyToGroom" required>
				4<input type="radio" value="4" name="EasyToGroom" required>
				5<input type="radio" value="5" name="EasyToGroom" required>
			  </fieldset>
			 </wybor>
			 
			 Drooling Potential:
			<wybor>
			  <fieldset id="DroolingPotential">
				1<input type="radio" value="1" name="DroolingPotential" required>
				2<input type="radio" value="2" name="DroolingPotential" required>
				3<input type="radio" value="3" name="DroolingPotential" required>
				4<input type="radio" value="4" name="DroolingPotential" required>
				5<input type="radio" value="5" name="DroolingPotential" required>
			  </fieldset>
			 </wybor>
			 
			 General Health:
			<wybor>
			  <fieldset id="GeneralHealth">
				1<input type="radio" value="1" name="GeneralHealth" required>
				2<input type="radio" value="2" name="GeneralHealth" required>
				3<input type="radio" value="3" name="GeneralHealth" required>
				4<input type="radio" value="4" name="GeneralHealth" required>
				5<input type="radio" value="5" name="GeneralHealth" required>
			  </fieldset>
			 </wybor>
			 
			 Tolerates Being Alone:
			<wybor>
			  <fieldset id="ToleratesBeingAlone">
				1<input type="radio" value="1" name="ToleratesBeingAlone" required>
				2<input type="radio" value="2" name="ToleratesBeingAlone" required>
				3<input type="radio" value="3" name="ToleratesBeingAlone" required>
				4<input type="radio" value="4" name="ToleratesBeingAlone" required>
				5<input type="radio" value="5" name="ToleratesBeingAlone" required>
			  </fieldset>
			 </wybor>
		</h5>
	</fieldset>
	
	<fieldset id="-" class="ramka">
	<legend><h4>Trainability:</h4></legend>
	
		<h5>
			Easy To Train:
			<wybor>
			  <fieldset id="EasyToTrain">
				1<input type="radio" value="1" name="EasyToTrain" required>
				2<input type="radio" value="2" name="EasyToTrain" required>
				3<input type="radio" value="3" name="EasyToTrain" required>
				4<input type="radio" value="4" name="EasyToTrain" required>
				5<input type="radio" value="5" name="EasyToTrain" required>
			  </fieldset>
			 </wybor>
			 
			Prey Drive:
			<wybor>
			  <fieldset id="PreyDrive">
				1<input type="radio" value="1" name="PreyDrive" required>
				2<input type="radio" value="2" name="PreyDrive" required>
				3<input type="radio" value="3" name="PreyDrive" required>
				4<input type="radio" value="4" name="PreyDrive" required>
				5<input type="radio" value="5" name="PreyDrive" required>
			  </fieldset>
			 </wybor>
			 
			 Wanderlust Potential:
			<wybor>
			  <fieldset id="WanderlustPotential">
				1<input type="radio" value="1" name="WanderlustPotential" required>
				2<input type="radio" value="2" name="WanderlustPotential" required>
				3<input type="radio" value="3" name="WanderlustPotential" required>
				4<input type="radio" value="4" name="WanderlustPotential" required>
				5<input type="radio" value="5" name="WanderlustPotential" required>
			  </fieldset>
			 </wybor>
			 
			 Tendency To Bark:
			<wybor>
			  <fieldset id="TendencyToBark">
				1<input type="radio" value="1" name="TendencyToBark" required>
				2<input type="radio" value="2" name="TendencyToBark" required>
				3<input type="radio" value="3" name="TendencyToBark" required>
				4<input type="radio" value="4" name="TendencyToBark" required>
				5<input type="radio" value="5" name="TendencyToBark" required>
			  </fieldset>
			 </wybor>
			 
			 Potential For Mouthiness:
			<wybor>
			  <fieldset id="PotentialForMouthiness">
				1<input type="radio" value="1" name="PotentialForMouthiness" required>
				2<input type="radio" value="2" name="PotentialForMouthiness" required>
				3<input type="radio" value="3" name="PotentialForMouthiness" required>
				4<input type="radio" value="4" name="PotentialForMouthiness" required>
				5<input type="radio" value="5" name="PotentialForMouthiness" required>
			  </fieldset>
			 </wybor>
		</h5>
	</fieldset>
		  
	  <br>
	  <input class="button" type="submit" value="Submit">
	  <h5>If you click the "Submit" button, the form-data will be sent and verified.</h5>	  	  
	</form>

	

</body>
</html>