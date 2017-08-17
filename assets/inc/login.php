<?php
include "header.php";
include "navmenu.php"
?>
<style>
.signin{
    margin-top: 10%;
}
</style>

<div class="container signin">
    <div class="row">
        <div class="col-md-offset-3 col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <form method="POST" action="../functions/login_User.php" role="form">
                        <div class="form-group">
                            <h2>Sign in</h2>
                        </div>
                        <div class="form-group">
                            <strong>Username</strong>
                            <input id="signinEmail" name="username" type="text" maxlength="50"  class="form-control">
                        </div>
                        <div class="form-group">
                            <strong>Password</strong>
                            <input id="signinPassword" name="password" type="password" maxlength="25"  class="form-control">
                        </div>
                        <div class="form-group" style="padding-top: 12px;">
                            <button id="signinSubmit" type="submit" name="login" class="btn btn-success btn-block">Sign in</button>

                        </div>

                        <p class="form-group"><a href="./register.php" class="btn btn-info btn-block">Create an account</a></p>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";

?>
