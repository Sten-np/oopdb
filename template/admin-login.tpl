{extends file="template/layout.tpl"}
{block name="footer"}{/block}

{block name="admin-login"}

<form class="admin-form" method="post" action="index.php?action=login-adm">
<h2>Login Beheerder</h2>
<label>Email</label>
<input type="email" name="email" required>

<label>Password</label>
<input type="password" name="pass" required>

<input type="submit" name="submit">

</form>










{/block}