$(document).ready(function () {
    $("#btnOK").click(function () {
        var emailR = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]+(\.[a-zA-Z]+)?$/;
        var passwordR = /^[a-zA-Z0-9]{8,12}$/;
        if (
            $("#name").val() != "" &&
            emailR.test($("#email").val()) &&
            passwordR.test($("#password").val())
        ) {
            $.ajax({
                type: "POST",
                url: "../MemberContro.php",
                data: {
                    todo: 'signUp',
                    name: $("#name").val(),
                    email: $("#email").val(),
                    password: $("#password").val()
                },
                success: function (res) {
                    res = JSON.parse(res);
                    if (res === true) {
                        Swal.fire({
                            position: 'top',
                            icon: 'success',
                            title: '成功加入會員',
                            showConfirmButton: false,
                            timer: 1000
                        })
                            .then(function () {
                                window.location.href = "../templates/login.html"
                            });
                    } else {
                        Swal.fire({
                            position: 'top',
                            icon: 'error',
                            title: '該Email已被註冊',
                        })
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        } else {
            Swal.fire({
                position: 'top',
                icon: 'error',
                title: '資料輸入格式錯誤',
            })
        }
    });
})
