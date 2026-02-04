<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>register</title>
    </head>
    <body>
        <?php 
            error_reporting(E_ALL);
            
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
        ?>
        <h1>NORTHERN BLOG</h1>
        <div>
            <form action="register.php" method="post">
                <p>First Name:<input type="text" name="fname" required></p>
                <p>Last Name:<input type="text" name="lname" required></p>
                <p>Username: <input type="text" name="username" required></p>
                <p>Email: <input type="text" name="email" required></p>
                <p>Password: <input type="text" name="password" required></p>
                <p>Confirm Password: <input type="text" name="confirm_password" required></p>
                <button>Submit</button>
            </form>
        </div>
    </body>
</html>