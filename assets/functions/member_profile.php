<?php
include_once 'connect.php';
include_once '../inc/header.php';
include  '../inc/LoggedMenu.php';
$username=$_SESSION['username'];
$sql ="select * from user where UserName='$username'";
$result=mysqli_query($connection,$sql);
$resultcheck=mysqli_num_rows($result);
$profiledata=mysqli_fetch_array($result);
echo "<div class='profiledata'>
            <div class='container'>
            <div class='row'>
            <table class='table table-bordered table-responsive'>
            <tr>
                <th>UserName</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                
            </tr>
</div>
</div>";
if($resultcheck>0){

    echo "<tr>
            <td>" . $profiledata['UserName'] . "</td>
            <td>" . $profiledata['FirstName'] . "</td>
            <td>" . $profiledata['LastName'] . "</td>
            <td>" . $profiledata['Email'] . "</td>
            </tr>";


}
echo "</table>";






include_once '../inc/footer.php';
?>