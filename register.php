<?php require_once('Views/header.php')

// if(!empty($_POST))
// {
//     $errors = array();
//     if(empty($_POST['user_username']) || !preg_match('/^[a-zA-Z0-9_]+$/'), $_POST['user_username'])
//     {
//         $errors['user_username'] = "Pseudo invalide (a-zA-Z0-9_ autorisé)";
//     }
//     else if(empty($_POST['user_email']) || !filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)){
//         $errors['user_email'] = "Email invalide (FILTER_VALIDATE_EMAIL)";
//     }
//     else if(empty($_POST['user_password']) || $_POST['user_password'] != $_POST['user_password_confirm'])
//     {
//         $errors['user_password'] = "Password incorrect";
//     }
// }

?>
<div class="fake-row"></div>

<h2>Please log in or register</h2>


<img src="../assets/pics/fleur.png" alt="tamere" class="flower" id="flower">
<img src="../assets/pics/fleur2.png" alt="tamere" class="flower" id="flower2">

<div class="box-flex flex-wrap">
    <div class="box-sign-in">
        <form action="#" method="post" class="sign-in">
            <div class="form-group">
                <input type="text" autofocus="autofocus" required="required" placeholder="Username or email" name="user_login" id="user_login">
            </div>
            <div class="form-group">
                <input type="password" required="required" placeholder="Password" name="user_password" id="user_password">
            </div>
            <div class="form-group">
                <input type="submit" name="commit" value="Sign in">
            </div>
            <div class="box-center text-big">
                Forgot your password? <a href="#">Reset it</a>
            </div>
        </form>
    </div>
    <div class="box-register">
        <form action="#" method="post" class="sign-in">
            <div class="form-group">
                <input type="text" autofocus="autofocus" required="required" placeholder="Username" name="user_username" id="user_username">
            </div>
            <div class="form-group">
                <input type="text" required="required" placeholder="Email" name="user_email" id="user_email">
            </div>
            <div class="form-group">
                <input type="password" required="required" placeholder="Password" name="user_password" id="user_password">
            </div>
            <div class="form-group">
                <input type="password" required="required" placeholder="Password confirm" name="user_password_confirm" id="user_password_confirm">
            </div>
            <div class="form-group">
                <input type="submit" name="commit" value="Register">
            </div>
        </form>
        <!-- <div class="box-center text-big">
            Already have an account? <a href="#">Sign in</a>
        </div> -->
    </div>
</div>

<div class="fake-row"></div>
<div class="fake-row"></div>
<div class="fake-row"></div>
<div class="fake-row"></div>
<div class="fake-row"></div>

<script src="assets/js/register.js"></script>
<?php require_once('Views/footer.php') ?>