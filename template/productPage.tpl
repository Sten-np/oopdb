{extends file="template/layout.tpl"}

{block name="title"}
    GameHub | Products
{/block}

{block name="navmenu"}{/block}

{block name="productPage"}
    <style>
        .card {
            display: inline-block;
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

    <div class="row" style="padding-left: 1%"  >
        {foreach from=$products item=product}
            <div class="col-md-4" style="width: 25%; padding-top: 3%">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{$product.image}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{$product.productName}</h5>
                        <p class="card-price">{$product.price}</p>
                        <p class="card-text">{$product.description}</p>
                        <a href="index.php?action=moreInfo&product_id={$product.id}" class="btn btn-primary" style="background-color: orange; color: black; border: none">More Info</a>                    </div>
                </div>
            </div>
        {/foreach}

    </div>




{/block}