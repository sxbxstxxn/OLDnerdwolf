<?php
/* Smarty version 3.1.30, created on 2017-08-01 14:48:06
  from "/www/htdocs/w0131f27/nerdwolf.sebastian-christoph.de/templates/forms/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59807886c3d470_28844914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffefe2f8361b001d767e861a0cbbe3f113cbdc9d' => 
    array (
      0 => '/www/htdocs/w0131f27/nerdwolf.sebastian-christoph.de/templates/forms/login.tpl',
      1 => 1501591682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59807886c3d470_28844914 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
	<form class="logoutform col-md-12 nopadding" method="post">
		<div class="col-md-10"><p class="welcometext">Hello <?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
!</p></div>
		<div class="hidden">
			<input type="hidden" name="action" value="logout">
			<input type="hidden" name="currentPage" value="<?php echo $_SERVER['REQUEST_URI'];?>
">
		</div>
		<div class="col-md-2"><button class="logbtn" type="submit">Logout</button></div>
	</form>
<?php } else { ?>
	<form class="loginform col-md-12 nopadding" method="post">
		<div class="col-md-5"><input type="text" placeholder="Username" name="username"></div>
		<div class="col-md-5"><input type="password" placeholder="Password" name="password"></div>
		<div class="hidden">
			<input type="hidden" name="action" value="login">
			<input type="hidden" name="currentPage" value="<?php echo $_SERVER['REQUEST_URI'];?>
">
		</div>
		<div class="col-md-2"><button class="logbtn" type="submit">Login</button></div>
	</form>
<?php }
}
}
