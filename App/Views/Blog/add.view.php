<div class="container">
    <div class="row">
        <div class="col">

            <form method="post">
                <div class="form-group">
                    <label>Názov</label>
                    <input name="title" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Text</label>
                    <textarea name="text" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <form action="?c=blog&a=upload" method="post" enctype="multipart/form-data">
                        Select image to upload:
                        <input type="file" name="fileToUpload" id="fileToUpload"><br>
                        <button type="submit" class="btn btn-primary" value="Upload Image" name="submit">Potvrdiť</button>
                    </form>
                </div>






            </form>

        </div>
    </div>
</div>