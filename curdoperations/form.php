<?php
include 'connectdb.php';
if(isset($_POST['submit']))
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];

    $sql="insert into curdoperations (firstname,lastname,email,mobile) values('$firstname','$lastname','$email','$mobile')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
    echo "Datainserted";
;    }
else
{
    die(mysqli_error($conn));
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>form</title>
  </head>
  <body>
    
    <div class ="container my-5">
    <form method="post">
  <div class="form-group">
    <label>firstname</label>
    <input type="text" class="form-control"  placeholder="Enter your Name" name="firstname">
    </div>
  <div class="form-group">
    <label >lastname</label>
    <input type="text" class="form-control"  placeholder="Enter Last Name" name="lastname">
  </div>
  <div class="form-group">
    <label >email</label>
    <input type="email" class="form-control"  placeholder="Enter Your Email" name="email">
  </div>
  <div class="form-group">
    <label >mobile</label>
    <input type="text" class="form-control"  placeholder="Enter Mobile Number" name="mobile">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button> 
</form>
<div class="container my-5">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">firstname</th>
      <th scope="col">lastname</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="Select * from curdoperations";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
       while($row=mysqli_fetch_assoc($result))
       {
        $id=$row['id'];
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        echo'<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$firstname.'</td>
        <td>'.$lastname.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>
        <button class=button1><a href="update.php? updateid='.$id.'">Update</a></button>
        <button class=button2><a href="delete.php? deleteid='.$id.'">Delete</a></button>
    </td>
        </tr>'; 
       }
    }
    ?>
       
  </tbody>
</table>
</div>

   
  
  </body>
</html>
<?php

