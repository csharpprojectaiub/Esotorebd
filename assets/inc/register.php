
<?php
include "header.php";
include "navmenu.php";

?>
<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
            <div class="panel-body">
                <form method="POST" action="../functions/Register_User.php" role="form">
                    <div class="form-group">
                        <h2>Sign Up</h2>
                    </div>
                    <div class="form-group" >
                        <strong>First Name</strong>
                        <input id="firstname" name="firstname" type="text" maxlength="50"   class="form-control">
                    </div>
                    <div class="form-group">
                        <strong>Last Name</strong>
                        <input id="lastname" name="lastname" type="text" maxlength="50"  class="form-control">
                    </div>

                    <div class="form-group">
                        <strong>User Name</strong>
                        <input id="UserName" name="username" type="text" maxlength="50"  class="form-control">
                    </div>

                    <div class="form-group">
                        <strong>Email</strong>
                        <input id="email" name="email" type="email" maxlength="50"  class="form-control">
                    </div>

                    <div class="form-group">
                        <strong>Password</strong>
                        <input id="Password" name="password" type="password"  maxlength="25"  class="form-control">
                    </div>
                    <div class="form-group">
                        <strong>Password (re-type)</strong>
                        <input id="rePassword" name="repassword" type="password"  maxlength="25"  class="form-control">
                    </div>
                    <div class="form-group" style="padding-top: 12px;">
                        <button id="signUp" onblur="checkpass();" type="submit" class="btn btn-success btn-block" ">Sign Up</button>
                    </div>
                    <div class="form-group divider">

                    </div>
                    <p class="form-group"><a href="./login.php" class="btn btn-info btn-block">Sign In</a></p>

                </form>
            </div>
        </div>
    </div>
    </div>
</div>
<script type="text/javascript">
    function checkpass(){
        var password = document.getElementsByClassName('password').value;
        var repassword = document.getElementsByClassName('repassword').value;
        if(password!=repassword){
            alert('password not matched');
        }


    }
</script>
    
<?php
include "footer.php";

?>