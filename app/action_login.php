<?php
include("./header.php");
if (
    isset($_POST["userName"]) && !empty($_POST["userName"]) &&
    isset($_POST["password"]) && !empty($_POST["password"])
) {
    $userName = $_POST["userName"];
    $password = $_POST["password"];
} else {
    echo ('برخی فیلد ها مقداردهی نشده است');
}

$link = mysqli_connect("localhost", "root", "", "shop_db");
if (mysqli_connect_errno()) {
    exit("خطای رخ داده به شرح زیر است: " . mysqli_connect_error());
}

$query = "INSERT INTO users (userName, password) VALUES ('$userName', '$password')";
$result = mysqli_query($link, $query);
// $row = mysqli_fetch_array($result);
// if ($row) {
//     echo("<p style='color: green'><b>به فروشگاه ایرانیان خوش امدید (" . $row['realName'] . ")</b></p>");
// } else {
//     echo("نام کاربری یا رمز عبور یافت نشد");
// }

if (mysqli_query($link, $query) === true) {
    echo ("<p style='color: green;'><b>" . $userName . "در فروشگاه با موفقیت انجام شد" . "</p>");
} else {
    echo ("<p style='color: red;'><b>عضویت شما در فروشگاه انجام نشد</b></p>");

}
mysqli_close($link);
?>

<?php
include("./footer.php");
?>