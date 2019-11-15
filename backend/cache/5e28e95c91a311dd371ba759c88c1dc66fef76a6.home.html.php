<?php
/* Smarty version 3.1.33, created on 2019-11-14 11:16:03
  from 'C:\xampp\htdocs\Project\messageBoard\templates\home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcd29632a74c7_06637790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c496b61e72b1825e76d33018c44b770ad9e1765' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project\\messageBoard\\templates\\home.html',
      1 => 1573726562,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5dcd29632a74c7_06637790 (Smarty_Internal_Template $_smarty_tpl) {
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
                <span class="navbar-brand">Welcome to CY Message Board，Guest</span>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" id="test">
                    </li>
                    <li><a href="signUp.php">Sign up</a></li>
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
            </div>
                        <div class="message">
                <h3>Eric8787</h3>
                <h5>tttttttttttttttttttttttttt</h5>
                <h5 class="day">2019-11-13 17:03:11</h5>
            </div>
                        <div class="message">
                <h3>Brad</h3>
                <h5>999999999999999999999999</h5>
                <h5 class="day">2019-11-13 15:54:41</h5>
            </div>
                        <div class="message">
                <h3>Brad</h3>
                <h5>frrrrrrrrrrrrrrrrrrr</h5>
                <h5 class="day">2019-11-13 09:26:17</h5>
            </div>
                        <div class="message">
                <h3>Brad</h3>
                <h5>bbbbbbbbbssssssssssssssssssss</h5>
                <h5 class="day">2019-11-13 09:26:05</h5>
            </div>
                        <div class="message">
                <h3>Brad</h3>
                <h5>bbbbbbbbbbbbbbbbbbbbbbbbbbbb</h5>
                <h5 class="day">2019-11-13 09:25:43</h5>
            </div>
                        <div class="message">
                <h3>Brad</h3>
                <h5>vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv</h5>
                <h5 class="day">2019-11-13 09:24:45</h5>
            </div>
                        <div class="message">
                <h3>Brad</h3>
                <h5>ggggggggggggggggggggggggggggggggggggggg</h5>
                <h5 class="day">2019-11-13 09:24:23</h5>
            </div>
                        <div class="message">
                <h3>Brad</h3>
                <h5>qqaaaaaaaaaaaaaaaaaaaaaaaaa</h5>
                <h5 class="day">2019-11-13 09:23:52</h5>
            </div>
                        <div class="message">
                <h3>Brad</h3>
                <h5>qqqqqqqqqqqqqqqqqqwwwwwwwwwwwwwwwwwwwwww</h5>
                <h5 class="day">2019-11-13 09:18:13</h5>
            </div>
                        <div class="message">
                <h3>Brad</h3>
                <h5>1111111111111111111111111111111111111111111111111</h5>
                <h5 class="day">2019-11-13 09:16:11</h5>
            </div>
                        <div class="message">
                <h3>Brad</h3>
                <h5>222222222222</h5>
                <h5 class="day">2019-11-13 09:15:59</h5>
            </div>
                        <div class="message">
                <h3>Brad</h3>
                <h5>111111111111111111111</h5>
                <h5 class="day">2019-11-13 09:15:41</h5>
            </div>
                        <p></p>
        </div>
        <script>
            $(document).ready(function () {
                console.log('13');
                console.log('Brad');
                if ('{ $name }' != 'Guest') {
                    $("#test").append(`<a href="#">Sign out</a>`);
                    if ('' == 1) {
                       
                    } else if ('' == 0) {

                    } else {

                    }
                } else {
                    $("#test").append(`<a href="#">Sign in</a>`);
                }
            })
        </script>
</body>

</html><?php }
}
