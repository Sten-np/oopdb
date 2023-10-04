{extends file="template/layout.tpl"}

{block name="title"}
    GameHub | Product Details
{/block}

{block name="productPage"}

<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        {if isset($product) && !empty($product)}
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{$product[0].image}" alt="Product Image" /></div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">{$product[0].productName}</h1>
                    <div class="fs-5 mb-5">
                        <span>${$product[0].price}</span>
                    </div>
                    <p class="lead">{$product[0].description}</p>
                    <!-- Add to cart button -->
                    <form method="post" action="index.php?action=addtocart">
                        <input type="hidden" name="product_id" value="{$product[0].id}" />
                        <input type="submit" name="submit" class="btn btn-outline-light flex-shrink-0" value="Add to cart" />
                    </form>

                </div>
            </div>
        {else}
            <p>No product information available.</p>
        {/if}
    </div>
</section>
{/block}