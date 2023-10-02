{extends file="template/layout.tpl"}

{block name="title"}
    GameHub | Product Details
{/block}

{block name="navmenu"}{/block}

{block name="moreInfoPage"}
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            {if isset($product) && !empty($product)}
{*                <div class="row gx-4 gx-lg-5 align-items-center">*}
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{$product[0].image}" alt="Product Image" /></div>
{*                    <div class="col-md-6">*}
{*                        <h1 class="display-5 fw-bolder">{$product[0].productName}</h1>*}
{*                        <div class="fs-5 mb-5">*}
{*                            <span>{$product[0].price}</span>*}
{*                        </div>*}
{*                        <p class="lead">{$product[0].description}</p>*}
{*                        <div class="d-flex">*}
{*                            <input class="form-control text-center me-3" id="inputQuantity" type="number" value="1" style="max-width: 4rem" />*}
{*                            <button class="btn btn-outline-light flex-shrink-0" type="button"><i class="bi-cart-fill me-1"></i>Add to cart</button>*}
{*                        </div>*}
{*                    </div>*}
{*                </div>*}
                <form method="POST" action="index.php?action=moreInfo">
                    <div class="d-flex">
                        <input class="form-control text-center me-3" name="quantity" type="number" value="1" style="max-width: 4rem" />
                        <input type="hidden" name="productId" value="{$product[0].id}" />
                        <input type="hidden" name="productName" value="{$product[0].productName}" />
                        <input type="hidden" name="price" value="{$product[0].price}" />
                        <button class="btn btn-outline-light flex-shrink-0" type="submit"><i class="bi-cart-fill me-1"></i>Add to cart</button>
                    </div>
                </form>
            {else}
                <p>No product information available.</p>
            {/if}
        </div>
    </section>

{*    <!-- Related items section -->*}
{*    <!-- Related items section -->*}
{*    <section class="py-5 bg-dark">*}
{*        <div class="container px-4 px-lg-5 mt-5">*}
{*            <h2 class="fw-bolder mb-4">Related Xbox products</h2>*}
{*            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">*}
{*                {foreach from=$xboxProducts item=relatedProduct}*}
{*                    <div class="col mb-5">*}
{*                        <div class="card h-100">*}
{*                            <!-- Product image -->*}
{*                            <img class="card-img-top" src="{$relatedProduct.image}" alt="..." />*}
{*                            <!-- Product details -->*}
{*                            <div class="card-body p-4">*}
{*                                <div class="text-center">*}
{*                                    <!-- Product name -->*}
{*                                    <h5 class="fw-bolder">{$relatedProduct.productName}</h5>*}
{*                                    <!-- Product price -->*}
{*                                    {$relatedProduct.price}*}
{*                                </div>*}
{*                            </div>*}
{*                            <!-- Product actions -->*}
{*                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">*}
{*                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>*}
{*                            </div>*}
{*                        </div>*}
{*                    </div>*}
{*                {/foreach}*}
{*            </div>*}
{*        </div>*}
{*    </section>*}

    <!-- Add more related product cards here -->
                <!-- Example of another related product card -->
{*                <div class="col mb-5">*}
{*                    <div class="card h-100">*}
{*                        <!-- Product image -->*}
{*                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />*}
{*                        <!-- Product details -->*}
{*                        <div class="card-body p-4">*}
{*                            <div class="text-center">*}
{*                                <!-- Product name -->*}
{*                                <h5 class="fw-bolder">Another Related Product</h5>*}
{*                                <!-- Product reviews -->*}
{*                                <div class="d-flex justify-content-center small text-warning mb-2">*}
{*                                    <div class="bi-star-fill"></div>*}
{*                                    <div class="bi-star-fill"></div>*}
{*                                    <div class="bi-star-fill"></div>*}
{*                                    <div class="bi-star-fill"></div>*}
{*                                    <div class="bi-star-fill"></div>*}
{*                                </div>*}
{*                                <!-- Product price -->*}
{*                                $30.00*}
{*                            </div>*}
{*                        </div>*}
{*                        <!-- Product actions -->*}
{*                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">*}
{*                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>*}
{*                        </div>*}
{*                    </div>*}
{*                </div>*}
{*            </div>*}
{*        </div>*}
{*    </section>*}
{/block}
