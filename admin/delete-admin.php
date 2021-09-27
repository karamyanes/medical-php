<?php
//Include constants.php file here
include('../config/constants.php');
// 1- get the ID of Admin to be deleted
 $id= $_GET['id'];

//2- Creat SQL query to Delete Admin
$sql = "DELETE FROM tbl_admin WHERE id=$id";

//Execute the Query
$res = mysqli_query($conn, $sql);
// check whether the query executed successfully or not
if($res==True)
{
  //Create session variable to dispaly message
  $_SESSION['delete'] = "<div class='success'>Admin deleted successfully.</div>";
  //Redirect to manage admin page
  header('location:'.SITEURL.'admin/manage-admin.php');  
}
else{
     //Create session variable to dispaly message
  $_SESSION['delete'] = "<div class='error'>Admin deleted failed.</div>";
  //Redirect to manage admin page
  header('location:'.SITEURL.'admin/manage-admin.php');

}
//3-Redirect to Manage Admin page with message(success/error)

?>