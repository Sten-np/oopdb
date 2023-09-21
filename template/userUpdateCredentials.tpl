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

    </style>
    <form class="form-horizontal" action="index.php?action=userUpdateCredentials" method="POST" autocomplete="off">
        <h2>Mijn gegevens aanpassen</h2>
        <p>Pas hier uw gegevens aan</p>

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
            <input type="text" class="form-control" id="password" name="password" minlength="8" placeholder="********">
        </div>

    <div class="form-group submit-button">
        <button type="submit" class="btn btn-primary">Opslaan</button>
        <br>
        <a href="index.php?action=userInformation" class="btn btn-secondary">Annuleren</a>
{*        <script>alert("Your credentials hasn't changed");*}
{*      </script>*}
    </div>

{/block}