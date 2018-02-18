{if isset($user) }
	<form class="logoutform col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 nopadding" method="post">
		<div class="col-xs-10"><p class="welcometext">Hello {$user.username}!</p></div>
		<div class="hidden">
			<input type="hidden" name="action" value="logout">
			<input type="hidden" name="currentPage" value="{$smarty.server.REQUEST_URI}">
		</div>
		<div class="col-xs-2"><button class="logbtn" type="submit">Logout</button></div>
	</form>
{else}
	<form class="loginform col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 nopadding" method="post">
		<div class="formheader col-sm-12 nopadding">
			<h2>Login to your account</h2>
		</div>	
		<div class="lrow col-xs-12 nopadding"><input type="text" placeholder="Username" name="username"></div>
		<div class="lrow col-xs-12 nopadding"><input type="password" placeholder="Password" name="password"></div>
		{if isset($loginerror)}
			<div class="errormessage col-xs-12">
				{$loginerror}
			</div>
		{/if}
		<div class="hidden">
			<input type="hidden" name="action" value="login">
			<input type="hidden" name="currentPage" value="{$smarty.server.REQUEST_URI}">
		</div>
		<div class="col-xs-12 nopadding"><button class="logbtn" type="submit">Login</button></div>
	</form>
	<div class="loginadd">If you have no account please<br/><a href="/register.php">register new account</a></div>
{/if}