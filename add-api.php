<?php

require __DIR__ .'/db-connect.php';

header('Content-Type: application/json');

// echo json_encode($_POST);
$output = [
  'success' => false,
  'bodyData' => $_POST, #除錯用
  // 'file' => '',
];


//表單欄位的資料檢查

//避免sql injection

/*if (!empty($_FILES) && !empty($_FILES['larp_img'])) {
  $uploadDir = __DIR__ . '/../uploads/';
  $uploadFile = $uploadDir . basename($_FILES['larp_img']['name']);

  if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
  }

  if (move_uploaded_file($_FILES['larp_img']['tmp_name'], $uploadFile)) {
    $output['success'] = true;
    $output['file'] =
    'uploads/' . basename($_FILES['larp_img']['name']);
  } else {
    $output['error'] = 'File upload failed.';
    echo json_encode($output);
    exit;
  }
}*/


$sql = "INSERT INTO `LARPLIST`(
`larp_name`,`larp_img`,`larp_info`,
`larp_desc`,`larp_people`,`larp_tag_id`,
`larp_date`,`larp_loc`,`larp_price`
) VALUES (
?,?,?,
?,?,?,
?,?,?)
";

$stmt=$pdo->prepare($sql);
$stmt->execute([
  $_POST['larp_name'],
  $_POST['larp_img'],
  $_POST['larp_info'],
  $_POST['larp_desc'],
  $_POST['larp_people'],
  $_POST['larp_tag_id'],
  $_POST['larp_date'],
  $_POST['larp_loc'],
  $_POST['larp_price'],
]);

$output['success'] = !!$stmt->rowCount();
echo json_encode($output);