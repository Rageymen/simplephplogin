<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>	
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<style type="text/css" media="screen">

	.main01{
	display: grid;
    grid-template-columns: auto auto auto;
    background-color: #484848;
    padding: 2px;
    
    }


	.gridmenus{
	 background-color: #484848;
     padding: 20px;
     font-size: 20px;
     text-align: center;
     

	}


	.gridspan{
	 background-color: #484848;
     /*border: 1px solid rgba(0, 0, 0, 0.8);*/
     padding: 20px;
     font-size: 20px;
     text-align: center;
     grid-row: 1 / span 3;

	}
     
	
</style>

<body>

	<?php

	if (isset($_SESSION['id'])){

		echo $_SESSION['first'];
		echo "  ";
		echo $_SESSION['last'];

	}


	?>
<div class="main01">
	<div class="gridspan">1</div>

   <div class="gridmenus">
		<div class="w3-container">
		    <div class="w3-card-4" style="width:200px;height:200px;background-color:#e77829">
		        <img src="images/agent01.png" alt="Agents" style="width:100px;height:100px">
		            <div class="w3-container w3-center">
		            <p>Agents</p>
		            </div>
		    </div>
		</div>
	</div>

	<div class="gridmenus">
		<div class="w3-container">
		    <div class="w3-card-4" style="width:200px;height:200px;background-color:#e77829">
		        <img src="images/meeting05.png" alt="Training" style="width:100px;height:100px">
		            <div class="w3-container w3-center">
		            <p>Training</p>
		            </div>
		    </div>
		</div>
	</div>

	<div class="gridmenus">
		<div class="w3-container">
		    <div class="w3-card-4" style="width:200px;height:200px;background-color:#e77829">
		        <img src="images/signups001.png" alt="Signups" style="width:100px;height:100px">
		            <div class="w3-container w3-center">
		            <p>Signups</p>
		            </div>
		    </div>
		</div>
	</div>

	<div class="gridmenus">
		<div class="w3-container">
		    <div class="w3-card-4" style="width:200px;height:200px;background-color:#e77829">
		        <img src="images/booth009.png" alt="Booths/Branches" style="width:100px;height:100px">
		            <div class="w3-container w3-center">
		            <p>Booths/Branches</p>
		            </div>
		    </div>
		</div>
	</div>

	<div class="gridmenus">
		<div class="w3-container">
		    <div class="w3-card-4" style="width:200px;height:200px;background-color:#e77829">
		        <img src="images/meeting03.png" alt="Settings" style="width:100px;height:100px">
		            <div class="w3-container w3-center">
		            <p>Reports</p>
		            </div>
		    </div>
		</div>
	</div>


	<div class="gridmenus">
		<div class="w3-container">
		    <div class="w3-card-4" style="width:200px;height:200px;background-color:#e77829">
		        <img src="images/settings001.png" alt="Settings" style="width:100px;height:100px">
		            <div class="w3-container w3-center">
		            <p>Settings</p>
		            </div>
		    </div>
		</div>
	</div>
	
	
</div>


</body>
</html>