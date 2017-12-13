<?php include "../header.php";

function g_CheckParameter($par)
{
        $Return1=stripslashes($par);
        $Return2=htmlspecialchars($Return1,ENT_QUOTES);
        $Return3=htmlentities($Return2, ENT_QUOTES, 'UTF-8');
        $Return4=strip_tags($Return3);
        return $Return4;
}


if (isset($_POST['ok'])) {




    $fullname = g_CheckParameter($_POST['fullname']);
    $username = g_CheckParameter($_POST['username']);
    $password = sha1($_POST['password']);
    $age = g_CheckParameter($_POST['age']);
    $gender = g_CheckParameter($_POST['gender']);

    if(!empty($username) && !empty($password)){

        $query = mysqli_query($conn, "select username from t_user where username='$username'");
        $count = mysqli_num_rows($query);

        if ($count==0) {

            $sql="
        insert into t_user(fullname,username,password,age,gender)
        VALUES ('$fullname','$username','$password','$age','$gender')
        ";
//            print_r($sql);exit;
            $register=mysqli_query($conn,$sql);



            if ($register){

              //  echo "<script> alert(\"ثبت نام  انجام شد\"); </script>";
                header("Location:login.php");
            }
        } else {
            echo "نام کاربری قبلا ثبت شده";
        }

    }else{
        echo "لطفا مقادر را ئر کنید";
    }



}


?>
    <!-- Section -->
    <section>
        <div class="wrapper">
            <div class="contact-us">
                <h3>ثبت نام</h3>

                <div class="right-posts auab-right-posts">
                    <div class="informations clearfix">

                        <form action="" method="post">
                            <div class="inputs">
                                <input type="text" name="fullname" value="" placeholder="نام و نام خانوادگی :">
                                <input type="text" name="username" value="" placeholder="نام کاربری :">
                                <input type="text" name="password" value="" placeholder="کلمه عبور :">
                                <input type="number" maxlength="2" name="age" value="" placeholder="سن :">
                                <select name="gender" class="select_opt">
                                    <option value="male">اقا</option>
                                    <option value="female">خانم</option>
                                </select>
                                <input type="submit" name="ok" value="ارسال">
                            </div>

                            <input type="submit" name="name" value="ثبت نام" class="hide-btn">
                        </form>


                    </div>
                </div>
    </section>
    <!-- Footer -->
<?php include '../footer.php'; ?>