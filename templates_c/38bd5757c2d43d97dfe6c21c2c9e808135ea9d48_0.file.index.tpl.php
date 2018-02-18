<?php
/* Smarty version 3.1.30, created on 2018-02-15 12:13:08
  from "/www/htdocs/w0131f27/nerdwolf.eu/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a856b44e3c606_04836284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38bd5757c2d43d97dfe6c21c2c9e808135ea9d48' => 
    array (
      0 => '/www/htdocs/w0131f27/nerdwolf.eu/templates/index.tpl',
      1 => 1518690357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:global/head.tpl' => 1,
    'file:global/header.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5a856b44e3c606_04836284 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "settings.conf", null, 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:global/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:global/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div id="main">	
		<?php if (isset($_smarty_tpl->tpl_vars['loginerror']->value)) {?>
		<div class="col-md-12">
			<div class="col-md-4 col-md-offset-4 errormessage"><?php echo $_smarty_tpl->tpl_vars['loginerror']->value;?>
</div>
		</div>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['user']->value)) {?>
			<h2><center>Welcome to <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pageTitle');?>
, <?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</center></h2>
		<?php } else { ?>
			<h2><center>Welcome to <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pageTitle');?>
</center></h2>
		<?php }?>
		<div class="startimage col-md-12">
			<img src="/images/icons/icon_nerdwolf_240x240.png"/>
		</div>
		<p><center>May the wolf be with you.</center></p>
	</div>	

<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
