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

    $query    = "SELECT * FROM hoteluser WHERE username='$username'
                 AND password='" . md5($password) . "'";
    $result = mysqli_query($con, $query) or die (mysqli_error($con));
    $rows = mysqli_num_rows($result);

    if ($rows == 1) 
    {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
    } else 
    {
        $msg="Username or password is wrong";
    }
}  

include('header.php'); 
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 mb-4">
            <form class="form" action="<?php echo $_server["PHP_SELF"]; ?>" method="post" name="login">
                <h1 class="login-title">Login</h1>
                <p class="link text-danger pb-2"><?php echo $msg; ?></p>
                <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
                <input type="password" class="login-input" name="password" placeholder="Password"/>
                <input type="submit" value="Login" name="submit" class="login-button"/>
                <p class="link pt-2">Don't have an account? <a href="registration.php">Registration Now</a></p>
            </form>
        </div>
    </div>
</div>

<?php 
include('footer.php'); 
$msg='';

?>