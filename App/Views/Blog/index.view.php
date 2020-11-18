<?php /** @var Array $data */ ?>





<div class="web-content">
    <div class="container">
        <h2> Naša práca </h2>
        <a href="?c=blog&a=add"><button>Pridať položku</button></a>
        <?php
        /** @var $article
         *
         */

        $numOfCols = 4;
        $rowCount = 0;
        $bootstrapColWidth = 12 / $numOfCols;
        $target_dir = "uploads/";

        foreach ($data['articles'] as $article) {
            $target_file = $target_dir . $article->getFilename();
         ?>

            <div class="card" style="width: 30rem; height: 35rem;">
                <h5 class="card-title"><?=$article->getTitle()?></h5>
                <?php if($article->getFilename() != null)  {  ?>
                <div class="pricelist">
                     <img src='<?php echo $target_file; ?>' class="card-img-top" alt="...">
                </div>
                <?php } ?>
                <div class="card-body">
                    <p class="card-title"><?=$article->getText()?></p>
                    <a href="?c=blog&a=edit&id=<?=$article->getId()?>" class="btn btn-primary btn-sm" id="right-panel-link">Editovať</a>
                    <a href="?c=blog&a=delete&id=<?=$article->getId()?>" class="btn btn-danger btn-sm" id="left-panel-link">Zmazať</a>
                </div>
            </div>


        <?php
        }
        ?>

    </div>




</div>


