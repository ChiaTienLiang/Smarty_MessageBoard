<?php
/* Smarty version 3.1.33, created on 2019-11-15 07:02:46
  from 'C:\xampp\htdocs\Project\messageBoard\templates\home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dce3f86cd4a39_43246214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c496b61e72b1825e76d33018c44b770ad9e1765' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project\\messageBoard\\templates\\home.html',
      1 => 1573796563,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5dce3f86cd4a39_43246214 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <title>CY Message Board</title>
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="../img/icon.ico" type="image/x-icon" />
    <img id="gotop" src="../img/gotop.png" style="position: fixed; bottom:80px; right:20px;">
    <img id="godown" src="../img/godown.png" style="position: fixed; bottom:20px; right:20px;">
    <style>
        .message {
            background-color: lightgray;
            padding: 30px;
            margin: 30px;
        }

        h1 {
            text-align: center;
        }

        .day {
            text-align: right;
        }

        textarea {
            resize: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="navbar-brand">Welcome to CY Message Board，Brad</span>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                                                <a href="logout.php">Sign out</a>
                                            </li>
                    <li><a href="../templates/signUp.html">Sign up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="jumbotron">
            <h1>CY Message Board</h1>
        </div>
        <div class="jumbotron" id="msg">
                        <div class="message">
                <h3>Brad</h3>
                <h5>123<br />
122<br />
133</h5>
                <h5 class="day">2019-11-14 10:02:54</h5>
                                                <button type="button" class="btn btn-info" id="change27"
                    onclick="change('27')">修改</button>
                <button type="button" class="btn btn-danger" id="del27"
                    onclick="del('27')">刪除</button>
                                            </div>
                        <div class="message">
                <h3>Eric8787</h3>
                <h5>tttttttttttttttttttttttttt</h5>
                <h5 class="day">2019-11-13 17:03:11</h5>
                                                <button type="button" class="btn btn-danger" id="del23"
                    onclick="del('23')">刪除</button>
                                            </div>
                        <div class="message">
                <h3>Brad</h3>
                <h5>999999999999999999999999</h5>
                <h5 class="day">2019-11-13 15:54:41</h5>
                                                <button type="button" class="btn btn-info" id="change20"
                    onclick="change('20')">修改</button>
                <button type="button" class="btn btn-danger" id="del20"
                    onclick="del('20')">刪除</button>
                                            </div>
                        <div class="message">
                <h3>Brad</h3>
                <h5>frrrrrrrrrrrrrrrrrrr</h5>
                <h5 class="day">2019-11-13 09:26:17</h5>
                                                <button type="button" class="btn btn-info" id="change15"
                    onclick="change('15')">修改</button>
                <button type="button" class="btn btn-danger" id="del15"
                    onclick="del('15')">刪除</button>
                                            </div>
                        <div class="message">
                <h3>Brad</h3>
                <h5>bbbbbbbbbssssssssssssssssssss</h5>
                <h5 class="day">2019-11-13 09:26:05</h5>
                                                <button type="button" class="btn btn-info" id="change14"
                    onclick="change('14')">修改</button>
                <button type="button" class="btn btn-danger" id="del14"
                    onclick="del('14')">刪除</button>
                                            </div>
                        <div class="message">
                <h3>Brad</h3>
                <h5>bbbbbbbbbbbbbbbbbbbbbbbbbbbb</h5>
                <h5 class="day">2019-11-13 09:25:43</h5>
                                                <button type="button" class="btn btn-info" id="change13"
                    onclick="change('13')">修改</button>
                <button type="button" class="btn btn-danger" id="del13"
                    onclick="del('13')">刪除</button>
                                            </div>
                        <div class="message">
                <h3>Brad</h3>
                <h5>vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv</h5>
                <h5 class="day">2019-11-13 09:24:45</h5>
                                                <button type="button" class="btn btn-info" id="change12"
                    onclick="change('12')">修改</button>
                <button type="button" class="btn btn-danger" id="del12"
                    onclick="del('12')">刪除</button>
                                            </div>
                        <div class="message">
                <h3>Brad</h3>
                <h5>ggggggggggggggggggggggggggggggggggggggg</h5>
                <h5 class="day">2019-11-13 09:24:23</h5>
                                                <button type="button" class="btn btn-info" id="change11"
                    onclick="change('11')">修改</button>
                <button type="button" class="btn btn-danger" id="del11"
                    onclick="del('11')">刪除</button>
                                            </div>
                        <div class="message">
                <h3>Brad</h3>
                <h5>qqaaaaaaaaaaaaaaaaaaaaaaaaa</h5>
                <h5 class="day">2019-11-13 09:23:52</h5>
                                                <button type="button" class="btn btn-info" id="change10"
                    onclick="change('10')">修改</button>
                <button type="button" class="btn btn-danger" id="del10"
                    onclick="del('10')">刪除</button>
                                            </div>
                        <div class="message">
                <h3>Brad</h3>
                <h5>qqqqqqqqqqqqqqqqqqwwwwwwwwwwwwwwwwwwwwww</h5>
                <h5 class="day">2019-11-13 09:18:13</h5>
                                                <button type="button" class="btn btn-info" id="change9"
                    onclick="change('9')">修改</button>
                <button type="button" class="btn btn-danger" id="del9"
                    onclick="del('9')">刪除</button>
                                            </div>
                        <div class="message">
                <h3>Brad</h3>
                <h5>1111111111111111111111111111111111111111111111111</h5>
                <h5 class="day">2019-11-13 09:16:11</h5>
                                                <button type="button" class="btn btn-info" id="change8"
                    onclick="change('8')">修改</button>
                <button type="button" class="btn btn-danger" id="del8"
                    onclick="del('8')">刪除</button>
                                            </div>
                        <div class="message">
                <h3>Brad</h3>
                <h5>222222222222</h5>
                <h5 class="day">2019-11-13 09:15:59</h5>
                                                <button type="button" class="btn btn-info" id="change7"
                    onclick="change('7')">修改</button>
                <button type="button" class="btn btn-danger" id="del7"
                    onclick="del('7')">刪除</button>
                                            </div>
                        <div class="message">
                <h3>Brad</h3>
                <h5>111111111111111111111</h5>
                <h5 class="day">2019-11-13 09:15:41</h5>
                                                <button type="button" class="btn btn-info" id="change6"
                    onclick="change('6')">修改</button>
                <button type="button" class="btn btn-danger" id="del6"
                    onclick="del('6')">刪除</button>
                                            </div>
                        <p></p>
        </div>
        <script>
            $(document).ready(function () {
                // console.log('13');

            })
            function del(e) {
                console.log(e);
                $.ajax({
                    type: "POST", //傳送方式
                    url: "delMsg.php", //傳送目的地
                    data: {
                        id: e
                    },
                    success: function (res) {
                        location.reload();
                        // console.log(res);
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            }
            $("#gotop").click(function () {
                $("html").animate({
                    scrollTop: 0
                }, 1000);
            });
            $("#godown").click(function () {
                last = $("body").height() - $(window).height() //滾到最底
                $("html").animate({
                    scrollTop: last
                }, 1000);
            });
        </script>
</body>

</html><?php }
}
