<?php
include 'connectdb.php';
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="delete from curdoperations where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header('location:form.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>