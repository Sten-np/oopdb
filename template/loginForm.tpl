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
    <main class="form-signin">
        <link href="sign-in.css" rel="stylesheet">
        <form>
            <h2>Login</h2>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="emailadress" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" name="remember" class="form-check-input"> Remember me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
        </form>
    </main>
{/block}
