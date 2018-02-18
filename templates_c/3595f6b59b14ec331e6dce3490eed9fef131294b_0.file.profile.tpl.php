<?php
/* Smarty version 3.1.30, created on 2017-08-01 14:50:21
  from "/www/htdocs/w0131f27/nerdwolf.sebastian-christoph.de/templates/profile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5980790d7b9316_11100530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3595f6b59b14ec331e6dce3490eed9fef131294b' => 
    array (
      0 => '/www/htdocs/w0131f27/nerdwolf.sebastian-christoph.de/templates/profile.tpl',
      1 => 1501591736,
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
function content_5980790d7b9316_11100530 (Smarty_Internal_Template $_smarty_tpl) {
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
			<?php if ($_smarty_tpl->tpl_vars['profile']->value['error'] == NULL) {?>         
        UserID: <?php echo $_smarty_tpl->tpl_vars['profile']->value['id'];?>
<br/>
        Username:  <?php echo $_smarty_tpl->tpl_vars['profile']->value['username'];?>
<br/>
        E-Mail: <?php echo $_smarty_tpl->tpl_vars['profile']->value['email'];?>
<br/>
        Birthdate: <?php echo $_smarty_tpl->tpl_vars['profile']->value['birthdate'];?>
<br/>
		    Account created: <?php echo $_smarty_tpl->tpl_vars['profile']->value['created_at'];?>
<br/>
		    Last updated: <?php echo $_smarty_tpl->tpl_vars['profile']->value['updated_at'];?>
<br/>
      <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['profile']->value['error'];?>

      <?php }?>
      <a href="userlist.php">back to list</a>
    </div>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:global/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
