<?php
include("header.php")
    ?>

<script src="../public/js/index.js"></script>

<br>
<form name="register" action="./controller/action_register.php" method="post">
    <table class="mainTable">
        <tr>
            <td style="width: 40%;">نام<span class="star">*</span></td>
            <td style="width: 60%;"><input type="text" id="realName" name="realName"></td>
        </tr>
        <tr>
            <td>نام کاربری<span class="star">*</span></td>
            <td><input type="text" style="text-align: left;" id="userName" name="userName"></td>
        </tr>
        <tr>
            <td>کلمه عبور<span class="star">*</span></td>
            <td><input type="password" style="text-align: left;" id="password" name="password"></td>
        </tr>
        <tr>
            <td>تکرار کلمه عبور<span class="star">*</span></td>
            <td><input type="password" style="text-align: left;" id="repassword" name="repassword"></td>
        </tr>
        <tr>
            <td>پست الکترونیکی<span class="star">*</span></td>
            <td><input type="text" style="text-align: left;" id="email" name="email"></td>
        </tr>

        <tr>
            <td><br><br></td>
            <td>
                <input type="button" value="ثبت نام" onclick="check_empty()" class="btn">
                <input type="reset" value="جدید" class="btn">
            </td>
        </tr>
    </table>
</form>

<?php
include("footer.php")
    ?>