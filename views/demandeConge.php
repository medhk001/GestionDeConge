<?php

if (isset($_POST['datedepart']) & isset($_POST['dateretour'])){
	$data = new CongeController();
    $pages = $data->demande();
}

?>

<html>
<head>
	<title> Demander un congé</title>
	<style type="text/css">
a{
text-decoration: none;	
}
button{
	background-color: #EEF;
	text-align: right;
	width: 170px;
	height: 6%;
	background-repeat: no-repeat;
	background-position: center left;
}
   body{background-color: #EEE;}
   .notifdiv{ border:1px  dotted black;text-align: center;margin-left:auto;margin-right:auto;margin-top:1%;background-color:#EEF;width:40%; }  
.notif,span{color:red;}
  


header{
	text-align: center;
	background-color: #EEF;
}
   .container{
  box-shadow: 1px 1px 30px black;
   	width:85%;
   	background-color: rgb(151,199,222);
   margin-left: auto;
   margin-right: auto;
   }

  fieldset{background-color:#EEF;margin-top:1%;margin-left: auto;margin-right: auto; width: 50%;}
form{text-align: center;}
.confirm{
margin-bottom: 2em;
color: ;
border:1px solid #a2d246;
width: 60%;
margin-left: auto;
margin-right: auto;
background-color: #ebf8a4;
}
button:hover{
background-color: rgb(151,199,222);
}
footer{text-align: center;margin-top: 3%;}

	</style>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
	<link rel="stylesheet" href="./public/styleMenu.css">

</head>	
<body style="background-color:black">
<nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="<?php echo BASE_URL;?>">GDC</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL;?>"><i class="fa fa-universal-access"></i>Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo BASE_URL;?>allEmp"><i class="fa fa-bullseye"></i>Employes</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo BASE_URL;?>demandeConge"><i class="fa fa-map-signs"></i>Conge</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL;?>calendrier"><i class="fa fa-braille"></i>Calendrier</a>
                </li>
                <li class="nav-item">
				<a class="nav-link" href="<?php if(isset($_SESSION['Admin'])){ echo BASE_URL.'dashboard'; }else{ echo BASE_URL.'Profile';}?>"><i class="far fa-chart-bar"></i>Mon Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL;?>Contact"><i class="far fa-copy"></i>Contact</a>
                </li>
            </ul>
        </div>
    </nav>
	<br>
	<br>
	<br>
	<div class="container">
<fieldset style="margin-left:25%"><legend><img src="./public/images/demande.png"></legend>
<form method="post">
	
	<p class="confirm"><em>Demande de Conge</em></p>
<input type="hidden" name="Matricul" value="<?php echo $_SESSION['Matricul'];?>">
<input type="hidden" name="dateajout" value='<?php echo date("Y/m/d");?>'>
<label>Date Départ: </label> <input type="date" name="datedepart" required>
<label style="margin-left:1em;">Date Retour : </label><input type="date" name="dateretour" required><br><br>
<select class="form-select form-select-sm" name='typeConge' aria-label=".form-select-sm example">
  <option selected value='#'>Selection le type de conge/absence </option>
  <option value="congés payés">Congés payés</option>
  <option value="congés sans solde">Congés sans solde</option>
  <option value="maladie">Maladie</option>
  <option value="congés maternité/paternité">Congés maternité/paternité</option>
  <option value="absences pour mariage">Absences pour mariage</option>
  <option value="naissance d'un proche">Naissance d'un proche</option>
  <option value="décès d'un proche">Décès d'un proche</option>
  <option value="récupération d'heures supplémentaires">Récupération d'heures supplémentaires</option>
</select><br><br>
<input type="submit" value="Envoyer la demande" > 
</form>
</fieldset>

<br>
</div>

<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
	<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
	<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script>
	<script  src="./public/scriptMenu.js"></script>

	
</body>
</html>