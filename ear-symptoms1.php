 
<?php
include('link/config.php');
?>
 

 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Disease Prediction System </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <link rel="stylesheet" href="css/form-content.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>

    </head>
    <body >
      

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('link/user-topber.php'); ?> 
        </div>

        <div class="intro-page" > 


        <div class="flex-p">
       <div class="content-p">


       <form class="form-horizontal" action="ear-symptoms2.php" method="post">
       <h2> Please check all the symptoms below that apply to you </h2>
           <p>Select one answer in each row. </p>

       <table id="example"  cellspacing="2" width="100%">
                                      
  
                                                    <tbody>
<?php $sql = "SELECT symptoms_tb.symptoms_id,symptoms_tb.symptoms_name from symptoms_tb where id in(311,108,302,121,309,35,61)";
$query = $dbh->prepare($sql);
$query->execute(); 
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result) 
{   ?> 
<div>
<tr>
 <!-- <?php echo htmlentities($cnt);?> -->

 <td><label style="margin-top : 5px">Do you have  &nbsp"<?php echo htmlentities($result->symptoms_name);?>"?</label> </td>
            <td>
                <div style="display:flex">
                    <div style="display:flex">
                        <input type="radio" id="<?php echo htmlentities($cnt);?>" name="<?php echo htmlentities($cnt);?>" value="yes" >
                        <label for="<?php echo htmlentities($cnt);?>" style="margin-top : 7px">&nbsp Yes &nbsp &nbsp</label>
                    </div>
                    <div style="display:flex">
                        <input type="radio" id="<?php echo htmlentities($cnt);?>2" name="<?php echo htmlentities($cnt);?>" value="no">
                        <label for="<?php echo htmlentities($cnt);?>2" style="margin-top : 7px">&nbsp No</label>
                    </div>
                </div>
            </td>


</tr>
</div> 
<?php $cnt=$cnt+1;}} ?>
                                                        
                                                    
</tbody>
</table>
                                      
<div class="flex-p-inside">

<div class="flex-p-2">
<li><button type="submit" name="submit" >SUBMIT</button></li> 

</div>
</div>
      
     </form>

     <div class="flex-p-inside">
     <div class="flex-p-1">
     <li><a href="teerms.php" ><button><<</button></li>
</div>
</div>


 





      </div>


        <!-- /.main-wrapper -->
        <script src="js/jquery-2.2.4.min.js"></script>

        <script src="js/main.js"></script>
        <script>
            $(function($) {
                $(".js-states").select2();
                $(".js-states-limit").select2({
                    maximumSelectionLength: 2
                });
                $(".js-states-hide").select2({
                    minimumResultsForSearch: Infinity
                });
            });
        </script>
    </body>
</html>
