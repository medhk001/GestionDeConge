<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Dashboard Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css'>
  <link rel="stylesheet" href="./public/styleDash.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class='dashboard'>
    <div class="dashboard-nav">
        <header><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a><a href="#"
                                                                                   class="brand-logo"><i
                class="fas fa-anchor"></i> <span>BRAND</span></a></header>
        <nav class="dashboard-nav-list"><a href="<?php echo BASE_URL;?>" class="dashboard-nav-item"><i class="fas fa-home"></i>
            Home </a><a
                href="<?php echo BASE_URL;?>dashboard" class="dashboard-nav-item active"><i class="fas fa-tachometer-alt"></i> dashboard
        </a>
        <!-- <a href="#" class="dashboard-nav-item"><i class="fas fa-file-upload"></i> Upload </a> -->
            <div class='dashboard-nav-dropdown'><a href="#" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i
                    class="fas fa-users"></i> Users </a>
                <div class='dashboard-nav-dropdown-menu'><a href="<?php echo BASE_URL;?>allEmp"
                                                            class="dashboard-nav-dropdown-item">All</a><a
                        href="<?php echo BASE_URL;?>addUser" class="dashboard-nav-dropdown-item">Ajouter</a>
                        <a href="<?php echo BASE_URL;?>search" class="dashboard-nav-dropdown-item">Chercher</a>
                        
                    </div>
            </div>
            <div class='dashboard-nav-dropdown'><a href="#" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i
                    class="fas fa-users"></i> Conge </a>
                <div class='dashboard-nav-dropdown-menu'><a href="<?php echo BASE_URL;?>acceptationConge"
                                                            class="dashboard-nav-dropdown-item">All</a><a
                        href="<?php echo BASE_URL;?>demandeConge" class="dashboard-nav-dropdown-item">Demande</a>
                        <a href="<?php echo BASE_URL;?>mesConge" class="dashboard-nav-dropdown-item">Mes Conge</a>
                        <a href="<?php echo BASE_URL;?>monSolde" class="dashboard-nav-dropdown-item">Mon Solde</a>
                    </div>
            </div>
            <a href="#" class="dashboard-nav-item"><i class="fas fa-cogs"></i> Settings </a>
          <div class="nav-item-divider"></div>
          <a
                    href="<?php echo BASE_URL;?>logout" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
        </nav>
    </div>
    <div class='dashboard-app'>
        <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
        <div class='dashboard-content'>
            <div class='container'>
                <div class='card'>
                    <div class='card-header'>
                        <h1>Welcome back </h1>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
<script  src="./public/scriptDash.js"></script>

</body>
</html>
