<?php
/* Smarty version 3.1.33, created on 2019-11-14 07:48:48
  from 'C:\xampp\htdocs\Project\messageBoard\templates\home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dccf8d07332f2_96678377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '411820c3d0a2fc49457ae1bd17ddc08a570b1130' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project\\messageBoard\\templates\\home.html',
      1 => 1573714126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dccf8d07332f2_96678377 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '16527750875dccf8d06f5270_83035970';
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/sweetalert2@9"><?php echo '</script'; ?>
>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="img/icon.ico" type="image/x-icon" />
    <?php echo '<script'; ?>
 type="text/javascript" src="home.js"><?php echo '</script'; ?>
>
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
                <span class="navbar-brand">Welcome to <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
，<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" id="test">
                        <!-- <?php echo '<script'; ?>
>
                            if ('<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
' != 'Guest') {
                                $("#test").append('<a href="logout.php">Sign out');
                            } else {
                                $("#test").append('<a href="login.php">Sign in');
                            }
                        <?php echo '</script'; ?>
> -->
                    </li>
                    <li><a href="signUp.php">Sign up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">

        <div class="jumbotron">
            <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
        </div>

</body>

</html><?php }
}
