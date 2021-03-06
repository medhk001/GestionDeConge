<?php 

if(isset($_POST['id'])){
    $exdata = new CongeController();
    $exEm = $exdata->getConge();
}
if(isset($_POST['submit'])){
    $Codata = new CongeController();
    $COEm = $Codata->updateConge();
}

?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Table User</title>
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
	<body style="background-color: black">
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
	
	<p class="confirm"><em> Modifier le Conge</em></p>
<input type="hidden" name="id" value="<?php echo $_POST['id'];?>">
<input type="hidden" name="Matricul" value="<?php echo $_SESSION['Matricul'];?>">
<input type="hidden" name="dateajout" value='<?php echo date("Y/m/d");?>'>
<label>Date D??part: </label> <input type="date" name="datedepart" value='<?php echo $exEm->datedepart;?>' required>
<label style="margin-left:1em;">Date Retour : </label><input type="date" name="dateretour" value='<?php echo $exEm->dateretour;?>' required><br><br>
<select class="form-select form-select-sm" name='typeConge' aria-label=".form-select-sm example">
  <option selected value='<?php if(isset($exEm->typeConge)){  echo $exEm->typeConge; }else{ echo "Null";}?>'><?php if(isset($exEm->typeConge)){  echo $exEm->typeConge; }else{ echo "Null";}?></option>
  <option value="cong??s pay??s">Cong??s pay??s</option>
  <option value="cong??s sans solde">Cong??s sans solde</option>
  <option value="maladie">Maladie</option>
  <option value="cong??s maternit??/paternit??">Cong??s maternit??/paternit??</option>
  <option value="absences pour mariage">Absences pour mariage</option>
  <option value="naissance d'un proche">Naissance d'un proche</option>
  <option value="d??c??s d'un proche">D??c??s d'un proche</option>
  <option value="r??cup??ration d'heures suppl??mentaires">R??cup??ration d'heures suppl??mentaires</option>
</select><br><br>
<select class="form-select form-select-sm" name='etat' aria-label=".form-select-sm example">
  <option selected value='<?php if(isset($exEm->etat)){  echo $exEm->etat; }else{ echo "Null";}?>'><?php if(isset($exEm->etat)){  echo $exEm->etat; }else{ echo "Null";}?></option>
  <option value="Accepte">Accepte</option>
  <option value="Refuses">Refuses</option>
  <option value="Encours de traitement">Encours de traitement</option>
</select><br><br>
<button type="submit" name='submit' >Envoyer la modification</button>
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