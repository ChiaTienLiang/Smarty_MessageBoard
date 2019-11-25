<?php
/* Smarty version 3.1.33, created on 2019-11-25 03:21:00
  from 'C:\xampp\htdocs\Smarty_MessageBoard\templates\home.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddb3a8c9f4320_07272545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f65df1c68d9de78dfc79e3a79d5760fbbd15b407' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Smarty_MessageBoard\\templates\\home.html',
      1 => 1574648445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddb3a8c9f4320_07272545 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <?php echo '<script'; ?>
 src="../js/home.js"><?php echo '</script'; ?>
>
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
                <span class="navbar-brand">Welcome to CY Message Board，<?php ob_start();
echo $_smarty_tpl->tpl_vars['name']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</span>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['name']->value;
$_prefixVariable2 = ob_get_clean();
ob_start();
echo $_prefixVariable2;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 != "Guest") {?>
                    <li class="active"> <a href="#" id="logout">Sign out</a></li>
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
            <h1>CY&ensp;Message&ensp;Board</h1>
        </div>
        <div class="jumbotron" id="allmsg">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
            <div class="message" id="message<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
">
                <span class="h3"><?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['name'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</span>
                <span class="day h5 pull-right"><?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['create_at'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</span>
                <hr>
                <div>
                    <pre id="txt<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['message'];
$_prefixVariable7 = ob_get_clean();
echo $_prefixVariable7;?>
</pre>
                </div>
                <!-- <?php if ($_smarty_tpl->tpl_vars['value']->value['create_at'] != $_smarty_tpl->tpl_vars['value']->value['update_at']) {?> -->
                <div id="fix<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable8 = ob_get_clean();
echo $_prefixVariable8;?>
">
                        <span class="day h5 pull-right"></span>
                    <!-- <span class="day h5 pull-right">修改於<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['update_at'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>
</span> -->
                </div>
                <!-- <?php }?> -->
                <br>
                <?php if ($_smarty_tpl->tpl_vars['level']->value == 1) {?>
                <?php if ($_smarty_tpl->tpl_vars['memberId']->value == $_smarty_tpl->tpl_vars['value']->value['memberId']) {?>
                <button type="button" class="btn btn-info" id="change<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
"
                    onclick="change('<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable11 = ob_get_clean();
echo $_prefixVariable11;?>
')">修改</button>
                <button type="button" class="btn btn-danger" id="del<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable12 = ob_get_clean();
echo $_prefixVariable12;?>
"
                    onclick="del('<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable13 = ob_get_clean();
echo $_prefixVariable13;?>
')">刪除</button>
                <?php } else { ?>
                <button type="button" class="btn btn-danger" id="del<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable14 = ob_get_clean();
echo $_prefixVariable14;?>
"
                    onclick="del('<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable15 = ob_get_clean();
echo $_prefixVariable15;?>
')">刪除</button>
                <?php }?>
                <?php } elseif ($_smarty_tpl->tpl_vars['level']->value == 0) {?>
                <?php if ($_smarty_tpl->tpl_vars['memberId']->value == $_smarty_tpl->tpl_vars['value']->value['memberId']) {?>
                <button type="button" class="btn btn-info" id="change<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable16 = ob_get_clean();
echo $_prefixVariable16;?>
"
                    onclick="change('<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable17 = ob_get_clean();
echo $_prefixVariable17;?>
')">修改</button>
                <button type="button" class="btn btn-danger" id="del<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable18 = ob_get_clean();
echo $_prefixVariable18;?>
"
                    onclick="del('<?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable19 = ob_get_clean();
echo $_prefixVariable19;?>
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
        <div>
            <ul class="pagination">
                <!-- <li><a href="#">&laquo;</a></li> -->
                <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['page']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['page']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                <?php if ($_smarty_tpl->tpl_vars['pagecss']->value == $_smarty_tpl->tpl_vars['foo']->value) {?>
                <li><a class="active" href="?page=<?php ob_start();
echo $_smarty_tpl->tpl_vars['foo']->value;
$_prefixVariable20 = ob_get_clean();
echo $_prefixVariable20;?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['foo']->value;
$_prefixVariable21 = ob_get_clean();
echo $_prefixVariable21;?>
</a></li>
                <?php } else { ?>
                <li><a class="disabled" href="?page=<?php ob_start();
echo $_smarty_tpl->tpl_vars['foo']->value;
$_prefixVariable22 = ob_get_clean();
echo $_prefixVariable22;?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['foo']->value;
$_prefixVariable23 = ob_get_clean();
echo $_prefixVariable23;?>
</a></li>
                <?php }?>
                <?php }
}
?>
                <!-- <li><a href="#">&raquo;</a></li> -->
            </ul>
        </div>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['name']->value;
$_prefixVariable24 = ob_get_clean();
ob_start();
echo $_prefixVariable24;
$_prefixVariable25 = ob_get_clean();
if ($_prefixVariable25 != "Guest") {?>
        <div class="jumbotron p-3 p-md-5 ">
            <div>
                <h1 class="display-4 font-italic">input your message here</h1>
                <div class="form-group">
                    <textarea class="form-control" rows="7" id="Msg"></textarea>
                </div>
            </div>
            <button class="btn btn-lg btn-default btn-block subBtn" type="button" id="addMsg">送出</button>
        </div>
        <?php }?>
    </div>
</body>

</html><?php }
}
