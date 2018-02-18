<?php
/* Smarty version 3.1.30, created on 2018-02-15 14:10:37
  from "/www/htdocs/w0131f27/nerdwolf.eu/templates/forms/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8586cd39d989_93465025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ead5c5adff664469f6b16804d5330086f6af83ee' => 
    array (
      0 => '/www/htdocs/w0131f27/nerdwolf.eu/templates/forms/login.tpl',
      1 => 1518700234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8586cd39d989_93465025 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
	<form class="logoutform col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 nopadding" method="post">
		<div class="col-xs-10"><p class="welcometext">Hello <?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
!</p></div>
		<div class="hidden">
			<input type="hidden" name="action" value="logout">
			<input type="hidden" name="currentPage" value="<?php echo $_SERVER['REQUEST_URI'];?>
">
		</div>
		<div class="col-xs-2"><button class="logbtn" type="submit">Logout</button></div>
	</form>
<?php } else { ?>
	<form class="loginform col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 nopadding" method="post">
		<div class="formheader col-sm-12 nopadding">
			<h2>Login to your account</h2>
		</div>	
		<div class="lrow col-xs-12 nopadding"><input type="text" placeholder="Username" name="username"></div>
		<div class="lrow col-xs-12 nopadding"><input type="password" placeholder="Password" name="password"></div>
		<?php if (isset($_smarty_tpl->tpl_vars['loginerror']->value)) {?>
			<div class="errormessage col-xs-12">
				<?php echo $_smarty_tpl->tpl_vars['loginerror']->value;?>

			</div>
		<?php }?>
		<div class="hidden">
			<input type="hidden" name="action" value="login">
			<input type="hidden" name="currentPage" value="<?php echo $_SERVER['REQUEST_URI'];?>
">
		</div>
		<div class="col-xs-12 nopadding"><button class="logbtn" type="submit">Login</button></div>
	</form>
	<div class="loginadd">If you have no account please<br/><a href="/register.php">register new account</a></div>
<?php }
}
}
