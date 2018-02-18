<?php
/* Smarty version 3.1.30, created on 2018-02-15 12:16:40
  from "/www/htdocs/w0131f27/nerdwolf.eu/templates/mails/register_confirmation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a856c185ecf25_55835804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '746514369503b08ba1fc6ffd205ac52c00cfec45' => 
    array (
      0 => '/www/htdocs/w0131f27/nerdwolf.eu/templates/mails/register_confirmation.tpl',
      1 => 1518621133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a856c185ecf25_55835804 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table cellpadding="5" cellspacing="0" width="100%" bgcolor="#000000" style="color:#00FD00;font-family:'VT323',monospace">
	<thead>
		<tr>
			<th width="32px"><img src="http://nerdwolf.sebastian-christoph.de/images/icons/icon_nerdwolf_32x32.jpg"></th>
			<th>Nerdwolf - Registration</th>
			<th width="32px"><img src="http://nerdwolf.sebastian-christoph.de/images/icons/icon_nerdwolf_32x32.jpg"></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>&nbsp;</td>
			<td style="border:1px dashed #00FD00;padding:25px;font-family:'VT323',monospace">
				<p>Hello <b><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</b>,<br/>thank you for your registration.</p>
				<p>To confirm your registration click the following link: </p>
				<p><a href="<?php echo $_smarty_tpl->tpl_vars['confirmationlink']->value;?>
" target="_blank" style="background-color:#00FD00;color:#000000;padding:5px;text-decoration:none;font-family:'VT323',monospace">
					<?php echo $_smarty_tpl->tpl_vars['confirmationlink']->value;?>

				</a></p>
				<p>To delete the request and your email from our database click </p>
				<p><a href="<?php echo $_smarty_tpl->tpl_vars['contradictlink']->value;?>
" target="_blank" style="background-color:#00FD00;color:#000000;padding:5px;text-decoration:none;font-family:'VT323',monospace">
					<?php echo $_smarty_tpl->tpl_vars['contradictlink']->value;?>

				</a></p>
				<p>Have fun,<br/>your Nerdwolf Team</p>
			</td>
			<td>&nbsp;</td>
		</tr>		
	</tbody>
	<tfoot>
		<tr>
			<td>&nbsp;</td>
			<td style="text-align:center;">&copy; <a href="http://nerdwolf.sebastian-christoph.de" target="_blank" style="color:#00FD00;font-family:'VT323',monospace">Nerdwolf</td>
			<td>&nbsp;</td>
		</tr>
	</tfoot>
</table><?php }
}
