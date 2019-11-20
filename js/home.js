$(document).ready(function () {
    $("#addMsg").click(function () {
        if (
            $("#Msg").val() != ""
        ) {
            $.ajax({
                type: "POST",
                url: "../MsgRouter.php",
                data: {
                    Msg: $("#Msg").val(),
                    todo: 'addMsg',
                },
                success: function (res) {
                    res = JSON.parse(res);
                    if (res === true) {
                        Swal.fire({
                            // position: 'top',
                            icon: 'success',
                            title: '您的留言已送出',
                            showConfirmButton: false,
                            timer: 1500
                        }).then(function () {
                            window.location.href = "../backend/home_index.php"
                        });
                    } else {
                        Swal.fire({
                            // position: 'top',
                            icon: 'error',
                            title: '發生未預期的錯誤!',
                        })
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        } else {
            Swal.fire({
                // position: 'top',
                icon: 'error',
                title: '不能為空',
            })
        }
    });

    /**
    * 登出
    */
    $("#logout").click(function () {
        $.ajax({
            type: "POST", //傳送方式
            url: "../MemberRouter.php", //傳送目的地
            data: {
                todo: 'logout',
            },
            success: function (res) {
                res = JSON.parse(res);
                if (res === true) {
                    let timerInterval
                    Swal.fire({
                        title: '頁面將於3秒後進行跳轉',
                        html: '<b></b>',
                        timer: 3000,
                        timerProgressBar: true,
                        onBeforeOpen: () => {
                            Swal.showLoading()
                            timerInterval = setInterval(() => {
                                Swal.getContent().querySelector('b')
                                    .textContent = parseInt(Math
                                        .ceil(Swal.getTimerLeft() /
                                            1000))
                            }, 100)
                        },
                        onClose: () => {
                            clearInterval(timerInterval)
                            window.location.href = "../backend/home_index.php"
                        }
                    }).then((result) => {
                        if (
                            /* Read more about handling dismissals below */
                            result.dismiss === Swal.DismissReason.timer
                        ) {
                            window.location.href = "../backend/home_index.php"
                        }
                    })
                }
                else {
                    Swal.fire({
                        // position: 'top',
                        icon: 'error',
                        title: '發生無預期的錯誤!',
                    })
                }
            },
            error: function (error) {
                // console.log(error);
            }
        });
    });
})

/**
* 刪除留言
*/
function del(e) {
    Swal.fire({
        title: '確定刪除該留言嗎?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '是',
        cancelButtonText: '取消',
    }).then((result) => {
        if (result.value == true) { //sweetalert2 彈窗選確定
            $.ajax({
                type: "POST", //傳送方式
                url: "../MsgRouter.php", //傳送目的地
                data: {
                    id: e,
                    todo: 'delMsg',
                },
                success: function (res) {
                    res = JSON.parse(res);
                    if (res === true) {
                        Swal.fire({
                            // position: 'top',
                            icon: 'success',
                            title: '留言已刪除',
                            showConfirmButton: false,
                            timer: 1500
                        }).then(function () {
                            window.location.href = "../backend/home_index.php"
                        });
                    } else {
                        Swal.fire({
                            // position: 'top',
                            icon: 'error',
                            title: '刪除失敗!',
                        })
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        }
    })
}

/**
* 修改留言
*/
function change(e) {
    temp = $("#txt" + e).html();
    $("#fix" + e).hide();
    $("#txt" + e).html("");
    $("#txt" + e).append('<textarea class="form-control" style="width:100%" rows="7" id="txtMsg">' + temp + '</textarea><br>');
    $("#change" + e).hide();
    $("#del" + e).hide();
    $("#txt" + e).append('<button type="button" class="btn btn-danger pull-right" onclick="cancel(' + e + ')">取消</button><button type="button" class="btn btn-success pull-right" onclick="changeOk(' + e + ')">確認</button>');
}

/**
* 確認修改
*/
function changeOk(e) {
    $.ajax({
        type: "POST", //傳送方式
        url: "../MsgRouter.php", //傳送目的地
        data: {
            todo: 'changMsg',
            id: e,
            Msg: $("#txtMsg").val()
        },
        success: function (res) {
            res = JSON.parse(res);
            if (res === true) {
                Swal.fire({
                    // position: 'top',
                    icon: 'success',
                    title: '送出',
                    showConfirmButton: false,
                    timer: 1500
                }).then(function () {
                    window.location.href = "../backend/home_index.php"
                });
            } else {
                Swal.fire({
                    // position: 'top',
                    icon: 'error',
                    title: '修改失敗!',
                })
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
}

/**
* 取消修改
*/
function cancel(e) {
    $("#txt" + e).html("");
    $("#txt" + e).append(temp);
    $("#change" + e).show();
    $("#del" + e).show();
    $("#fix" + e).show();
}

// $("#gotop").click(function () {
    //     $("html").animate({
    //         scrollTop: 0
    //     }, 1000);
    // });
    // $("#godown").click(function () {
    //     last = $("body").height() - $(window).height() //滾到最底
    //     $("html").animate({
    //         scrollTop: last
    //     }, 1000);
    // });