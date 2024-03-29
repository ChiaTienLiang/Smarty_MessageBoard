<?php
/* Smarty version 3.1.33, created on 2019-11-15 06:46:13
  from 'C:\xampp\htdocs\Project\messageBoard\templates\home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dce3ba58de1a9_36722826',
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
  'includes' => 
  array (
  ),
),false)) {
function content_5dce3ba58de1a9_36722826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '18388649425dce3ba58a7a62_29598806';
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
                <span class="navbar-brand">Welcome to CY Message Board，<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['name']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 != "Guest") {?>
                        <a href="logout.php">Sign out</a>
                        <?php } else { ?>
                        <a href="../templates/login.html">Sign in</a>
                        <?php }?>
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
                <?php }?>
                <?php }?>
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
                // console.log('<?php echo count($_smarty_tpl->tpl_vars['res']->value);?>
');

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
        <?php echo '</script'; ?>
>
</body>

</html><?php }
}
