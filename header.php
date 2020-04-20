<!DOCTYPE html>
<html lang="en">
<head>
  <title>SCP Web Application</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
    color: black !important;
    background-color: orange !important;
    font-weight: 700 !important;
}
.navbar-inverse {
    background-color: orange !important;
    border-color: orange !important;
}
.navbar-inverse .navbar-nav>li>a {
    color: black !important;
    font-weight: 700 !important;
}
p {
    color: black !important;
}
.btn-primary {
    color: black !important;
    background-color: orange !important;
    border-color: orange !important;    font-weight: 700 !important;
}
footer {
    background-color: orange !important;
color: black !important; }
body {
        color: orange !important;
}
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>
<?php include "app/connection.php"; ?>
<nav class="navbar navbar-inverse" >
  <div class="container-fluid" style="width: 80%;" >
    
    <div class="navbar-header" id="myNavbar" >

      <ul class="nav navbar-nav" >
          <li><a href="index.php">Home</a></li>
			 <?php foreach($result as $menu_item): ?>
        <li class="active"> <a class="nav-link active" href="index.php?subject='<?php echo $menu_item['item_no']; ?>' " >
                    <?php echo $menu_item['item_no']; ?>
                    </a></li>
				 <?php endforeach; ?>
        <!--li class="active"><a href="form.php" class="nav-link active">Enter New Subject</a></li-->
        
      </ul>
      
    </div>
  </div>
</nav>