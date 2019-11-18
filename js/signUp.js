
$(document).ready(function () {
    $("#btnOK").click(function () {
        console.log('test');
        var emailR = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]+(\.[a-zA-Z]+)?$/;
        var passwordR = /^[a-zA-Z0-9]{8,12}$/;
        if (
            $("#name").val() != "" &&
            emailR.test($("#email").val()) &&
            passwordR.test($("#password").val())
        ) {
            $.ajax({
                type: "POST", //傳送方式
                url: "../backend/signUpCheck.php", //傳送目的地
                data: {
                    name: $("#name").val(),
                    email: $("#email").val(),
                    password: $("#password").val()
                },
                success: function (res) {
                    // console.log(res);
                    if (res === 'false') {
                        Swal.fire({
                            position: 'top',
                            icon: 'error',
                            title: '該Email已被註冊',
                        })
                    } else if (res === 'true') {
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

