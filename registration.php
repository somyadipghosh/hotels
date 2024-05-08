<?php 
session_start();
error_reporting(0);
include ('db.php');
$msg="";

if (isset($_POST['submit'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);

    $query    = "INSERT into hoteluser (username, password, email)
    VALUES ('$username', '" . md5($password) . "', '$email')";
    $result   = mysqli_query($con, $query);
        if ($result) {
            $msg='Registration sucessful. <p class="link pt-2">You can now <a href="login.php">Login</a></p>';
        } else {
            $msg="";
        }
}  

include('header.php'); 
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 mb-4">
            <form class="form" action="<?php echo $_server["PHP_SELF"]; ?>" method="post" name="login">
                <h1 class="login-title">Register your account</h1>
                <p class="link text-danger pb-2"><?php echo $msg; ?></p>
                <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
                <input type="password" class="login-input" name="password" placeholder="Password"/>
                <input type="text" class="login-input" name="email" placeholder="Email" autofocus="true"/>
                <input type="submit" value="Submit" name="submit" class="login-button"/>
            </form>
        </div>
    </div>
</div>

<?php 
include('footer.php'); 
$msg='';

?>