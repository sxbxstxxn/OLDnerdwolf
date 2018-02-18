<?php
/* Smarty version 3.1.30, created on 2018-02-15 12:21:44
  from "/www/htdocs/w0131f27/nerdwolf.eu/templates/global/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a856d48356b63_99008635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef051693dabbc4f1a85836fe695e5a8c4a1eef8a' => 
    array (
      0 => '/www/htdocs/w0131f27/nerdwolf.eu/templates/global/header.tpl',
      1 => 1518693692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a856d48356b63_99008635 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
	<div class="col-sm-4 col-xs-6 nopadding">
		<a href="/"><img src="/images/icons/icon_nerdwolf_32x32.png"/></a>
	</div>
	<div class="col-sm-4 hidden-xs">
		<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
			<div class="errorheader"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
		<?php } else { ?>
			<div id="clock">Uhrzeit</div>
		<?php }?>
	</div>
	<div class="col-sm-4 col-xs-6 nopadding">
		<nav class="mainnav">
			<?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
				<a href="/myprofile.php">my profile</a>
				<a href="/userlist.php">userlist</a>
			<?php } else { ?>
				<a href="/login.php">login</a>				
			<?php }?>
		</nav>
	</div>
</header><?php }
}
