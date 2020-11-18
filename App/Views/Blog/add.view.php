<div class="container">
    <div class="row">
        <div class="col">

            <form method="post" enctype='multipart/form-data'>
                <div class="form-group">
                    <label>Názov</label>
                    <input name="title" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Text</label>
                    <textarea name="text" class="form-control"></textarea>
                </div>



                <div id="content">

                    <form method="POST" enctype="multipart/form-data">
                        <input type="file" name="uploadfile" />
                        <div>
                            <button type="submit" name="upload"> UPLOAD  </button>

                        </div>
                    </form>
                </div>

            </form>









        </div>
    </div>
</div>