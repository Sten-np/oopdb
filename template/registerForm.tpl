{extends file="template/layout.tpl"}

{block name="title"}
    GameHub | Register
{/block}
{block name="register"}

{/block}

{block name="registerForm"}
    <style>
        .showPassword {
            display: inline-flex;
            align-items: center;
            cursor: pointer;
            font-size: 14px;
            color: #333;
        }

        .showPassword input[type="checkbox"] {
            margin-right: 5px;
        }

        .showPassword:hover {
            color: #007bff; /* Change color on hover for better visual feedback */
        }

    </style>
    <h2>Sign up</h2>
    <form class="form-horizontal" action="index.php?action=register" method="POST">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Username:</label>
            <div class="col-sm-10">
                <input required type="text" class="form-control" id="email" name="username" placeholder="Username">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input required type="email" class="form-control" id="email" name="emailadress" placeholder="Enter here your email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="phonenumber">Phone number:</label>
            <div class="col-sm-10">
                <input required type="tel" class="form-control" id="phonenumber" name="phonenumber" placeholder="06-12345678">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">
                <input required type="password" class="form-control" id="pwd" name="password"  placeholder="Enter password">
                <input class="showPassword" type="checkbox" onclick="myFunction()"> Show Password
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd2">Repeat Password:</label>
            <div class="col-sm-10">
                <input required type="password" class="form-control" id="pwd2" name="passwordrepeat" placeholder="Enter password">
                <input class="showPassword" type="checkbox" onclick="myFunctionCheck()"> Show Password
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
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

        function myFunctionCheck()
        {
            var y = document.getElementById("pwd2")
            if (y.type === "password")
            {
                y.type = "text";
            }
            else
            {
                y.type = "password";
            }
        }
    </script>
{/block}