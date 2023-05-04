<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="get">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Search Book </h1>
 </div><br>

 <label> PublishName: </label>
 <input type="text" name="PublishName" class="form-control"> <br>

 <label> Age: </label>
 <select name="Age" id="cars">
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="30">30</option>
</select> <br>

 <label> BlockType: </label>
 <input type="radio" id="Nobel" name="BlockType" value="Nobel">
  <label for="Nobel">Nobel</label><br>
  <input type="radio" id="Ausker" name="BlockType" value="Ausker">
  <label for="Ausker">Ausker</label><br>
  <input type="radio" id="Nothing" name="BlockType" value="Nothing">
  <label for="javascript">Nothing</label>
 <br>

 <button class="btn btn-success" type="submit" name="done"> Add Block </button><br>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Book List </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> SL </th>
 <th> BookName </th>
 <th> Publish Name </th>
 <th> Publish Date </th>

 </tr >

 <?php

 include 'conn.php'; 
 if(isset($_GET['done'])){

    $PublishName = $_GET['PublishName'];
    $Age = $_GET['Age'];
    $BlockType = $_GET['BlockType'];
 $q = "SELECT `id`, `Name`, `Publish_Name`, `Publish_Date` FROM `Author` WHERE Age=$Age and Publish_Name='$Publish_Name' ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['Name'];  ?> </td>
 <td> <?php echo $res['Publish_Name'];  ?> </td>
 <td>  <?php echo $res['Publish_Date'];  ?> </td>

 </tr>

 <?php 
 }}
  ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>



 </div>
 </form>
 </div>
</body>
</html>