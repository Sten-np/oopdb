{extends file="template/layout.tpl"}

{block name="title"}
    GameHub | Cart
{/block}

{block name="navmenu"}{/block}

{block name="cartPage"}
    <style>
        .card {
            display: inline-block;
        }
    </style>
    <div class="row" style="padding-left: 1%">
        {var_dump($cartItems)}
        <!-- Display cart items -->
        {if isset($cartItems) && is_array($cartItems)}
            <div class="col-md-4" style="width: 25%; padding-top: 3%">
                <h2>Your Cart:</h2>
                <ul>
                    {foreach $cartItems as $cartItem}
                        <li>
                            Product ID: {$cartItem.id}<br>
                            Product Name: {$cartItem.name}<br>
                            Price: {$cartItem.price}<br>
                            Quantity: {$cartItem.quantity}<br>
                            <hr>
                        </li>
                    {/foreach}
                </ul>
            </div>
        {/if}

        <!-- Display product details for items in the cart -->
{*        {if isset($cartItems) && is_array($cartItems)}*}
{*            {foreach $cartItems as $cartItem}*}
{*                <div class="col-md-4" style="width: 25%; padding-top: 3%">*}
{*                    <div class="card" style="width: 18rem;">*}
{*                        <img class="card-img-top" src="{$cartItem.image}" alt="Card image cap">*}
{*                        <div class="card-body">*}
{*                            <h5 class="card-title">{$cartItem.name}</h5>*}
{*                            <p class="card-price">{$cartItem.price}</p>*}
{*                            <p class="card-text">{$cartItem.description}</p>*}
{*                            <a href="index.php?action=moreInfo&product_id={$cartItem.id}" class="btn btn-primary" style="background-color: orange; color: black; border: none">More Info</a>*}
{*                        </div>*}
{*                    </div>*}
{*                </div>*}
{*            {/foreach}*}
{*        {/if}*}
    </div>
{/block}
