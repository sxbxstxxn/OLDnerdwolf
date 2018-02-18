<?php
/* Smarty version 3.1.30, created on 2018-02-15 14:11:14
  from "/www/htdocs/w0131f27/nerdwolf.eu/templates/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8586f28fa174_86531128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eed51b000047d6007086d80634e21514cda9df42' => 
    array (
      0 => '/www/htdocs/w0131f27/nerdwolf.eu/templates/login.tpl',
      1 => 1518700272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:global/head.tpl' => 1,
    'file:global/header.tpl' => 1,
    'file:forms/login.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5a8586f28fa174_86531128 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "settings.conf", null, 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:global/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:global/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<div id="main">	
		<?php $_smarty_tpl->_subTemplateRender("file:forms/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</div>	

<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
