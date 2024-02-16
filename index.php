<?php
$success="0";

if(isset($_REQUEST['submit'])){
    $name=$_REQUEST['name'];
     $email=$_REQUEST['email'];
     $gender=$_REQUEST['gender'];
       $mobile=$_REQUEST['mobile'];
        $password=$_REQUEST['password'];

        $conn=new mysqli('localhost','root','','project2');

if($conn){
 // query sting
 $q="INSERT INTO user1(name,email,gender,mobile,password) VALUES('$name','$email','$gender','$mobile','$password') ";
 // query result
 $res=$conn->query($q);

 if($res){

     
     $success=1;
 }
 else{
    die (mysqli_error($conn));
 }
}
else{
    die (mysqli_error($conn));
}
       

}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

<style>
  .btn {
    background:rgb(59, 152, 223);
  }
  body{
    background:rgb(59, 152, 223);
  }
.container{
  width: 600px;
  background:rgb(66, 108, 180,0.5);
  color:white;
  padding:50px;
margin:auto;
margin-top:50px;
} 
</style>

  <body>

<?php
if($success){
  echo "<script> alert('Successfully Save')  </script> ";
}


?>
 
<div class="container   rounded-3  ">
<h2 class="text-center">HTML FORM</h2>
<form action="" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name :</label>
    <input type="text"  class="form-control" placeholder="Enter your name" name="name" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">email :</label>
    <input type="text"  class="form-control" placeholder="Enter your email" name="email" >
  </div>
  <div class="mb-1 ">
    <label for="exampleInputEmail1" class="form-label pe-5 text-start" name="gender">gender :</label>
    <span class="ps-4">Male</span> <input type="radio"  value="male" class="pe-5"  name="gender" >
   <span class="ps-4"> Female</span> <input type="radio"  value="femal" class="pe-5"  name="gender" >
   <span class="ps-4">Other</span> <input type="radio"  value="other" class="pe-5"  name="gender" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Mobile :</label>
    <input type="text"  class="form-control" placeholder="Enter your mobile" name="mobile" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Password :</label>
    <input type="text"  class="form-control" placeholder="Enter your password" name="password" >
  </div>

  <button type="submit" name="submit" value="submit" class=" btn btn-primary mt-3 w-100">login</button>
</form>

</div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></>
  </body>
</html>