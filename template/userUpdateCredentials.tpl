{extends file="template/layout.tpl"}

{block name="title"}
    GameHub | Update Your Credentials
{/block}

{block name="userUpdateCredentials"}
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

        /* This is the validation for creating a password*/
        /* Style all input fields */
        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
        }

        /* Style the submit button */
        input[type=submit] {
            background-color: #04AA6D;
            color: white;
        }

        /* Style the container for inputs */
        .container {
            padding: 20px;
        }

        /* The message box is shown when the user clicks on the password field */
        #message {
            display:none;
            background: #555;
            color: #f1f1f1;
            position: fixed;
            border-radius: 20px 20px 20px 20px;
            padding: 20px;
        }

        #message p {
            padding: 10px 35px;
            font-size: 18px;
        }

        /* Add a green text color and a checkmark when the requirements are right */
        .valid {
            color: green;
        }

        .valid:before {
            position: relative;
            left: -35px;
            content: "✔";
        }

        /* Add a red text color and an "x" when the requirements are wrong */
        .invalid {
            color:  #cc0000;
        }

        .invalid:before {
            position: relative;
            left: -35px;
            content: "✖";
        }

    </style>
    <form class="form-horizontal" action="index.php?action=userUpdateCredentials" method="POST" autocomplete="off">
        <h2>Mijn gegevens aanpassen</h2>
        <p>Pas hier uw gegevens aan welke u wilt.</p>

        <div class="form-group">
            <label for="username" title="Enter here your name, not weird characters!">Username:</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Wijzig hier uw username" value="{$smarty.session.user.username}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="emailadress" placeholder="Wijzig hier je email" value="{$smarty.session.user.emailadress}">
        </div>
        <div class="form-group">
            <label for="phonenumber" title="for example=06-12345678">Phone number:</label>
            <input type="tel" class="form-control" id="phonenumber" name="phonenumber" minlength="10" placeholder="Wijzig hier uw telefoonnummer" value="{$smarty.session.user.phonenumber}">
        </div>
    <div class="form-group">
        <label for="password" title="At least one lowercase, one uppercase, one digit number, one special character, miminum 8 to maximum 30 characters">Password:</label>
        <input type="password" class="form-control" id="password" name="password" minlength="8" placeholder="********">
    </div>
        <div class="form-group">
            <label for="passwordrepeat" title="At least one lowercase, one uppercase, one digit number, one special character, miminum 8 to maximum 30 characters">Password:</label>
            <input type="password" class="form-control" id="passwordrepeat" name="passwordrepeat" minlength="8" placeholder="********">
            <input class="showPassword" type="checkbox" onclick="myFunction()"> Show Both Password
        </div>

    <div class="form-group submit-button">
        <input type="hidden" value="{$smarty.session.user.id}" name="user_id_check">
        <button type="submit" class="btn btn-primary">Opslaan</button>
        <input type="hidden" name="csrf_token" value="{$csrf_token}">
        <br>
        <a href="index.php?action=userInformation" class="btn btn-secondary">Annuleren</a>
    </div>
    <div id="message">
        <h3>Password must contain the following:</h3>
        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
        <p id="number" class="invalid">A <b>number</b></p>
        <p id="specialChar" class="invalid">A <b>special</b> character</p>
        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
    </div>

    <script>
        function myFunction()
        {
            var x = document.getElementById("password");
            var y = document.getElementById("passwordrepeat");
            if (x.type === "password")
            {
                x.type = "text";
                y.type = "text";
            }
            else
            {
                x.type = "password";
                y.type = "password";
            }
        }

        //
        var myInput = document.getElementById("password");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var specialChar = document.getElementById("specialChar");
        var length = document.getElementById("length");

        // When the user clicks on the password field, show the message box
        myInput.onfocus = function() {
            document.getElementById("message").style.display = "block";
        }

        // When the user clicks outside of the password field, hide the message box
        myInput.onblur = function() {
            document.getElementById("message").style.display = "none";
        }

        // When the user starts to type something inside the password field
        myInput.onkeyup = function() {
            // Validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            if(myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }

            // Validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if(myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

            // Validate numbers
            var numbers = /[0-9]/g;
            if(myInput.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
            }

            // Validate special characters - Add this section
            var specialCharacters = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/g;
            if (myInput.value.match(specialCharacters)) {
                specialChar.classList.remove("invalid");
                specialChar.classList.add("valid");
            } else {
                specialChar.classList.remove("valid");
                specialChar.classList.add("invalid");
            }


            // Validate length
            if(myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
        }
    </script>

{/block}