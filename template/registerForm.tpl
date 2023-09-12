{extends file="template/layout.tpl"}

{block name="title"}
    GameHub | Register
{/block}

{block name="registerForm"}
    <style>
        /* Add your existing styles here */

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
    <form class="form-horizontal" action="index.php?action=register" method="POST">
        <h2>Sign up</h2>

        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="emailadress" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="phonenumber">Phone number:</label>
            <input type="tel" class="form-control" id="phonenumber" name="phonenumber" placeholder="06-12345678" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
        </div>
        <div class="form-group">
            <label for="passwordrepeat">Repeat Password:</label>
            <input type="password" class="form-control" id="passwordrepeat" name="passwordrepeat" placeholder="Repeat password" required>
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label><input type="checkbox" name="remember"> Remember me</label>
            </div>
        </div>
        <div class="form-group submit-button">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
{/block}