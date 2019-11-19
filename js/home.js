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
                    if (res === 'true') {
                        Swal.fire({
                            position: 'top',
                            icon: 'success',
                            title: '您的留言已送出',
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
                title: '不能為空',
            })
        }
    });

    /*
    ** 登出
    */
    $("#logout").click(function () {
        $.ajax({
            type: "POST", //傳送方式
            url: "../MemberRouter.php", //傳送目的地
            data: {
                todo: 'logout',
            },
            success: function (res) {
                if (res === 'true')
                    console.log(res);
                window.location.href = "../backend/home_index.php"
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
})

/*
** 刪除留言
*/
function del(e) {
    // console.log(e);
    $.ajax({
        type: "POST", //傳送方式
        url: "../MsgRouter.php", //傳送目的地
        data: {
            id: e,
            todo: 'delMsg',
        },
        success: function (res) {
            location.reload();
        },
        error: function (error) {
            console.log(error);
        }
    });
}

/*
** 修改留言
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

/*
** 確認修改
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
            window.location.href = "../backend/home_index.php"
        },
        error: function (error) {
            console.log(error);
        }
    });
}

/*
** 取消修改
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