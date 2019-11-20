<?php $current_page = 'Register'; ?>
<?php require_once('includes/header.php')?>
    <div class="container">
        <div class="content">
            <h2 class="heading">Sign Up</h2>
        <?php
            if(isset($_POST['sign-up'])) {
               $first_name          = escape($_POST['first_name']);
               $last_name           = escape($_POST['last_name']);
               $user_name           = escape($_POST['user_name']);
               $email               = escape($_POST['user_email']);
               $password            = escape($_POST['user_password']);
               $confirm_password    = escape($_POST['user_confirm_password']);

            if (!preg_match('/^[a-zA-Z]{3,}$/', $first_name)) {
                  $first_name_error = "<div class='text-danger text-center' >First Name must be atleast 3 letters long</div>";
              }
            if (!preg_match('/^[a-zA-Z]{3,}$/', $last_name)) {
                $last_name_error = "<div class='text-danger text-center' >First Name must be atleast 3 letters long</div>";
            }
            if (!preg_match('/^[a-zA-Z0-9]{3,20}$/', $user_name)) {
                $user_name_error = "<div class='text-danger text-center' >User Name must be atleast 3 characers, letters, numbers</div>";
            }
            if (!preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/i', $email)) {
                $email_error = "<div class='text-danger text-center' >Email must be a valid email address</div>";
            }
            if ($password == $confirm_password) {
                if (!preg_match('/^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{6,20}$/', $password)) {
                $password_error = "<div class='text-danger text-center' >Password must contain at least one letter, at least one number, and be atleast 6 digits long</div>";
                }
             } else {
                $password_error = "<div class='text-danger text-center' >Password does not match</div>";
            }
    }  
?>
            <div class='notification'>Sign up successful. Check your email for activation link</div>
            <form action="sign_up.php" method="POST">
                <div class="input-box">
                    <input type="text" class="input-control" placeholder="First name" name="first_name" autocomplete="off">
                    <?php echo isset($first_name_error) ? $first_name_error: '' ?>
                </div>
                <div class="input-box">
                    <input type="text" class="input-control" placeholder="Last name" name="last_name" autocomplete="off">
                    <?php echo isset($last_name_error) ? $last_name_error: '' ?>
                </div>
                <div class="input-box">
                    <input type="text" class="input-control" placeholder="Username" name="user_name" autocomplete="off">
                    <?php echo isset($user_name_error) ? $user_name_error: '' ?>
                </div>
                <div class="input-box">
                    <input type="email" class="input-control" placeholder="example@mail.com" name="user_email" autocomplete="off">
                    <?php echo isset($email_error) ? $email_error: '' ?>
                </div>
                <div class="input-box">
                    <input type="password" class="input-control" placeholder="Enter password" name="user_password" autocomplete="off">
                    <?php echo isset($password_error) ? $password_error: '' ?>
                </div>
                <div class="input-box">
                    <input type="password" class="input-control" placeholder="Confirm password" name="user_confirm_password" autocomplete="off">
                    <?php echo isset($password_error) ? $password_error: '' ?>
                </div>
                <div class="input-box">
                    <input type="submit" class="input-submit" value="SIGN UP" name="sign-up">
                </div>
                <div class="sign-up-cta"><span>Already have an account?</span> <a href="login.php">Login here</a></div>
            </form>

        </div>
    </div>
 <?php require_once('includes/footer.php')?>
