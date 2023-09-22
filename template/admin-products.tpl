{extends file="template/admin-dashboard.tpl"}
{block name="title"}GameHub | Admin Products{/block}

{block name="admin-products"}
    <table style="border-collapse: collapse; width: 100%;">
        <thead>
        <tr>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">PRODUCT ID</th>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">PRODUCT NAME</th>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">PRODUCT  PRICE</th>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;"DESCRIPTION</th>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;"CATEGORY</th>
        </tr>
        </thead>
        <tbody>
        {foreach $prods as $prod}
            <form method="post" action="index.php?action=changeProdInfo">
                <tr>
                    <td style="border: 1px solid #ffffff; padding: 8px; background-color: #212529;">{$prod.id}</td>
                    <td style="border: 1px solid #ffffff; padding: 8px; background-color: #212529;">
                        <input type="hidden" name="prodid" value="{$prod.id}">
                        <input type="text" name="prodname" required value="{$prod.productName}">
                    </td>
                    <td style="border: 1px solid #ffffff; padding: 8px; background-color: #212529;">
                        <input type="number" name="price" required value="{$prod.price}">
                    </td>
                    <td style="border: 1px solid #ffffff; padding: 8px; background-color: #212529;">
                        <input type="text" name="description" required value="{$prod.description}">
                    </td>
                    <td style="border: 1px solid #ffffff; padding: 8px; background-color: #212529;">
                        <input type="text" name="category" required value="{$prod.category}">
                        <br>
                        <input type="submit" value="Submit changes" name="submit">
                    </td>
                </tr>
            </form>
        {/foreach}
        </tbody>
    </table>
    <br>
    <br>
{/block}