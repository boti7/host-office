<?php
if (isset($_SERVER['HTTP_ORIGIN']) &&
    in_array($_SERVER['HTTP_ORIGIN'], array('http://localhost:3000', 'http://hboti.luzsiadam.hu'))) {
  header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
  header('Access-Control-Allow-Credentials: true');
  header('Access-Control-Max-Age: 86400');
}

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
  if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

  if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
    header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

  exit(0);
}

function error404() {
  http_response_code(404);
  echo "404 not found";
}

function sendEmail($name, $emailAddr, $message) {
  $to = 'job@hostoffice.eu';
  $subject = 'Webes üzenet';
  $headers = 'From: ' . filter_var($name, FILTER_SANITIZE_EMAIL) . ' <noreply@hostoffice.eu>' . "\r\n" .
      'Reply-To: ' . filter_var($emailAddr, FILTER_SANITIZE_EMAIL) . "\r\n" .
      'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);
}

function handleMessage() {
  if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    http_response_code(400);
    return;
  }

  $json = file_get_contents('php://input');
  $obj = json_decode($json);

  sendEmail($obj->name, $obj->email, $obj->message);
}

if (!isset($_GET['action'])) {
  error404();
  die();
}

$action = $_GET['action'];

switch ($action) {
  case 'message':
    handleMessage();
    break;
  default:
    error404();
}
?>
