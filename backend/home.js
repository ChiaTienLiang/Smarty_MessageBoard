$(document).ready(function () {
    // console.log("{ $res }");
    // let res = {$res};
    // res = JSON.parse(res);
    if ('{ $name }' != 'Guest') {
        $("#test").append(`<a href="#">Sign out</a>`);
        if ('{$level}' == 1) {
            // $.each(function () {
            //     if (memberId == res[i].memberId) {
            //         $("#msg").append(`<div class="message"><span class="h3">${'{$value.name}'}</span><span class="day h5 pull-right">${'{$value.update_at}'}</span><hr><div id="txt${'{$value.id}'}">${'{$value.message}'}</div><br>
            //         <button type="button" class="btn btn-info" id="change${'{$value.id}'}" onclick="change(${'{$value.id}'}">修改</button>
            //         <button type="button" class="btn btn-danger" id="del${'{$value.id}'}" onclick="del(${'{$value.id}'})">刪除</button>
            //          </div><p></p>`);
            //     }
            //     //  else {
            //     //     $("#msg").append(`<div class="message"><span class="h3">${res[i].name}</span><span class="day h5 pull-right">${res[i].create_at}</span><hr><div id="txt${res[i].id}">${res[i].message}</div><br>
            //     //     <button type="button" class="btn btn-danger" onclick="del(${res[i].id})">刪除</button>
            //     //     </div><p></p>`);
            //     // }
            // })
            // for (let i = 0; i < res.length; i++) {
            //     if (memberId == res[i].memberId) {
            //         $("#msg").append(`<div class="message"><span class="h3">${res[i].name}</span><span class="day h5 pull-right">${res[i].create_at}</span><hr><div id="txt${res[i].id}">${res[i].message}</div><br>
            //         <button type="button" class="btn btn-info" id="change${res[i].id}" onclick="change(${res[i].id})">修改</button>
            //         <button type="button" class="btn btn-danger" id="del${res[i].id}" onclick="del(${res[i].id})">刪除</button>
            //          </div><p></p>`);
            //     } else {
            //         $("#msg").append(`<div class="message"><span class="h3">${res[i].name}</span><span class="day h5 pull-right">${res[i].create_at}</span><hr><div id="txt${res[i].id}">${res[i].message}</div><br>
            //         <button type="button" class="btn btn-danger" onclick="del(${res[i].id})">刪除</button>
            //         </div><p></p>`);
            //     }
            // }

        } else if ('{$level}' == 0) {

        } else {

        }





    } else {
        $("#test").append(`<a href="#">Sign in</a>`);
    }
});