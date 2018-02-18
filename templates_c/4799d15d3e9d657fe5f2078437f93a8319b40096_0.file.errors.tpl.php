<?php
/* Smarty version 3.1.30, created on 2018-02-15 14:25:40
  from "/www/htdocs/w0131f27/nerdwolf.eu/templates/global/errors.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a858a54379462_78457774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4799d15d3e9d657fe5f2078437f93a8319b40096' => 
    array (
      0 => '/www/htdocs/w0131f27/nerdwolf.eu/templates/global/errors.tpl',
      1 => 1518621133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a858a54379462_78457774 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
<div id="errors">
	<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

</div>
<?php }
}
}
