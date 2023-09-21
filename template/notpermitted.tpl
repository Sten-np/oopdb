{extends file="template/layout.tpl"}

{block name="notpermitted"}
    <h1>Oops... You are not permitted to enter this page!</h1>
    <p>You will be redirected to the index page instead.</p>

    <a href="index.php">Not being redirected? Click here!</a>
{/block}