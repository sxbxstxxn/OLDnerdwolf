<?php
/* Smarty version 3.1.30, created on 2018-02-15 14:25:40
  from "/www/htdocs/w0131f27/nerdwolf.eu/templates/myprofile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a858a543522b8_47441220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e923347d3ee0f0a95a44bbab92c4d6915d9eaf4' => 
    array (
      0 => '/www/htdocs/w0131f27/nerdwolf.eu/templates/myprofile.tpl',
      1 => 1518621133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:global/head.tpl' => 1,
    'file:global/errors.tpl' => 1,
    'file:global/header.tpl' => 1,
    'file:global/footer.tpl' => 1,
  ),
),false)) {
function content_5a858a543522b8_47441220 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "settings.conf", null, 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:global/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="main">
		<?php $_smarty_tpl->_subTemplateRender("file:global/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <h2><center><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</center><h2>

    <div class="col-md-4 col-md-offset-4" style="border:1px dashed;">
			UserID: <?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
<br/>
			Username:  <?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
<br/>
			E-Mail: <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
<br/>
			Birthdate: <?php echo $_smarty_tpl->tpl_vars['user']->value['birthdate'];?>
<br/>
			Account created: <?php echo $_smarty_tpl->tpl_vars['user']->value['created_at'];?>
<br/>
			Last updated: <?php echo $_smarty_tpl->tpl_vars['user']->value['updated_at'];?>

    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:global/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
