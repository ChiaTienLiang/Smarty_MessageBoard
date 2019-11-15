<?php
/* Smarty version 3.1.33, created on 2019-11-14 11:16:03
  from 'C:\xampp\htdocs\Project\messageBoard\templates\home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcd2963297b12_16382197',
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
  'includes' => 
  array (
  ),
),false)) {
function content_5dcd2963297b12_16382197 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2012572475dcd296324e4c2_78661934';
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
    <title>CY Message Board</title>
    <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
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
                <span class="navbar-brand">Welcome to CY Message Board，<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span>
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
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
            <div class="message">
                <h3><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</h3>
                <h5><?php echo $_smarty_tpl->tpl_vars['value']->value['message'];?>
</h5>
                <h5 class="day"><?php echo $_smarty_tpl->tpl_vars['value']->value['update_at'];?>
</h5>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <p></p>
        </div>
        <?php echo '<script'; ?>
>
            $(document).ready(function () {
                console.log('<?php echo count($_smarty_tpl->tpl_vars['res']->value);?>
');
                console.log('<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
');
                if ('{ $name }' != 'Guest') {
                    $("#test").append(`<a href="#">Sign out</a>`);
                    if ('<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
' == 1) {
                       
                    } else if ('<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
' == 0) {

                    } else {

                    }
                } else {
                    $("#test").append(`<a href="#">Sign in</a>`);
                }
            })
        <?php echo '</script'; ?>
>
</body>

</html><?php }
}
