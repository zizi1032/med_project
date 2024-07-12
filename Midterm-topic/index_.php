<?php
require __DIR__ . '/db-connect.php';

$title = '密室逃脫/劇本殺';
$pageName = 'LARPLIST';
$perPage = 10;

// $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$page = 1;

$larp_sql = "SELECT COUNT(1) FROM larplist";
$totalRows = $pdo->query($larp_sql)->fetch(PDO::FETCH_NUM)[0];
# 計算總頁數
$totalPage = ceil($totalRows / $perPage);


?>
<?php include __DIR__ . "/parts/html-head.php"; ?>
<?php include __DIR__ . "/parts/navbar.php"; ?>

<div class="container">
  <div>$totalRows: <?= $totalRows ?></div>
  <div>$totalPage: <?= $totalPage ?></div>
</div>

<?php include __DIR__ . '/parts/scripts.php'; ?>
<?php include __DIR__ . '/parts/html-foot.php';
