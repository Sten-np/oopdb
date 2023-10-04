{extends file="template/layout.tpl"}

{block name="title"}
    GameHub | Products
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
            display: flex;
        }

        .priceFilter{
            margin: 5px;
        }

        /* Style for the filter title */
        .filter-title {
            display: flex;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* Style for individual category checkboxes */
        .category-checkbox {
            display: flex;
            gap: 10px;
            justify-content: flex-start;
            margin-right: 10px;
        }

        /* Define a two-column layout */
        .two-column-layout {
            display: flex;
            flex-wrap: wrap;
        }

        /* Style for the left column (category filter) */
        .left-column {
            padding: 1%;
            background-color: #333;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-right: 5%; /* Adjust the margin as needed */
        }

        /* Style for the right column (product cards) */
        .grid-column {
            display: grid;
            grid-template-columns: auto auto auto;
            gap: 50px;
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
    <div class="two-column-layout">
        <div class="left-column">

            {* This is the category filter *}
            <section class="category-filter">
                <form action="index.php?action=filterPage" method="POST">
                    <h3 class="filter-title">Filter by Category</h3>
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
                        <input id="minPrice" type="number" name="minPrice" placeholder="Min Price"><br>
                        <input id="maxPrice" type="number" name="maxPrice" placeholder="Max Price">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Apply Filter</button>
                </form>
            </section>
        </div>
    <div class="grid-column">
    {foreach from=$products item=product}
            <div class="col-md-4" style="width: 25%; padding-top: 3%">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{$product.image}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{$product.productName}</h5>
                        <p class="card-price">{$valuta}{$product.price}</p>
                        <p class="card-text">{$product.description}</p>
                        <a href="index.php?action=moreInfo&product_id={$product.id}" class="btn btn-primary" style="background-color: orange; color: black; border: none">More Info</a>                    </div>
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