<?php
/* Smarty version 3.1.30, created on 2018-02-15 14:25:44
  from "/www/htdocs/w0131f27/nerdwolf.eu/templates/userlist.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a858a584e1079_66595369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a986fa5d2591aafe30732cbab01d3ea082a8cba' => 
    array (
      0 => '/www/htdocs/w0131f27/nerdwolf.eu/templates/userlist.tpl',
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
function content_5a858a584e1079_66595369 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "settings.conf", null, 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:global/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id="main">
		<?php $_smarty_tpl->_subTemplateRender("file:global/errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <h2><center><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</center><h2>

    <div class="col-md-8 col-md-offset-2" style="border:1px dashed;"> 
			
				<div class="row">
					<div class="col-md-4 nopadding">Username</div>
					<div class="col-md-4 nopadding">E-Mail</div>
					<div class="col-md-2 nopadding">Birthdate</div>
					<div class="col-md-2 nopadding">Account created</div>
				</div>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userlist']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>	
				<a href="profile.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
					<div class="row">
						<div class="col-md-4 nopadding"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</div>
						<div class="col-md-4 nopadding"><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</div>
						<div class="col-md-2 nopadding"><?php echo $_smarty_tpl->tpl_vars['user']->value['birthdate'];?>
</div>
						<div class="col-md-2 nopadding"><?php echo $_smarty_tpl->tpl_vars['user']->value['created_at'];?>
</div>
					</div>
				</a>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			
		</div>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:global/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
