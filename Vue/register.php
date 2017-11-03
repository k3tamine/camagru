<?php require_once('header.php') ?>
<div class="fake-row"></div>

<h2>Please log in or register</h2>

<!-- <button type="submit">toto</button> -->
<!-- <button>toto</button> -->

<img src="../assets/pics/fleur.png" alt="tamere" class="flower" id="flower">
<img src="../assets/pics/fleur2.png" alt="tamere" class="flower" id="flower2">

<div class="box-flex">
    <div class="box-sign-in">
        <form action="#" method="post" class="sign-in">
            <div class="form-group">
                <input type="text" autofocus="autofocus" required="required" placeholder="Username or email" name="user[login]" id="user_username">
            </div>
            <div class="form-group">
                <input type="password" required="required" placeholder="Password" name="user[password]" id="user_password">
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
                <input type="text" autofocus="autofocus" required="required" placeholder="Username" name="user[username]" id="user_username">
            </div>
            <div class="form-group">
                <input type="text" required="required" placeholder="Email" name="user[email]" id="user_email">
            </div>
            <div class="form-group">
                <input type="password" required="required" placeholder="Password" name="user[password]" id="user_password">
            </div>
            <div class="form-group">
                <input type="password" required="required" placeholder="Password confirm" name="user[password_confirm]" id="user_password_confirm">
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
<?php require_once('footer.php') ?>