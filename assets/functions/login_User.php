

<?php
 require('connect.php');
 session_start();
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($username)||empty($password)){
       echo "<script>alert('username or password not empty')</script>";
        header('Refresh:0.0001; url=http://localhost/phplogin/assets/inc/login.php?login=Not valid');
       exit();
    }
    else{
        $pass=md5($password);
        $sql="select status from user where UserName='$username' and password='$pass'";
        $result=mysqli_query($connection,$sql);
        $resultceck=mysqli_num_rows($result);
        $status=mysqli_fetch_array($result);

        if($resultceck>0) {
            if($status['status']==1){
                $_SESSION['username']=$username;
                header('location:http://localhost/phplogin/assets/admin/adminui.php?admin=loginadmin');
            }
            else{
                $_SESSION['username']=$username;
                header('location:http://localhost/phplogin/assets/inc/loggeduserindex.php?user=success');
            }
        }




            else{
                echo "<script>alert('username or password Not matched')</script>";
                header('Refresh:0.0001; url=http://localhost/phplogin/assets/inc/login.php?login=Not matched');


        }

    }

}
else {
    echo "<div class='access denied'>
       <h1>Access Denied :Spammers are always welcome</h1>

            </div>";


}

?>