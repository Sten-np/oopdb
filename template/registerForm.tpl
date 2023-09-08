{extends file="template/layout.tpl"}

{block name="title"}
    GameHub | Register
{/block}

{block name="navmenu"}{/block}

{block name="form"}
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
                <input required type="password" class="form-control" id="pwd" name="password" placeholder="Enter password">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Repeat Password:</label>
            <div class="col-sm-10">
                <input required type="password" class="form-control" id="pwd" name="passwordrepeat" placeholder="Enter password">
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
{/block}