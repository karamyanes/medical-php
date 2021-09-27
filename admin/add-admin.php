<?php include('path/menu.php') ?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add admin</h1>
        <br/><br/>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name</td>
                    <td><input type="text" name="full_name" placeholder="ENter your name"> </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" placeholder="ENter your username"> </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" placeholder="ENter your password"> </td>
                </tr>
                <tr>
                    
                    <td colspan="2"><input type="submit" name="submit" value="Add Admin" class="btn-secondary"> </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php include('path/footer.php') ?>