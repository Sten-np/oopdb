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
        <input class="showPassword" type="checkbox" onclick="myFunction()"> Show Password
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        <input type="hidden" name="csrf_token" value="{$csrf_token}">
    </form>
    <script>
        //I've created a 'show password' button, because most people want to make sure if they type the password correct
        function myFunction()
        {
            var x = document.getElementById("pwd");
            if (x.type === "password")
            {
                x.type = "text";
            }
            else
            {
                x.type = "password";
            }
        }
    </script>
{/block}