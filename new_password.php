<?php $current_page = 'Password Recovery'; ?>
<?php require_once('includes/header.php') ?>
<body>
    <div class="container">
        <div class="content">
            <h2 class="heading">New Password</h2>
            <div class='notification'>Password updated successfully. <a href='login.php'>login now</a></div>
            <form action="" method="POST">
                <div class="input-box">
                    <input type="password" class="input-control" placeholder="New password" name="new-password" required>
                </div>
                <div class="input-box">
                    <input type="password" class="input-control" placeholder="Confirm new password" name="confirm-new-password" required>
                </div>
                <div class="input-box">
                    <input type="submit" class="input-submit" value="SUBMIT" name="submit" >
                </div>
            </form>

        </div> 
    </div>
    <?php require_once('includes/footer.php') ?>