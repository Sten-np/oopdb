{extends file="template/layout.tpl"}

{block name="title"}
    GameHub | Shopping Cart
{/block}


{block name="cartPage"}
    <table style="border-collapse: collapse; width: 100%;">
        <thead>
        <tr>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">Product ID</th>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">Name</th>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">Price</th>
        </tr>
        </thead>
        <tbody>
        {foreach $products as $product}
            <tr>
                <td style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">{$product.id}</td>
                <td style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">{$product.productName}</td>
                <td style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">&euro; {$product.price}</td>
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
    <br>
    <br>
    <form>
        <div class="form-group">
            <label>First name</label>
            <input class="form-control" type="text" name="fname" required placeholder="John">
            <label>Last name</label>
            <input class="form-control" type="text" name="lname" required placeholder="Smith">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input class="form-control" type="text" name="street" required placeholder="First Street">
            <label>Number</label>
            <input class="form-control" type="number" name="number" required placeholder="1">
            <label>Zipcode</label>
            <input class="form-control" type="text" name="zipcode" required placeholder="1111AP">
            <label>Country</label>
            <select class="form-control" required name="country">
                <option value="Netherlands">Netherlands</option>
                <option value="Belgium">Belgium</option>
                <option value="Germany">Germany</option>
                <option value="United Kingdom">United Kingdom</option>
            </select>
        </div>
        <br>
        <br>
        <h4>EXCL BTW: &euro; {$priceNoVat}</h4>
        <h3>TOTAL: &euro; {$totalCost}</h3>
        <br>
        <input type="submit" name="submit" value="Order Now">
    </form>
    <br>

{/block}
