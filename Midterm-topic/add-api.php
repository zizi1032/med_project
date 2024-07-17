<?php

require __DIR__ .'/db-connect.php';

header('Content-Type: application/json');


$output = [
  'success' => false,
  'bodyData' => $_POST,
];



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