{extends file="template/admin-dashboard.tpl"}
{block name="title"}GameHub | adding product{/block}

{block name="addprod"}
    <h3>Adding a product</h3>
    <form method="post" action="index.php?action=addproduct">
        <div class="form-group">
            <label for="prodname">Productname</label>
            <input type="text" class="form-control" maxlength="75" name="prodname" required>
        </div>
        <div class="form-group">
            <label for="price">Product price</label>
            <input type="number" class="form-control" name="prodprice" required>
        </div>
        <div class="form-group">
            <label for="description">Product description</label>
            <textarea class="form-control" cols="4" rows="4" maxlength="255" name="proddesc" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Product image</label>
            <input type="text" class="form-control" maxlength="255" name="prodimg" placeholder="img/product-image.png" required>
        </div>
        <div class="form-group">
        <label for="category">Product category</label>
            <select name="prodcategory" class="form-control" required>
                <option selected>--Select a category--</option>
                <option value="games">games</option>
                <option value="xbox">xbox</option>
                <option value="playstation">playstation</option>
                <option value="nintendo">nintendo</option>
            </select>
        </div>
        <br>
        <br>
        <input type="submit" name="submit" value="add product">
    </form>
{/block}

{block name="footer"}{/block}