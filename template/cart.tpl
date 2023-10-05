{extends file="template/layout.tpl"}

{block name="title"}
    GameHub | Shopping Cart
{/block}


{block name="cartPage"}
    <section class="h-100 h-custom" >
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h1 class="fw-bold mb-0">Shopping Cart</h1>
                                            <h6 class="mb-0 text-muted">Items</h6>
                                        </div>
                                        <hr class="my-4">
                                        {foreach $products as $product}

                                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                                            <div class="col-md-2 col-lg-2 col-xl-2">
                                                <img class="img-fluid rounded-3" alt="product" src="{$product.image}">
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-3">
                                                <h6 class="text-muted">{$product.productName}</h6>
                                                <h6 class="text-muted mb-0">{$product.description}</h6>
                                            </div>
                                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">


                                            </div>
                                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                <h6 class="mb-0">${$product.price}</h6>
                                            </div>
                                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                            </div>

                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <form action="index.php?action=removeProduct" method="post">
                                                        <input type="hidden" name="productId" value="{$product.id}">
                                                        <button type="submit" class="btn btn-link text-muted" style="padding: 0; border: none; background: none;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </div>

                                        </div>
                                        {/foreach}
                                        <hr class="my-4">

                                        <div class="pt-5">
                                            <button type="button" class="btn btn-warning" style="background-color: orange"><a style="text-decoration: none; color: inherit" href="index.php?action=productPage">Back to Shop</a></button>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4 bg-grey">
                                    <div class="p-5">
                                        <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                                        <hr class="my-4">

{*                                        <div class="d-flex justify-content-between mb-4">*}
{*                                            <h5 class="text-uppercase">Items</h5>*}
{*                                            <h5>Total price</h5>*}
{*                                        </div>*}

                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase">Price excl VAT: &euro; {$priceNoVat}</h5>
                                        </div>



                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase">Total price</h5>
                                            <h5>&euro; {$totalCost}</h5>
                                        </div>

                                        <form method="post" action="index.php?action=processorder">
                                            <input type="hidden" value="{$totalCost}" name="TotalAmount">
                                            <br>
                                            <input type="submit" name="submitorder" value="Checkout">
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


{/block}
