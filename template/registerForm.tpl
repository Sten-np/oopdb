{extends file="template/layout.tpl"}

{block name="title"}
    GameHub | Register
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

        /* Center the form vertically and horizontally */
        .form-horizontal {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        /* Style the labels and inputs similar to the provided form */
        .form-group {
            display: flex;
            flex-direction: column;
            align-items: center; /* Center input fields horizontally */
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
        }

        /* Adjust the form-control width and center them */
        .form-control {
            width: 100%; /* Set the width back to 100% */
            max-width: 400px; /* Increase the maximum width to your desired value */
            margin-bottom: 10px;
        }

        /* Center the submit button */
        .submit-button {
            text-align: center;
        }
    </style>
    <form class="form-horizontal" action="index.php?action=register" method="POST" autocomplete="off">
        <h2>Sign up</h2>

        <div class="form-group">
            <label for="username" title="Enter here your name, not weird characters!">Username:</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="emailadress" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="phonenumber" title="for example=06-12345678">Phone number:</label>
            <input type="tel" class="form-control" id="phonenumber" name="phonenumber" minlength="10" placeholder="06-12345678" required>
        </div>
        <div class="form-group">
            <label for="password" title="At least one lowercase, one uppercase, one digit number, one special character, miminum 8 to maximum 30 characters">Password:</label>
            <input type="password" class="form-control" id="password" name="password" minlength="8" placeholder="Enter password" required>
            <input class="showPassword" type="checkbox" onclick="myFunction()"> Show Password
        </div>
        <div class="form-group">
            <label for="passwordrepeat">Repeat Password:</label>
            <input type="password" class="form-control" id="passwordrepeat" name="passwordrepeat" minlength="8" placeholder="Repeat password" required>
            <input class="showPassword" type="checkbox" onclick="myFunctionCheck()"> Show Password
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label><input type="checkbox" name="remember"> Remember me</label>
            </div>
        </div>
        <div class="form-group">
            <div class="form-group submit-button">
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="csrf_token" value="{$csrf_token}">
            </div>
    </form>
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

        function myFunctionCheck()
        {
            var y = document.getElementById("passwordrepeat")
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