<?php
include "./template/header.php";
?>


<!-- mx-auto -->
<div class="col-sm-12 bg-dark p-3 border"><p class="text-white">Upload multiple photos</p></div>

<div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-8 col-xl-6 mx-auto">
                <form action="./handlers/insert.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="file" name="image[]" multiple class="form-control">    
                </div>
                <div class="mb-3">
                        <input type="submit" name="submit" class="form-control btn btn-primary btn-lg" value="send">
                </div>
                </form>
            </div>
        </div>
</div>

<?php
include "./template/footer.php";
?>