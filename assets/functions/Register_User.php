<?php
/**
 * Created by PhpStorm.
 * User: nsmaj
 * Date: 7/16/2017
 * Time: 5:15 PM
 */
require_once ('../functions/connect.php');
    $firstName=mysqli_real_escape_string($connection,$_POST['firstname']);
    $lastName =mysqli_real_escape_string($connection, $_POST['lastname']);
    $userName =mysqli_real_escape_string($connection, $_POST['username']);
    $email =mysqli_real_escape_string($connection, $_POST['email']);
    $passWord = mysqli_real_escape_string($connection,$_POST['password']);

    if(empty($firstName)||empty($lastName)||empty($userName)||empty($email)||empty($passWord))
    {
        header('location:http://localhost/phplogin/assets/inc/register.php');
    }
    else{
        $sql="select * from user WHERE UserName='$userName'";
        $result=mysqli_query($connection,$sql);
        $resultcheck=mysqli_num_rows($result);
        if($resultcheck>0){
            header('location:location:http://localhost/phplogin/assets/inc/register.php');
        }
        else{
            //encrypt password
            $encriptPassword=md5($passWord);

            $sql="insert into user(FirstName,LastName,UserName,Email,password)values('$firstName','$lastName','$userName','$email','$encriptPassword')";
                $result=mysqli_query($connection,$sql);
                if(mysqli_num_rows($result)>0) {
                    header('location:http://localhost/phplogin/assets/index.php?l=success');
                    exit();
                }
                else{
                    
                    header('location:http://localhost/phplogin/assets/inc/register.php?error=not valid');
                    exit();
                }

        }
    }

?>