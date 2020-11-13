<?php /** @var Array $data */ ?>


<div class="container">
    <h2> Clanky </h2>
    <a href="?c=blog&a=add" class="btn btn-primary">Pridať položku</a>
    <?php
     $pocitadlo = 0;
    /** @var $article */
    foreach ($data['articles'] as $article) {
     ?>




    <div class="card" style="width: 30rem; height: 30rem;">
        <div class="card-body">
            <h5 class="card-title"><?=$article->getTitle()?></h5>
            <a href="?c=blog&a=edit&id=<?=$article->getId()?>" class="btn btn-primary btn-sm">Editovať</a>
            <a href="?c=blog&a=delete&id=<?=$article->getId()?>" class="btn btn-danger btn-sm">Zmazať</a>
            <p class="card-title"><?=$article->getText()?></p>

        </div>
    </div>


    <?php
    }
    ?>
</div>
