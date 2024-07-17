<?php
require __DIR__ . '/db-connect.php';
?>
<?php include __DIR__ . '/parts/html-head.php' ?>
<?php

$dir=__DIR__ .'/../uploads/';

?>


<form method="post" action="upload.php" name="form1" enctype="multipart/form-data" novalidate>
  <div class="mb-3 col-md-6">
    <label for="larp_img" class="form-label">圖片</label>
    <input class="form-control" type="file" id="larp_img" name="larp_img" accept="image/*">
    <div class="form-text"></div>
    <button type="submit" class="btn btn-primary">新增</button>
</form>
