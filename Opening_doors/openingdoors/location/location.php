<?php include('navbar.php'); ?>

<?php 

$host="localhost";
$user="root";
$password="";
$db="opening_doors";

session_start();

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $Place=$_POST["Place"];

  $sql="select * from location where Place='".$Place."'";

  $result=mysqli_query($data,$sql);


  $row=mysqli_fetch_array($result);

      if($row["location_type"]=="chefchaoun")
        {
          $_SESSION['Place'] = $Place;
           header("location:Chefchaoun.php");
        }
      elseif($row["location_type"]=="toronto")
        {
          $_SESSION['Place'] = $Place;
          header("location:Toronto.php");
        }
  else
  {
    echo "This City It Doesn't Exist";
  }


}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>location</title>

     <!------------Bootstrap-css--------------->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
          <!------------Font-awsome--------------->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
    <!------------StyleSheet--------------->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!---------------Font-Family----------->
    <link href="https://fonts.googleapis.com/css2?family=Single+Day&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet"></head>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Simonetta&display=swap" rel="stylesheet">



</head>
<body>
<style><?php include 'location.css' ?></style>
  <img src="location.png" class="img-fluid" alt="...">
    
    <header>
    <div class="div">
        <h1>OPENING DOORS</h1>
    </div> 
    

    <h3  class="subtitle"style="text-align:center;">Find Your Next Exchange</h3>

    <!-- <form action="" method="POST" >
    <div class="mb-3">
         <input type="text" name="Place" placeholder="Where are you going? ">
         <label for="1">Arrival</label>
    </div>
    <div class="mb-3">
         <input type="date" name="debut">
         <label for="2">Departure</label>
    </div>
    <div class="mb-3">
         <input type="date" name="fin">
         <input type="submit" name="save_date" value="Search" class="form_btn">
    </div>
    </form> -->



    <form action="#" method="POST" >
  <div class="mb-3 d-flex">
  <select name="Place" class="form-control" id="exact" aria-describedby="exactplace">
    <option>Where are you going?</option>
    <option value="Chefchaoun">Chefchaoun</option>
    <option value="Toronto">Toronto</option>
  </select>
    <!-- <input type="text" name="Place" placeholder="Where are you going?" class="form-control" id="exact" aria-describedby="exactplace"> -->
    <label for="Arrival" class="form-label">Arrival</label>
    <input type="date" name="debut"  class="form-control" id="date">
  </div>
  
  <div class="mb-3 d-flex">
    <label for="Departure" class="form-label">Departure</label>
    <input type="date" name="fin"  class="form-control" id="date2">
  </div>
  <div class="mb-3 d-flex">
  <input type="submit" name="save_date" value="Search" class="form_btn">
  </div>
</form>


    

       

</header>
</body>
</html>