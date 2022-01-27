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
	
	<link rel="stylesheet" href="./public/css/style.css">

	</head>
	<body>
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
                                <?php if($emp['Etat'] == "active"): ?>
                                     <span class="active">Active</span>
                                <?php else: ?>
                                     <span class="waiting">Waiting</span>
                                <?php endif ?>
                                </td>
						      <td class="d-flex flex-row">
						      	<!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button> -->
							  <form methode="post" action="update">
								  <input type="hidden" name="id" value="<?php echo $emp['id']?>">
								  <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
							  </form>
							  <form methode="post" action="delete">
								  <input type="hidden" name="id" value="<?php echo $emp['id']?>">
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

  <script src="./public/js/jquery.min.js"></script>
  <script src="./public/js/popper.js"></script>
  <script src="./public/js/bootstrap.min.js"></script>
  <script src="./public/js/main.js"></script>
	</body>
</html>

