<?php 
if(isset($_POST['id'])){
    // die(print_r($_POST[('id')]));
    $exdata = new EmController();
    $exEm = $exdata->getEm();
    print_r($exEm);
}
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Table User</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
	<link rel="stylesheet" href="./public/styleMenu.css">

    <!-- Icons font CSS-->
    <link href="./public/add/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="./public/add/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="./public/add/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="./public/add/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="./public/add/css/main.css" rel="stylesheet" media="all">
	
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
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL;?>allEmp"><i class="fa fa-bullseye"></i>Employes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="fa fa-map-signs"></i>Conge</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL;?>calendrier"><i class="fa fa-braille"></i>Calendrier</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i>Mon Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-copy"></i>Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div  style="background-color: black" class="page-wrapper p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Modifier un employe</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row">
                            <div class="name">Nom</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" value="<?php echo $exEm->Nom;?>" name="Nom">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Prenom</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" value="<?php echo $exEm->Prenom; ?>" name="Prenom">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Matricul</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" value="<?php echo $exEm->Matricul; ?>" name="Matricul">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" value="<?php echo $exEm->Addres; ?>" name="Addres">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" value="<?php echo $exEm->Email; ?>" name="Email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" value="<?php echo $exEm->pwd; ?>" name="pwd">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Departement</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" value="<?php echo $exEm->Departement; ?>" name="Departement">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Poste</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" value="<?php echo $exEm->Poste; ?>" name="Poste">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Date d'embauche</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" place_holder="JJ/MM/AAAA" value="<?php echo $exEm->date_Emb; ?>" name="date_Emb">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Sexe</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="Sexe">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Femme</option>
                                            <option>Homme</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Etat</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="Etat">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row p-t-20">
                            <label class="label label--block">Quel est son rôle ?</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Responsable/Chef
                                    <input type="radio" value="Admin" name="Statut">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Employe
                                    <input type="radio" value="Client" name="Statut">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" name='submit' type="submit">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="./public/add/vendor/select2/select2.min.js"></script>
    <script src="./public/add/vendor/datepicker/moment.min.js"></script>
    <script src="./public/add/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="./public/add/js/global.js"></script>

    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
	<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
	<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script>
	<script  src="./public/scriptMenu.js"></script>
	</body>
</html>