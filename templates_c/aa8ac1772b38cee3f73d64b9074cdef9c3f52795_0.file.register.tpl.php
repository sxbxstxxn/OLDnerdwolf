<?php
/* Smarty version 3.1.30, created on 2018-02-15 14:02:54
  from "/www/htdocs/w0131f27/nerdwolf.eu/templates/forms/register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8584fe4f9627_94119835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa8ac1772b38cee3f73d64b9074cdef9c3f52795' => 
    array (
      0 => '/www/htdocs/w0131f27/nerdwolf.eu/templates/forms/register.tpl',
      1 => 1518699767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8584fe4f9627_94119835 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['alreadyregistered']->value)) {?>
	<div class="col-sm-4 col-sm-offset-4"><p>You are already registered and logged in at the moment. Please logout if you want to register a new account!</p></div>
<?php } else { ?>
	<form autocomplete="off" action="register.php" class="registerform col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 nopadding" method="post" enctype="multipart/form-data">
		<div class="formheader col-sm-12 nopadding">
			<h2>Register new account</h2>
			<p class="legend">* = required fields</p>
		</div>
		<div class="rrow col-xs-12 nopadding">
			<label for="username" class="col-sm-6 hidden-xs">Username *
			<?php if (isset($_smarty_tpl->tpl_vars['registererror']->value['username'])) {?>
				<span class="errorsign glyphicon glyphicon-alert"></span>
			<?php }?>
			</label>	
			<input class="col-sm-6 col-xs-12" type="text" placeholder="Username" name="username" <?php if (isset($_smarty_tpl->tpl_vars['registerprocess']->value['username'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['registerprocess']->value['username'];?>
"<?php }?>>	
		</div>
		<div class="rrow col-xs-12 nopadding">
			<label for="password" class="col-sm-6 hidden-xs">Password
			<?php if (isset($_smarty_tpl->tpl_vars['registererror']->value['password'])) {?>
				<span class="errorsign glyphicon glyphicon-alert"></span>
			<?php }?>
			</label>
			<input class="col-sm-6 col-xs-12" type="password" placeholder="Password" name="password">
		</div>
		<div class="rrow col-xs-12 nopadding">
			<label for="retypepassword" class="col-sm-6 hidden-xs">Retype Password
			<?php if (isset($_smarty_tpl->tpl_vars['registererror']->value['retypepassword'])) {?>
				<span class="errorsign glyphicon glyphicon-alert"></span>
			<?php }?>		
			</label>
			<input class="col-sm-6 col-xs-12" type="password" placeholder="Retype Password" name="retypepassword">
		</div>
		<div class="rrow col-xs-12 nopadding">		
			<label for="email" class="col-sm-6 hidden-xs">E-Mail *
			<?php if (isset($_smarty_tpl->tpl_vars['registererror']->value['email'])) {?>
				<span class="errorsign glyphicon glyphicon-alert"></span>
			<?php }?>
			</label>
			<input class="col-sm-6 col-xs-12" type="text" placeholder="E-Mail" name="email" <?php if (isset($_smarty_tpl->tpl_vars['registerprocess']->value['email'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['registerprocess']->value['email'];?>
"<?php }?>>
		</div>
		<div class="rrow col-xs-12 nopadding">		
			<label for="birthdate" class="col-sm-6 hidden-xs">Birthdate</label>
			<input id="datepicker" class="col-sm-6 col-xs-12" type="text" placeholder="Birthdate" name="birthdate">
		</div>


		<?php if (isset($_smarty_tpl->tpl_vars['registererror']->value)) {?>
			<div class="errormessage col-xs-12">
			<?php if (isset($_smarty_tpl->tpl_vars['registererror']->value['username'])) {?><p><?php echo $_smarty_tpl->tpl_vars['registererror']->value['username'];?>
</p><?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['registererror']->value['email'])) {?><p><?php echo $_smarty_tpl->tpl_vars['registererror']->value['email'];?>
</p><?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['registererror']->value['password'])) {?><p><?php echo $_smarty_tpl->tpl_vars['registererror']->value['password'];?>
</p><?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['registererror']->value['retypepassword'])) {?><p><?php echo $_smarty_tpl->tpl_vars['registererror']->value['retypepassword'];?>
</p><?php }?>		
			</div>
		<?php }?>
		<div class="hidden"><input type="hidden" name="action" value="register"></div>
		<div class="col-xs-12 nopadding"><button type="submit">Register</button></div>
	</form>
	<div class="loginadd">If you already have an account please<br/><a href="/login.php">login</a></div>
<?php }
}
}
