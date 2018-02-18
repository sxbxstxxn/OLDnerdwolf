{config_load file="settings.conf"}
{include file="global/head.tpl"}
{include file="global/header.tpl"}
	<div id="main">	
		{if isset($loginerror)}
		<div class="col-md-12">
			<div class="col-md-4 col-md-offset-4 errormessage">{$loginerror}</div>
		</div>
		{/if}
		{if isset($user) }
			<h2><center>Welcome to {#pageTitle#}, {$user.username}</center></h2>
		{else}
			<h2><center>Welcome to {#pageTitle#}</center></h2>
		{/if}
		<div class="startimage col-md-12">
			<img src="/images/icons/icon_nerdwolf_240x240.png"/>
		</div>
		<p><center>May the wolf be with you.</center></p>
	</div>	

{include file="global/footer.tpl"}
