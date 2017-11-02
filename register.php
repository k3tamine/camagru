<?php include('header.php') ?>
<div class="fake-row"></div>

<h2>Please log in or register</h2>

<!-- <button type="submit">toto</button> -->
<!-- <button>toto</button> -->

<img src="assets/fleur.png" alt="tamere" class="flower" id="flower">
<img src="assets/fleur2.png" alt="tamere" class="flower" id="flower">

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

<script>
    const box_register = document.querySelector('.box-flex .box-register');
    const display_none = (elem) => { 
        if (elem.style.display === 'none')
            elem.style.display = 'block';
        else
            elem.style.display = 'none';
    }
    // const display_none = (elem) => { elem.style.display = 'none'; }
    document.getElementById('flower').addEventListener('click', function () {
    display_none(box_register);
});
    // display_none(box_register);
    // console.log(box_register);
</script>
<?php include('footer.php') ?>