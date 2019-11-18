$(document).ready(function () {
    var emailR = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]+(\.[a-zA-Z]+)?$/;
    var passwordR = /^[a-zA-Z0-9]{8,12}$/;
    $("#login").click(function () {
      if (
        emailR.test($("#email").val()) &&
        passwordR.test($("#password").val())
      ) {
        $.ajax({
          type: "POST", //傳送方式
          url: "../backend/loginCheck.php", //傳送目的地
          data: {
            email: $("#email").val(),
            password: $("#password").val()
          },
          success: function (res) {
            console.log(res);
            if (res === 'false') {
              Swal.fire({
                position: 'top',
                icon: 'error',
                title: '帳號密碼錯誤!',
              })
            } else if (res === 'true') {

              Swal.fire({
                position: 'top',
                icon: 'success',
                title: '登入成功',
                showConfirmButton: false,
                timer: 1500
              }).then(function () {
                window.location.href = "../backend/home_index.php"
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

  });