<?php /** @var Array $data */
/** @var \App\Models\Item $item */
$item = $data['items'];
?>

<div class="container">
    <div class="row">
        <div class="col">

            <form method="post">
                <div class="form-group">
                    <label>Titulok</label>
                    <input name="title" type="text" class="form-control" value="<?=$item->getTitle()?>" pattern="^[A-Z].*$">
                </div>
                <div class="form-group">
                    <label>Text</label>
                    <textarea name="text" class="form-control"><?=$item->getText()?></textarea>
                </div>


                <div id="content">

                    <form method="POST" enctype="multipart/form-data">
                        <div>
                            <button type="submit" name="edit"> EDIT  </button>

                        </div>
                    </form>
                </div>







            </form>

        </div>
    </div>
</div>