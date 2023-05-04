
<?php

include 'conn.php';

if(isset($_POST['done'])){

 $name = $_POST['name'];
 $PublishName = $_POST['PublishName'];
 $Age = $_POST['Age'];
 $Date = $_POST['Date'];
 $Page = $_POST['Page'];
 $BlockType = $_POST['BlockType'];
 

 $q = " INSERT INTO `Author`(`Name`, `Publish_Name`, `Age`, `Publish_Date`, `page`, `Block_type`) VALUES ('$name','$PublishName','$Age','$Date','$Page','$BlockType')";

 $query = mysqli_query($con,$q);
 header('location:display.php');
}
?>

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
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Block Information </h1>
 </div><br>

 <label> name: </label>
 <input type="text" name="name" class="form-control"> <br>

 <label> PublishName: </label>
 <input type="text" name="PublishName" class="form-control"> <br>

 <label> Age: </label>
 <select name="Age" id="cars">
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="30">30</option>
</select> <br>

 <label> Date: </label>
 <input type="date" id="birthday" name="Date"> <br>

 <label> Page: </label>
 <input type="text" name="Page" class="form-control"> <br>

 <label> BlockType: </label>
 <input type="radio" id="Nobel" name="BlockType" value="Nobel">
  <label for="Nobel">Nobel</label><br>
  <input type="radio" id="Ausker" name="BlockType" value="Ausker">
  <label for="Ausker">Ausker</label><br>
  <input type="radio" id="Nothing" name="BlockType" value="Nothing">
  <label for="javascript">Nothing</label>
 <br>

 <button class="btn btn-success" type="submit" name="done"> Add Block </button><br>

 </div>
 </form>
 </div>
</body>
</html>