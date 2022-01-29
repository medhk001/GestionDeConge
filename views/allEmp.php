<?php
    $data = new EmController();
    $employes = $data->getAllEm();
    // print_r($employes);
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Table User</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
	<link rel="stylesheet" href="./public/styleMenu.css">
	<link rel="stylesheet" href="./public/css/style.css">

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
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo BASE_URL;?>allEmp"><i class="fa fa-bullseye"></i>Employes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="fa fa-map-signs"></i>Conge</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL;?>calendrier"><i class="fa fa-braille"></i>Calendrier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i>Mon Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-copy"></i>Contact</a>
                </li>
            </ul>
        </div>
    </nav>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Table User</h2>
				</div>
			</div>
			<div class="row">
			<a type="button" href="<?php echo BASE_URL;?>addUser" class="btn btn-primary mr-2 mb-2">Ajouter</a>
			<a type="button" href="<?php echo BASE_URL;?>home" class="btn btn-primary mr-2 mb-2">Home</a>
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-responsive-xl">
						  <thead>
						    <tr>
						    	<th>&nbsp;</th>
						        <th>Nom Prenom</th>
						        <th>Email</th>
                                <th>Matricule</th>
						        <th>Status</th>
						        <th>Action</th>
						    </tr>
						  </thead>
						  <tbody>
                          <?php foreach($employes as $emp):?> 
						    <tr class="alert" role="alert">
						    	<td>
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox" >
										  <span class="checkmark"></span>
										</label>
						    	</td>
						      <td class="d-flex align-items-center">
						      	<div class="img" style="background-image: url(./public/images/person_1.jpg);"></div>
						      	<div class="pl-3 email">
								  <h6><b><?php echo $emp['Nom']." ".$emp['Prenom']?></b></h6>
						      		<span><?php echo "Date d'embauche : ".$emp['date_Emb']?></span>
						      		<span><?php echo "Sexe : ".$emp['Sexe']?></span>
						      	</div>
						      </td>
						      <td><?php echo $emp['Email']?></td>
						      <td><?php echo $emp['Matricul']?></td>
						      <td class="status" >
                                <?php if($emp['Etat'] === "Active"): ?>
                                     <span class="active">Active</span>
                                <?php else: ?>
                                     <span class="waiting">Waiting</span>
                                <?php endif ?>
                                </td>
						      <td>
						      	<!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button> -->
							  <form methode="post" action="update">
								  <input type="hidden" name="id" value="<?php echo $emp['id'] ?>">
								  <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
							  </form>
							  <form methode="post" action="delete">
								  <input type="hidden" name="id" value="<?php echo $emp['id'] ?>">
								  <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
							  </form>
				        	</td>
						    </tr>
                            <?php endforeach;?> 
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
	<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
	<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script>
	<script  src="./public/scriptMenu.js"></script>
	<script src="./public/js/jquery.min.js"></script>
  	<script src="./public/js/popper.js"></script>
  	<script src="./public/js/bootstrap.min.js"></script>
  	<script src="./public/js/main.js"></script>
	</body>
</html>

