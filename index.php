<?php include('header.php');?>
  
<div class="container-fluid text-center" style="width: 80%;padding-top: 5%;">    
  <div class="row content">
    
    <div class="col-sm-12 text-left"> 
	
	<?php

                  if(isset($_GET['subject']))
                  {
                    //remove single quotes from subject get value
                    $item_number= trim($_GET['subject'], "'");

                    //run sql command to select record based on get value
                    $record= $connection->query("select * from subject where item_no='$item_number'") or die($connection->error());

                    //covert $record into an array for us to echo out on screen
                    $row = $record->fetch_assoc();

                    // create variables that hold data from db fields
                    $item_number = $row['item_no'];
                    $object_class = $row['object_class'];
                    $subject_image = $row['subject_image'];
                    $procedures = $row['procedures'];
                    $description = $row['description'];
                    $history = $row['history'];
                    $ad_notes = $row['ad_notes'];
                    $reference = $row['reference'];

                    // strip out \n and replace with linebreaks
                    $procedures = str_replace('\n', '<br><br>', $procedures);
                    $description = str_replace('\n', '<br><br>', $description);
                    $history = str_replace('\n', '<br><br>', $history);
                    $ad_notes = str_replace('\n', '<br><br>', $ad_notes);
                    $reference = str_replace('\n', '<br><br>', $reference);
                    
                    
                    if (!empty($item_number)) { ?> <p style="color: orange !important; font-weight: 700;font-size: 18px;">Item_#: <span style="color: black !important"><?php echo  $item_number;   ?></span></p>  <?php }

                    if (!empty($object_class)) { ?> <p style="color: orange !important; font-weight: 700;font-size: 18px;">Object Class: <span style="color: black !important"><?php echo $object_class;  ?></span></p>  <?php } 
                    
                     if (!empty($subject_image))  { ?><p><img src="<?php echo $subject_image; ?>"></p>  <?php }  

                    if (!empty($procedures))  { ?> <h3>Special Containment Procedures</h3>      <p><?php echo $procedures; ?></p>  <?php }  

                    if (!empty($description)) { ?>  <h3>Description</h3> <p> <?php echo $description; ?></p>  <?php } 
                    
                    if (!empty($history)) { ?>  <h3>Chronological History</h3> <p> <?php echo $history; ?></p>  <?php } 
                    if (!empty($ad_notes)) { ?>  <h3>Additional Notes</h3> <p> <?php echo $ad_notes; ?></p>  <?php } 
                    if (!empty($reference)) { ?>  <h3>Reference</h3> <p> <?php echo $reference; ?></p>  <?php } 
                      
                  } 
                    
                    else
                  { ?>
 <div class="container-fluid " style="width: 80%">  
    <h1 style="text-align:center; color: orange;
    font-weight: 700;">INSERT SUBJECT</h1>
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
 
                    <?php 

                  }
                    
                    ?>
	
      
      
    </div>
    
  </div>
</div>
<?php include('footer.php'); ?>