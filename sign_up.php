<?php $current_page = 'Register'; ?>
<?php require_once('includes/header.php')?>
    <div class="container">
        <div class="content">
            <h2 class="heading">Sign Up</h2>
        <?php
            if(Isset($_POST['sign-up'])) {
               $first_name          = escape($_POST['first_name']);
               $last_name           = escape($_POST['last_name']);
               $user_name           = escape($_POST['user_name']);
               $email               = escape($_POST['user_email']);
               $password            = escape($_POST['user_password']);
               $confirm_password    = escape($_POST['user_confirm_password']);
               
               display([$first_name, $last_name, $user_name, $email, $password, $confirm_password]);

               if($password == $confirm_password) {
   
               }else {
                    
               }
            }
         
        ?>
            <div class='notification'>Sign up successful. Check your email for activation link</div>
            <form action="sign_up.php" method="POST">
                <div class="input-box">
                    <input type="text" class="input-control" placeholder="First name" name="first_name" autocomplete="off" required>
                    <span class='error'>Error messages</span>
                </div>
                <div class="input-box">
                    <input type="text" class="input-control" placeholder="Last name" name="last_name" autocomplete="off" required>
                </div>
                <div class="input-box">
                    <input type="text" class="input-control" placeholder="Username" name="user_name" autocomplete="off" required>
                </div>
                <div class="input-box">
                    <input type="email" class="input-control" placeholder="Email address" name="user_email" autocomplete="off" required>
                </div>
                <div class="input-box">
                    <input type="password" class="input-control" placeholder="Enter password" name="user_password" autocomplete="off" required>
                </div>
                <div class="input-box">
                    <input type="password" class="input-control" placeholder="Confirm password" name="user_confirm_password" autocomplete="off" required>
                </div>
                <div class="input-box">
                    <input type="submit" class="input-submit" value="SIGN UP" name="sign-up">
                </div>
                <div class="sign-up-cta"><span>Already have an account?</span> <a href="login.php">Login here</a></div>
            </form>

        </div>
    </div>
 <?php require_once('includes/footer.php')?>