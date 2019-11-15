<?php
/* Smarty version 3.1.33, created on 2019-11-14 07:32:32
  from 'C:\xampp\htdocs\Project\messageBoard\templates\home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dccf500605614_03857253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b72f775f30552ef11caba2c0faaf0229f1beed2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project\\messageBoard\\templates\\home.html',
      1 => 1573712629,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5dccf500605614_03857253 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="icon" href="img/icon.ico" type="image/x-icon" />
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
                <ul class="nav navbar-nav navbar-right" >
                    <li class="active" id="test">
                        <script>
                            if ('Guest' != 'Guest') {
                                $("#test").append('<a href="logout.php">Sign out');
                            } else {
                                $("#test").append('<a href="login.php">Sign in');
                            }
                        </script>
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


        <script>
            $(document).ready(function () {
                // if ({ $name } != 'Guest') {
                //     $("#test").append(`<li><a href="#">Sign out</a></li>`);
                // } else {
                //     $("#test").append(`<li><a href="#">Sign in</a></li>`);
                // }

            });
        </script>


</body>

</html><?php }
}
