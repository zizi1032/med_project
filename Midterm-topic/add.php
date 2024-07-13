<?php
$title = "新增列表";
$pageName = "larp_add";
require __DIR__ . '/db-connect.php';

?>

<?php include __DIR__ . '/parts/html-head.php' ?>
<?php include __DIR__ . '/parts/navbar.php' ?>

<div class="container">
  <div class="card col-8">
    <div class="card-body">
      <h5 class="card-title">新增列表</h5>
      <form method="post" onclick="sendData(event)" novalidate>
        <div class="mb-3 col-md-8">
          <label for="name" class="form-label">名稱</label>
          <input type="text" class="form-control" id="name" name="name" required>
          <div class="form-text"></div>
        </div>
        <div class="mb-3 col-md-6">
          <label for="img" class="form-label">圖片</label>
          <input class="form-control" type="file" id="img" name="img">
          <div class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="info" class="form-label">簡介</label>
          <input type="text" class="form-control" id="info" name="info">
          <div class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="desc" class="form-label">故事描述</label>
          <input type="text" class="form-control" id="desc" name="desc">
          <div class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="people" class="form-label">人數限制</label>
          <input type="text" class="form-control" id="people" name="people">
          <div class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="tag" class="form-label">類別</label>
          <input type="text" class="form-control" id="tag" name="tag">
          <div class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="time" class="form-label">時間</label>
          <input type="text" class="form-control" id="time" name="time">
          <div class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="loc" class="form-label">地點</label>
          <input type="text" class="form-control" id="loc" name="loc">
          <div class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">價格</label>
          <input type="number" class="form-control" id="price" name="price">
          <div class="form-text"></div>
        </div>
        <button type="submit" class="btn btn-primary">新增</button>
      </form>
    </div>
  </div>
</div>
</div>


<?php include __DIR__ . '/parts/scripts.php' ?>
<script>
  const sendData = e => {
    e.preventDefault();
  };
</script>

<?php include __DIR__ . '/parts/html-foot.php' ?>