<?php
include("../header.php");
?>
<style>
    @font-face {
        font-family: Vazir;
        src: url('../../public/fonts/Vazir-Medium.woff');
    }

    * {
        font-family: Vazir;
        direction: rtl;
    }

    .star {
        color: red;
    }

    .mainTable {
        width: 50%;
        border: 0;
        margin-left: auto;
        margin-right: auto;
    }
</style>
<br>
<form name="login" action="../action_login.php" method="post">
    <table class="mainTable">
        <tr>
            <td style="width: 40%;">نام کاربری<span class="star">*</span></td>
            <td style="width: 60%;"><input type="text" id="userName" name="userName"></td>
        </tr>
        <tr>
            <td>کلمه عبور<span class="star">*</span></td>
            <td><input type="password" style="text-align: left;" id="password" name="password"></td>
        </tr>
        <tr>
            <td><br><br></td>
            <td>
                <input type="submit" value="ورود" onclick="check_empty()" class="btn">
                <input type="reset" value="جدید" class="btn">
            </td>
        </tr>

    </table>
</form>
<?php
include("../footer.php");
?>