{extends file="template/layout.tpl"}

{block name="title"}
    GameHub | Login
{/block}

{block name="loginForm"}
    <style>
        /* Add your existing styles here */

        /* Center the form vertically and horizontally */
        .form-signin {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 75vh;
        }

        /* Add additional styles as needed */

        /* Style the labels and inputs similar to the provided form */
        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
        }

        /* Adjust the form-control width */
        .form-control {
            width: 100%;
        }
    </style>

    <body onload="getcookiedata()">
    <main class="form-signin">
        <link href="http://gamehub/sign-in.css" rel="stylesheet">
        <form action="http://gamehub/index.php?action=login" method="POST">
            <h2>Login</h2>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <input type="email" class="form-control" name="emailadress" id="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                <input class="showPassword" type="checkbox" onclick="myFunction()"> Show Password
            </div>

            <div class="form-check">
                <input type="checkbox" name="RememberMe" class="form-check-input" value="1" id="RememberMe">
                <label class="form-check-label" for="RememberMe" onclick="setcookie()">Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary" onclick="rememberMe()">Submit</button>
            <input type="hidden" name="csrf_token" value="{$csrf_token}">
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
        </form>
    </main>

    <script>
        //I've created a 'show password' button, because most people want to make sure if they type the password correct
        function myFunction()
        {
            var x = document.getElementById("password");
            if (x.type === "password")
            {
                x.type = "text";
            }
            else
            {
                x.type = "password";
            }
        }

        function setcookie() {
            var e = document.getElementById('email').value;
            var p = document.getElementById('password').value;

            console.log('Setting cookies...');
            document.cookie = "myemail=" +e+ ";path=http://gamehub/index.php/";
            document.cookie = "mypwd=" +p+ ";path=http://gamehub/index.php/";
        }


        function getcookiedata() {
            console.log(document.cookie);

            var email = getCookie('myemail');
            var password = getCookie('mypwd');

                document.getElementById('email').value = email;
                document.getElementById('password').value = password;
        }


        function getCookie(cname)
        {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie)
            var ca = decodedCookie.split(';');
            for(var i = 0; i <ca.length; i++)
            {
                var c = ca[i];
                while (c.charAt(0) == ' ')
                {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0)
                {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        function rememberMe() {
            var rememberCheckbox = document.getElementById("RememberMe");
            if (rememberCheckbox.checked) {
                alert("Your credentials will be remembered.");
            }
        }

    </script>
    </body>
{/block}
