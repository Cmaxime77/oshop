<h1>Chaussure #<?php echo $viewVars['id'] ?></h1>

<p>Infos sur la chaussure</p>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus sit, iste eligendi asperiores, corrupti voluptas numquam quia fugit, culpa beatae impedit itaque. Inventore tempore rerum dolores aspernatur optio voluptatem non!</p>

<form action="<?php echo $router->generate('cart-add') ?>" method="post">
    <button type="submit">Ajouter au panier</button>
</form>