<?php
/* Smarty version 3.1.33, created on 2019-11-18 03:58:08
  from 'C:\xampp\htdocs\Project\messageBoard\templates\home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd208c039d6b4_48242210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c496b61e72b1825e76d33018c44b770ad9e1765' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Project\\messageBoard\\templates\\home.html',
      1 => 1574045863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd208c039d6b4_48242210 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
    <img id="gotop" src="../img/gotop.png" style="position: fixed; bottom:80px; right:20px;">
    <img id="godown" src="../img/godown.png" style="position: fixed; bottom:20px; right:20px;">
    <?php echo '<script'; ?>
 src="../js/home.js"><?php echo '</script'; ?>
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

        pre {
            background-color: lightgray;
            border: 0;
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
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['name']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 != "Guest") {?>
                    <li class="active"> <a href="logout.php">Sign out</a></li>
                    <?php } else { ?>
                    <li class="active"><a href="../templates/login.html">Sign in</a></li>
                    <li><a href="../templates/signUp.html">Sign up</a></li>
                    <?php }?>
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
                <span class="h3"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</span>
                <span class="day h5 pull-right"><?php echo $_smarty_tpl->tpl_vars['value']->value['update_at'];?>
</span>
                <hr>
                <div>
                    <pre id="txt<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['message'];?>
</pre>
                </div>
                <br>
                <?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?>
                <?php if ($_smarty_tpl->tpl_vars['memberId']->value == $_smarty_tpl->tpl_vars['value']->value['memberId']) {?>
                <button type="button" class="btn btn-info" id="change<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"
                    onclick="change('<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
')">修改</button>
                <button type="button" class="btn btn-danger" id="del<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"
                    onclick="del('<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
')">刪除</button>
                <?php } else { ?>
                <button type="button" class="btn btn-danger" id="del<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"
                    onclick="del('<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
')">刪除</button>
                <?php }?>
                <?php } elseif ($_smarty_tpl->tpl_vars['level']->value == 0) {?>
                <?php if ($_smarty_tpl->tpl_vars['memberId']->value == $_smarty_tpl->tpl_vars['value']->value['memberId']) {?>
                <button type="button" class="btn btn-info" id="change<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"
                    onclick="change('<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
')">修改</button>
                <button type="button" class="btn btn-danger" id="del<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"
                    onclick="del('<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
')">刪除</button>
                <?php }?>
                <?php }?>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <p></p>
        </div>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['name']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 != "Guest") {?>
        <div class="jumbotron p-3 p-md-5 ">
            <div>
                <h1 class="display-4 font-italic">input your message here</h1>
                <div class="form-group">
                    <textarea class="form-control" style="width:100%" rows="7" id="Msg"></textarea>
                </div>
            </div>
            <button class="btn btn-lg  btn-default btn-block" type="button" id="addMsg"
                style="background-color: white;width:50%;margin:auto;">送出</button>
        </div>
        <?php }?>
    </div>
</body>

</html><?php }
}
