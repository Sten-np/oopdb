{extends file="template/layout.tpl"}

{block name="title"}
    GameHub | Userinformation
{/block}

{block name="userInformation"}
    <style>
        .card {
            display: grid;
            grid-template-columns: auto auto auto;
            padding: 10px;
        }

        .grid-container{
            display: flex;
            justify-content: right;
        }

        .grid-item{
            background-color: orange;
            border: 10px solid rgba(0, 0, 0, 0.8);
            padding: 20px;
            font-size: 20px;
            text-align: center;
            border-radius: 20px 20px 20px 20px;
            color: black;
        }
    </style>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
        <div class="col-md-6 p-lg-5 mx-auto my-5">
            <h3 class="display-3 fw-bold"><img src="../img/GameHub.png" style="height: 100%; width: 40%; object-fit: contain;"</h3>
            <div class="d-flex gap-3 justify-content-center lead fw-normal">
                <a class="icon-link" href="#">
                </a>
            </div>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

{*    <div class="row" style="padding-left: 1%">*}
{*                <div class="card" style="width: 18rem;">*}
{*                    <h2>Profiel overzicht</h2>*}
{*                    <div class="card-body">*}
{*                        <h3>Mijn gegevens</h3>*}
{*                        <p class="card-text">{$smarty.session.user.id}</p>*}
{*                        <h3>Uitloggen</h3>*}
{*                        <p class="card-title">{$smarty.session.user.username}</p>*}
{*                    </div>*}
{*                </div>*}
                    <div class="grid-container" style="width: 25%; padding-top: 3%">
                    <div class="card-body">
                        <h2>Mijn gegevens</h2>
                        <p>Dit zijn uw gegevens</p>
                        <h4>Klantnummer:</h4>
                        <div class="grid-item">{$smarty.session.user.id}</div>
                        <h4>Username:</h4>
                        <div class="grid-item">{$smarty.session.user.username}</div>
                        <h4>Emailadres:</h4>
                        <div class="grid-item">{$smarty.session.user.emailadress}</div>
                        <h4>Telefoon nummer:</h4>
                        <div class="grid-item">{$smarty.session.user.phonenumber}</div>

                        <div type="submit"><a href="index.php?action=userUpdateLocate"> > Gegevens Aanpassen</a></div>
                </div>
            </div>
    </div>




{/block}