<?php /** @var Array $data */ ?>


<div class="container">
    <h2 align="center"> Naša práca </h2>
    <?php
    /** @var $article
     *
     */

    $target_dir = "uploads/";
    $pocitadlo = 0;
    foreach ($data['items'] as $item) {

        $target_file = $target_dir . $item->getFilename();
            if ($pocitadlo%2 == 0) { ?>
                    <div class="row">
            <?php } ?>

            <div class="column">
                <div class="card" style="width: 30rem; height: 35rem;">
                    <h5 class="card-title"><?=$item->getTitle()?></h5>
                    <?php if($item->getFilename() != null)  {  ?>
                    <div class="pricelist">
                         <img src='<?php echo $target_file; ?>' class="card-img-top" alt="...">
                    </div>
                    <?php } ?>
                    <div class="card-body">
                        <p class="card-title"><?=$item->getText()?></p>
                        <a href="?c=pricelist&a=edit&id=<?=$item->getId()?>" class="btn btn-primary btn-sm" id="right-panel-link">Editovať</a>
                        <a href="?c=pricelist&a=delete&id=<?=$item->getId()?>" class="btn btn-danger btn-sm" id="left-panel-link">Zmazať</a>
                    </div>
                </div>
            </div>

            <?php
                if ($pocitadlo%2 == 1) { ?>
                 </div>

    <?php
                             }
        $pocitadlo++;
    }
    ?>

     <?php if ($pocitadlo%2 == 1) { ?> </div>  <?php } ?>



</div>

<div class="horizontally-center">
        <a href="?c=pricelist&a=add"><button>Pridať položku</button></a>
</div>





