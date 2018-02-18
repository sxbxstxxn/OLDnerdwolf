<header>
	<div class="col-sm-4 col-xs-6 nopadding">
		<a href="/"><img src="/images/icons/icon_nerdwolf_32x32.png"/></a>
	</div>
	<div class="col-sm-4 hidden-xs">
		{if isset($error)}
			<div class="errorheader">{$error}</div>
		{else}
			<div id="clock">Uhrzeit</div>
		{/if}
	</div>
	<div class="col-sm-4 col-xs-6 nopadding">
		<nav class="mainnav">
			{if isset($user) }
				<a href="/myprofile.php">my profile</a>
				<a href="/userlist.php">userlist</a>
			{else}
				<a href="/login.php">login</a>				
			{/if}
		</nav>
	</div>
</header>