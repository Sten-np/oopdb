{extends file="template/layout.tpl"}

{block name="title"}
    GameHub | Search
{/block}

{block name="productPage"}
    <style>
        .card {
            display: inline-block;
        }

        .card-img-top {
            height: 225px;
            width: 290px;
        }

        .category-filter {
            display: grid;
            justify-content: center;
            background-color: #333;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Style for the filter title */
        .filter-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* Style for individual category checkboxes */
        .category-checkbox {
            margin-right: 10px;
        }
    </style>


    {* This is the category filter *}
    <section class="category-filter">
        <h3 class="filter-title">Filter by Category</h3>
        <form action="index.php?action=filterPage" method="POST">
            <label class="category-checkbox">
                <input type="checkbox" name="nintendoForm" value="Nintendo"> Nintendo
            </label>
            <label class="category-checkbox">
                <input type="checkbox" name="playstationForm" value="Playstation"> Playstation
            </label>
            <label class="category-checkbox">
                <input type="checkbox" name="xboxForm" value="Xbox"> Xbox
            </label>
            <label class="category-checkbox">
                <input id="priceForm" type="checkbox" name="priceForm" value="price" onclick="togglePriceFilters()"> Price
            </label>
            <!-- Add price input fields if Price is selected -->
            <div id="priceFilter" class="priceFilter" style="display: none;">
                <input id="minPrice" type="number" name="minPrice" placeholder="Min Price">
                <input id="maxPrice" type="number" name="maxPrice" placeholder="Max Price">
            </div>
            <button type="submit" class="btn btn-primary">Apply Filter</button>
        </form>
    </section>


    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
        <div class="col-md-6 p-lg-5 mx-auto my-5">
            <h3 class="display-3 fw-bold"><img src="../img/GameHub.png" style="height: 100%; width: 40%; object-fit: contain;"></h3>
            <div class="d-flex gap-3 justify-content-center lead fw-normal">
                <a class="icon-link" href="#">
                </a>
            </div>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>


    <div class="row" style="padding-left: 1%">
        {foreach from=$products item=product}
            <div class="col-md-4" style="width: 25%; padding-top: 3%">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{$product.image}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{$product.productName}</h5>
                        <p class="card-price">{$product.price}</p>
                        <p class="card-text">{$product.description}</p>
                        <a href="index.php?action=moreInfo&product_id={$product.id}" class="btn btn-primary" style="background-color: orange; color: black; border: none">More Info</a>
                    </div>
                </div>
            </div>
        {/foreach}

        <script>
                function togglePriceFilters() {
                    var priceFilters = document.getElementById("priceFilter");

                    if (priceFilters.style.display === "none" || priceFilters.style.display === "") {
                        priceFilters.style.display = "block";
                    } else {
                        priceFilters.style.display = "none";
                    }

                }
            </script>
    </div>
{/block}
