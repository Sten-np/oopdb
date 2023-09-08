{extends file="template/layout.tpl"}

{block name="title"}
  GameHub | Products
{/block}

{block name="navmenu"}{/block}

{block name="productPage"}

  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <div class="jumbotron text-center">
    <h1>Product</h1>
    <p>All our products </p>
  </div>


  <body>
  <section class="card-position">
    <article >
  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="img/GameHub.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Super Mario Bros</h5>
      <p class="card-text">€60,-</p>
      <p class="card-text">So Long Gay Bowser!</p>
      <a href="#" class="btn btn-primary">Buy Now!</a>
    </div>
    </article>
    <article>
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="..." alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </article>
    <article>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </article>
  </section>
  </div>
  </body>
{/block}
