function check_empty() {
    let userName = '';
    userName = document.getElementById("userName").value;
    if (userName == '') {
        alert("وارد کردن نام کاربری اجباریست")
    } else {
        let r = confirm("آیا از صحت اطلاعات وارد شده اطمینان دارید؟");
        if (r == true) {
            document.register.submit();
        }
    }
}