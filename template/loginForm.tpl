{extends file="template/layout.tpl"}

{block name="title"}
    GameHub | Login
{/block}

{block name="loginForm"}
    <h2>Login</h2>
    <form action="index.php?action=login" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <input required type="email" class="form-control" name="emailadress" id="email" placeholder="Enter email" name="emailadress">
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Password:</label>
            <input required type="password" class="form-control" name="password" id="pwd" placeholder="Enter password" name="password">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
{/block}