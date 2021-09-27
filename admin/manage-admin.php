<?php include('path/menu.php'); ?>
          <!-- mean content section start -->
          <div class="main-content">
          <div class="wrapper">
           <h1>Manage Admin</h1>
           <br/><br/><br/>
           
           <?php if(isset($_SESSION['add'])) 
           {
               echo $_SESSION['add'];
               unset($_SESSION['add']); // Removing session message
           }
           if(isset($_SESSION['delete']))
           {
               echo $_SESSION['delete'];
               unset($_SESSION['delete']);
           }
           ?>
           <br/><br/><br/>
           <!--button to Add admin -->
           <a href="add-admin.php" class="btn-primary">Add Admin</a>
           
           <br/><br/><br/>
        
           <table class="tbl-full">
            <tr>
                <th>S.N.</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Action</th>
            </tr> 
            <?php
            // Query to Get all admin
            $sql = "SELECT * FROM tbl_admin";
            // Execute the Query
            $res = mysqli_query($conn, $sql);
            // check whether the query is executed or not
            if($res==TRUE)
            {
                // Count rows to chech if we have data in database or not
                $rowCount = mysqli_num_rows($res);// Function to get all the rows in database
                $sn=1;// Creat a Variable and assign the value

                if($rowCount>0){
                //we have data in database
                while($rows=mysqli_fetch_assoc($res)){
                    //using while loop to get all data from databass
                    // and while loop will run as long as we have data in database
                    $id=$rows['id'];
                    $full_name=$rows['full_name'];
                    $username=$rows['username'];
                    //DIsplay the values in our table
                   ?>
                   <tr>
                <td><?php echo $sn++?></td>
                <td><?php echo $full_name?></td>
                <td><?php echo $full_name?></td>
                <td><a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update Admin</a>
                <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete Admin</a>
                </td>
            </tr> 
                   <?php 
                }
            }
            else{
                // we donot have data in database
            }
            }
            ?> 
             
           </table>
           
            </div>

          </div>
          <!-- mean content section end -->
 <?php include('path/footer.php'); ?>