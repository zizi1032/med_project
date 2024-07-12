<?php
require __DIR__ . '/db-connect.php';

$title = '密室逃脫/劇本殺';
$pageName = 'LARPLIST';
$perPage = 10;

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$larp_sql = "SELECT COUNT(1) FROM larplist";
$totalRows = $pdo->query($larp_sql)->fetchAll(PDO::FETCH_ASSOC)[0];
# 計算總頁數
$totalPage = ceil($totalRows / $perPage);


// $sql = sprintf(
//   "SELECT *
//   FROM LARPLIST ll 
//   JOIN LARPTAG lt ON ll.larp_id=lt.larp_id
//   JOIN TAGLIST tl ON lt.tag_id=tl.tag_id
//   ORDER BY ll.larp_id;"
// );

/*$rows = [];
$rows = $pdo->query($sql)->fetchAll();

?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>

<!-- 表格主體 -->
<div class="container">
  <div class="row">
    <div class="col">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">編號</th>
            <th scope="col-2">圖片</th>
            <th scope="col-2">名稱</th>
            <th scope="col-2">簡介</th>
            <th scope="col-1">價格</th>
            <th scope="col-1">人數限制</th>
            <th scope="col-1">類型</th>
            <th scope="col-1">時間</th>
            <th scope="col-2">地點</th>

          </tr>
        </thead>
        <tbody>
          <?php foreach ($rows as $r) : ?>
            <tr>
              <td><?= $r['ll.larp_id'] ?></td>
              <td><?= $r['ll.larp_img'] ?></td>
              <td><?= $r['ll.larp_name'] ?></td>
              <td><?= $r['ll.larp_info'] ?></td>
              <td><?= $r['ll.larp_price'] ?></td>
              <td><?= $r['ll.larp_people'] ?></td>
              <td><?= $r['tl.tag_name'] ?></td>
              <td><?= $r['ll.larp_date'] ?></td>
              <td><?= $r['ll.larp_loc'] ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
*/
?>
<div class="container">
  <pre>
    <?php
    echo $totalRows;
    ?>
  </pre>
  <div>$totalRows: <?= $totalRows ?></div>
  <div>$totalPage: <?= $totalPage ?></div>
</div>

<?php include __DIR__ . '/parts/scripts.php'; ?>
<?php include __DIR__ . '/parts/html-foot.php';
