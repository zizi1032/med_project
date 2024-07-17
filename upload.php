<?php

header('Content-Type: application/json');

// echo json_encode([
//   '_POST' => $_POST,
//   '_FILES' => $_FILES,
// ]);


$output1 = [
  'success' => false,
  'file' => '',
  'error' => ''
];

if(!empty($_FILES) && !empty($_FILES['larp_img'])){
  $uploadDir = __DIR__ . '/../uploads/';
  $uploadFile=$uploadDir.basename($_FILES['larp_img']['name']);

  if (move_uploaded_file($_FILES['larp_img']['tmp_name'], $uploadFile)) {
    $output1['success'] = true;
    $output1['file'] = $uploadFile;
  } else {
    $output1['error'] = 'File upload failed.';
  }
}

echo json_encode($output1);


