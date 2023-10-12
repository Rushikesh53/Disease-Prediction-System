

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


       <form class="form-horizontal" action="teerms.php" method="post">
       <h2> Please check all the statements below that apply to you </h2>
           <p>Select one answer in each row. </p>

       <table id="example"  cellspacing="2" width="100%">
                                      
  
 <tbody>
<tr>

<td><label style="margin-top : 5px">I am Overweight and Obese</label> </td>
<td>
    <div style="display:flex">
        <div style="display:flex">
            <input type="radio" id="overweight" name="overweight" value="yes" >
            <label for="overweight" style="margin-top : 7px">&nbsp Yes &nbsp &nbsp</label>
        </div>
        <div style="display:flex">
            <input type="radio" id="overweight2" name="overweight" value="no">
            <label for="overweight2" style="margin-top : 7px">&nbsp No</label>
        </div>
    </div>
</td>

</tr>

<tr>

<td><label style="margin-top : 5px">I Smoke Cigrates</label> </td>
<td>
    <div style="display:flex">
        <div style="display:flex">
            <input type="radio" id="Cigrates" name="Cigrates" value="yes" >
            <label for="Cigrates" style="margin-top : 7px">&nbsp Yes &nbsp &nbsp</label>
        </div>
        <div style="display:flex">
            <input type="radio" id="Cigrates2" name="Cigrates" value="no">
            <label for="Cigrates2" style="margin-top : 7px">&nbsp No</label>
        </div>
    </div>
</td>
                                                                     
</tr>
<tr>


<td><label style="margin-top : 5px">I have high Cholesterol</label> </td>
<td>
    <div style="display:flex">
        <div style="display:flex">
            <input type="radio" id="Cholesterol" name="Cholesterol" value="yes" >
            <label for="Cholesterol" style="margin-top : 7px">&nbsp Yes &nbsp &nbsp</label>
        </div>
        <div style="display:flex">
            <input type="radio" id="Cholesterol2" name="Cholesterol" value="no">
            <label for="Cholesterol2" style="margin-top : 7px">&nbsp No</label>
        </div>
    </div>
</td>
                                                                     
</tr>
<tr>


<td><label style="margin-top : 5px">I have hypertention</label> </td>
<td>
    <div style="display:flex">
        <div style="display:flex">
            <input type="radio" id="hypertention" name="hypertention" value="yes" >
            <label for="hypertention" style="margin-top : 7px">&nbsp Yes &nbsp &nbsp</label>
        </div>
        <div style="display:flex">
            <input type="radio" id="hypertention2" name="hypertention" value="no">
            <label for="hypertention2" style="margin-top : 7px">&nbsp No</label>
        </div>
    </div>
</td>
     
                                                                      
</tr>
<tr>

<td><label style="margin-top : 5px">I have diabates</label> </td>
<td>
    <div style="display:flex">
        <div style="display:flex">
            <input type="radio" id="diabates" name="diabates" value="yes" >
            <label for="diabates" style="margin-top : 7px">&nbsp Yes &nbsp &nbsp</label>
        </div>
        <div style="display:flex">
            <input type="radio" id="diabates2" name="diabates" value="no">
            <label for="diabates2" style="margin-top : 7px">&nbsp No</label>
        </div>
    </div>
</td>
     
                                                                           
</tr>
                                                       
                                                    
</tbody>
</table>
<div class="flex-p-inside">
<div class="flex-p-2">
<li><button type="submit" name="submit" class="btn btn-primary">Submit</button></li> 

</div>
</div>
</form>
     <div class="flex-p-inside">
     <div class="flex-p-1">
     <li><a href="age.php" ><button type="button" class="btn btn-primary"><<</button></li>

     
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
