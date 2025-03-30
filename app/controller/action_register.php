<?php
include("../header.php");

if (
    isset($_POST['realName']) && !empty($_POST['realName']) &&
    isset($_POST['userName']) && !empty($_POST['userName']) &&
    isset($_POST['password']) && !empty($_POST['password']) &&
    isset($_POST['repassword']) && !empty($_POST['repassword']) &&
    isset($_POST['email']) && !empty($_POST['email'])
) {
    $realName = $_POST['realName'];
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $email = $_POST['email'];
} else {
    exit('برخی از فیلدها مقداردهی نشده است');
}

if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    exit('پست الکترونیکی وارد نشده است');
}

$link = mysqli_connect("localhost", "root", "", "shop_db");
if (mysqli_connect_errno()) {
    exit("خطای رخ داده به شرح زیر است: " . mysqli_connect_error());
}

$query = "INSERT INTO users (realName, userName, password, email, type) VALUES 
('$realName', '$userName', '$password', '$email', '0')";
if (mysqli_query($link, $query) === true) {
    echo ("<p style='color: green;'><b>" . $realName . "عضویت شما با نام کاربری" . $userName . "در فروشگاه با موفقیت انجام شد" . "</p>");
} else {
    echo("<p style='color: red;'><b>عضویت شما در فروشگاه انجام نشد</b></p>");
}
mysqli_close($link);
?>
<div dir="ltr" style="text-align: left;">
    <?php
    echo ("realName: " . $realName . "<br>");
    echo ("userName: " . $userName . "<br>");
    echo ("password: " . $password . "<br>");
    echo ("repassword: " . $repassword . "<br>");
    echo ("email: " . $email . "<br>");
    ?>
</div>
<?php
include("../footer.php");
?>