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
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <div class="navbar-header" id="myNavbar">
      <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
			 <?php foreach($result as $menu_item): ?>
        <li class="active"> <a class="nav-link active" href="index.php?subject='<?php echo $menu_item['item_no']; ?>' " >
                    <?php echo $menu_item['item_no']; ?>
                    </a></li>
				 <?php endforeach; ?>
       
        
      </ul>
      
    </div>
  </div>
</nav>
  <div class="container-fluid " >  
    <h1 style="text-align:center; color: #15a0cf;">Enter New Subjects into Form</h1>
     <div class="form-group">

      <form class="form-group" method="post" action="app/connection.php">

            <label>Enter Subject Number</label>
            <br>
            <input type="text" name="item_no" class="form-control" placeholder="Enter Subject Number" required>
            <br>
            <label>Enter Subject Class Type</label>
            <br>
            <input type="text" name="object_class" class="form-control" placeholder="Enter Class Type" required>
            <br>
            <label>Enter link to subject image (if any available)</label>
            <br>
            <input type="text" name="subject_image" class="form-control" placeholder="Use following format: images/image_name.(gif, jpg, png)">
            <br>
            <label>Enter Containment Procedures</label>
            <br>
            <textarea name="procedures" rows="5" class="form-control" required placeholder="Separate Paragraphs with \n"></textarea>
            <br>
            <label>Enter Subject Description Details</label>
            <br>
            <textarea name="description" rows="5" class="form-control" required placeholder="Separate Paragraphs with \n"></textarea>
            <br>
            <label>Enter Chronological History</label>
            <br>
            <textarea name="history" rows="5" class="form-control" placeholder="Separate Paragraphs with \n"></textarea>
            <br>
            <label>Enter Additional Notes</label>
            <br>
            <textarea name="notes" rows="5" class="form-control" placeholder="Separate Paragraphs with \n"></textarea>
            <br>
            <label>Enter Reference</label>
            <br>
            <textarea name="reference" rows="5" class="form-control" placeholder="Separate Paragraphs with \n"></textarea>
            <br>
            <br>
            <input type="submit" class= "btn btn-primary" name="submit" value="Submit Form">
           
      </form>
   </div>
</div>
   <footer class="container-fluid text-center">
  <p>©copyright 2020 Developed by Monica  Student ID:30025447</p>
</footer>

</body>
</html>