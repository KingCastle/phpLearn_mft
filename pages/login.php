<?php include "../header.php";


if(isset($_POST['ok'])) {

    $username = ($_POST['username']);
    $password =sha1($_POST['password']);

    $query = mysqli_query($conn, "select * from t_user where username='$username' and password='$password' ");
    $count = mysqli_num_rows($query);


    if ($count >= 1) {
        $_SESSION['user'] = $username;
        header('location: index.php');
    } else {
        echo 'اطلاعات وارد ده اشتباه میباشد.';
    }
}
?>
    <!-- Section -->
    <section>
        <div class="wrapper">
            <div class="contact-us">
                <h3>ورود به حساب کاربری</h3>


                <div  class="right-posts auab-right-posts">
                    <div class="informations clearfix">

                            <form  action="" method="post">
                                <div class="inputs">
                                    <input type="text" name="username" value="" placeholder="نام کاربری :">
                                    <input type="text" name="password" value="" placeholder="کلمه عبور :">
                                    <input type="submit" name="ok" value="ارسال">
                                </div>

                            </form>




                    </div>
                </div>
    </section>
    <!-- Footer -->
<?php include '../footer.php'; ?>