{extends file="template/admin-dashboard.tpl"}
{block name="title"}GameHub | Admin Products{/block}

{block name="admin-products"}
    <button style="background-color: orange; border-radius: 5px; color: black"><a href="index.php?action=addprod">Add a product</a></button>
    <form method="post" action="index.php?action=removeProd">
        <input type="number" name="id" placeholder="enter id to remove" required>
        <input type="submit" name="removeprodsubmit" value="Remove product">
    </form>
    <table style="border-collapse: collapse; width: 100%;">
        <thead>
        <tr>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">PRODUCT ID</th>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">PRODUCT NAME</th>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;">PRODUCT  PRICE</th>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;"DESCRIPTION</th>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;"IMAGE</th>
            <th style="border: 1px solid #ffffff ; padding: 8px; background-color: #212529;"CATEGORY</th>
        </tr>
        </thead>
        <tbody>
        {foreach $prods as $prod}
            <form method="post" action="index.php?action=changeProdInfo">
                <tr>
                    <td style="border: 1px solid #ffffff; padding: 8px; background-color: #212529;">
                        {$prod.id}
                    </td>
                    <td style="border: 1px solid #ffffff; padding: 8px; background-color: #212529;">
                        <input type="hidden" name="prodid" value="{$prod.id}">
                        <input type="text" name="prodname" required value="{$prod.productName}">
                    </td>
                    <td style="border: 1px solid #ffffff; padding: 8px; background-color: #212529;">
                        <input type="number" name="price" required value="{$prod.price}">
                    </td>
                    <td style="border: 1px solid #ffffff; padding: 8px; background-color: #212529;">
                        <input type="text" name="description" value="{$prod.description}">
                    </td>
                    <td style="border: 1px solid #ffffff; padding: 8px; background-color: #212529;">
                        <input type="text" name="image" placeholder="img/productimage.png" value="{$prod.image}">
                    </td>
                    <td style="border: 1px solid #ffffff; padding: 8px; background-color: #212529;">
                        <select name="category">
                            <option value="{$prod.category}" selected>{$prod.category}</option>
                            <option value="games">games</option>
                            <option value="xbox">xbox</option>
                            <option value="playstation" >playstation</option>
                        </select>
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