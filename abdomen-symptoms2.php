
<?php
include('link/config.php');



$ed1=0;
$ed2=0;
$ed3=0;
$ed4=0;
$ed5=0;
$ed6=0;
$ed7=0;
$ed8=0;
$ed9=0;
$ed10=0;
   if(($_POST[1])=="Yes")
   {
    $ed1++;
   }
   if(($_POST[2])=="Yes")
   {
    $ed2++;
    $ed4++;
    $ed8++;
   }
   if(($_POST[3])=="Yes")
   {
    $ed3++;
    $ed4++;
    $ed5++;
    $ed6++;
   }
   if(($_POST[4])=="Yes")
   {
    $ed4++;
    $ed5++;
    $ed8++;

   }
   if(($_POST[5])=="Yes")
   {
    $ed5++;
   }
   if(($_POST[6])=="Yes")
   {
    $ed6++;
   }

?>






<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Disease Prediction System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" type="text/css" href="js/DataTables/datatables.min.css"/>
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
        <link rel="stylesheet" href="css/form-content.css" media="screen" >
    </head>
    <body >
      

            <!-- ========== TOP NAVBAR ========== --> 
  <?php include('link/user-topber.php'); ?> 
        </div>

        <div class="intro-page" >

        <div class="flex-p">
       <div class="content-p">
 

       <form class="form-horizontal" action="abdomen-symptoms3.php" method="post">
       <h2> Please check all the symptoms below that apply to you </h2>
           <p>Select one answer in each row. </p>

       <table id="example" cellspacing="2" width="100%">                                  
   
                                                    <tbody>
<?php $sql = "SELECT symptoms_tb.symptoms_id,symptoms_tb.symptoms_name from symptoms_tb where id IN (296,269,286,291,293)";
 
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{ 
foreach($results as $result)
{   ?>
<tr>
 <!-- <?php echo htmlentities($cnt);?> -->
        


 <td><label style="margin-top : 5px">Do you have  &nbsp"<?php echo htmlentities($result->symptoms_name);?>"?</label> </td>
            <td>
                <div style="display:flex">
                    <div style="display:flex">
                        <input type="radio" name="<?php echo htmlentities($cnt);?>" value="yes" >
                        <label for="<?php echo htmlentities($cnt);?>" style="margin-top : 7px">&nbsp Yes &nbsp &nbsp</label>
                    </div>
                    <div style="display:flex">
                        <input type="radio" name="<?php echo htmlentities($cnt);?>" value="no">
                        <label for="<?php echo htmlentities($cnt);?>" style="margin-top : 7px">&nbsp No</label>
                    </div>
                </div>
            </td>

<!-- 
            <td class="result-color1">Do you have  &nbsp"<?php echo htmlentities($result->symptoms_name);?>"?</td>
              <td class="result-color1"><input type="radio" name="<?php echo htmlentities($cnt);?>" value="Yes" required>Yes  &nbsp &nbsp <input type="radio" name="<?php echo htmlentities($cnt);?>" value="No" required>No </td> -->

<!-- 





              <td class="result-color1">Do you have  &nbsp"<?php echo htmlentities($result->symptoms_name);?>"?</td>
              <td class="result-color1"><input type="radio" name="<?php echo htmlentities($cnt);?>" value="Yes" required>Yes  &nbsp &nbsp <input type="radio" name="<?php echo htmlentities($cnt);?>" value="No" required>No </td> -->
                                                            

 
</tr>
<?php $cnt=$cnt+1;}} ?>
                                                       
                                                    
                                                     </tbody>
                                                </table>

 <input type="hidden" name="var1" value="<?php echo htmlentities($ed1);?>"/>
 <input type="hidden" name="var2" value="<?php echo htmlentities($ed2);?>"/>
 <input type="hidden" name="var3" value="<?php echo htmlentities($ed3);?>"/>
 <input type="hidden" name="var4" value="<?php echo htmlentities($ed4);?>"/>
 <input type="hidden" name="var5" value="<?php echo htmlentities($ed5);?>"/>
 <input type="hidden" name="var6" value="<?php echo htmlentities($ed6);?>"/>
 <input type="hidden" name="var7" value="<?php echo htmlentities($ed7);?>"/>
 <input type="hidden" name="var8" value="<?php echo htmlentities($ed8);?>"/>
 <input type="hidden" name="var9" value="<?php echo htmlentities($ed9);?>"/>
 <input type="hidden" name="var10" value="<?php echo htmlentities($ed10);?>"/>

                                                <div class="flex-p-inside">

<div class="flex-p-2">
<li><button type="submit" name="submit" >SUBMIT</button></li> 

</div>
</div>
      
     </form>


     <div class="flex-p-inside">
     <div class="flex-p-1">
     <li><a href="abdomen-symptoms1.php" ><button><<</button></li>
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
