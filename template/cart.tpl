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
    <form method="post" action="index.php?action=processorder">
        <h4>EXCL BTW: &euro; {$priceNoVat}</h4>
        <h3>TOTAL: &euro; {$totalCost}</h3>
        <input type="hidden" value="{$totalCost}" name="TotalAmount">
        <br>
        <input type="submit" name="submitorder" value="Order Now">
    </form>
    <br>

{/block}
