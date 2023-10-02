{extends file="template/layout.tpl"}

{block name="title"}
    GameHub | Shopping Cart
{/block}

{block name="navmenu"}{/block}

{block name="cartPage"}
    <table style="border-collapse: collapse; width: 100%;">
        <thead>
        <tr>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">USER ID</th>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">USER USERNAME</th>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">USER MAIL</th>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;"RIGHTS</th>
        </tr>
        </thead>
        <tbody>
        {foreach $products as $product}
            <tr>
                <td style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">{$product.id}</td>
                <td style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">{$product.productName}</td>
                <td style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">{$product.price}</td>
                <td style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
    <br>
    <br>

{/block}
