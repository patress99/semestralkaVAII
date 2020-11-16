<?php /** @var Array $data */ ?>


<div class="container">
    <h2> Clanky </h2>
    <a href="?c=blog&a=add" class="btn btn-primary">Pridať položku</a>
    <?php
    /** @var $article
     *
     */

    $target_dir = "uploads/";

    foreach ($data['articles'] as $article) {
        $target_file = $target_dir . $article->getFilename();
     ?>



    <div class="card" style="width: 30rem; height: 35rem;">
        <h5 class="card-title"><?=$article->getTitle()?></h5>
        <img src='<?php echo $target_file; ?>' class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-title"><?=$article->getText()?></p>
            <a href="?c=blog&a=edit&id=<?=$article->getId()?>" class="btn btn-primary btn-sm">Editovať</a>
            <a href="?c=blog&a=delete&id=<?=$article->getId()?>" class="btn btn-danger btn-sm">Zmazať</a>
        </div>
    </div>








    <?php
    }
    ?>
</div>
