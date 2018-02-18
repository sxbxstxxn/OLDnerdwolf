{if isset($alreadyregistered)}
	<div class="col-sm-4 col-sm-offset-4"><p>You are already registered and logged in at the moment. Please logout if you want to register a new account!</p></div>
{else}
	<form autocomplete="off" action="register.php" class="registerform col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 nopadding" method="post" enctype="multipart/form-data">
		<div class="formheader col-sm-12 nopadding">
			<h2>Register new account</h2>
			<p class="legend">* = required fields</p>
		</div>
		<div class="rrow col-xs-12 nopadding">
			<label for="username" class="col-sm-6 hidden-xs">Username *
			{if isset($registererror.username)}
				<span class="errorsign glyphicon glyphicon-alert"></span>
			{/if}
			</label>	
			<input class="col-sm-6 col-xs-12" type="text" placeholder="Username" name="username" {if isset ($registerprocess.username)}value="{$registerprocess.username}"{/if}>	
		</div>
		<div class="rrow col-xs-12 nopadding">
			<label for="password" class="col-sm-6 hidden-xs">Password
			{if isset($registererror.password)}
				<span class="errorsign glyphicon glyphicon-alert"></span>
			{/if}
			</label>
			<input class="col-sm-6 col-xs-12" type="password" placeholder="Password" name="password">
		</div>
		<div class="rrow col-xs-12 nopadding">
			<label for="retypepassword" class="col-sm-6 hidden-xs">Retype Password
			{if isset($registererror.retypepassword)}
				<span class="errorsign glyphicon glyphicon-alert"></span>
			{/if}		
			</label>
			<input class="col-sm-6 col-xs-12" type="password" placeholder="Retype Password" name="retypepassword">
		</div>
		<div class="rrow col-xs-12 nopadding">		
			<label for="email" class="col-sm-6 hidden-xs">E-Mail *
			{if isset($registererror.email)}
				<span class="errorsign glyphicon glyphicon-alert"></span>
			{/if}
			</label>
			<input class="col-sm-6 col-xs-12" type="text" placeholder="E-Mail" name="email" {if isset ($registerprocess.email)}value="{$registerprocess.email}"{/if}>
		</div>
		<div class="rrow col-xs-12 nopadding">		
			<label for="birthdate" class="col-sm-6 hidden-xs">Birthdate</label>
			<input id="datepicker" class="col-sm-6 col-xs-12" type="text" placeholder="Birthdate" name="birthdate">
		</div>


		{if isset($registererror)}
			<div class="errormessage col-xs-12">
			{if isset($registererror.username)}<p>{$registererror.username}</p>{/if}
			{if isset($registererror.email)}<p>{$registererror.email}</p>{/if}
			{if isset($registererror.password)}<p>{$registererror.password}</p>{/if}
			{if isset($registererror.retypepassword)}<p>{$registererror.retypepassword}</p>{/if}		
			</div>
		{/if}
		<div class="hidden"><input type="hidden" name="action" value="register"></div>
		<div class="col-xs-12 nopadding"><button type="submit">Register</button></div>
	</form>
	<div class="loginadd">If you already have an account please<br/><a href="/login.php">login</a></div>
{/if}