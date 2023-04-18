<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Lesen der Daten aus dem Formular
  $title = $_POST['title'];
  $text = $_POST['text'];
  $image_name = $_FILES['image']['name'];
  $image_tmp_name = $_FILES['image']['tmp_name'];

  // Speichern des hochgeladenen Bildes
  $upload_dir = 'uploads/';
  $image_path = $upload_dir . $image_name;
  move_uploaded_file($image_tmp_name, $image_path);

  // Laden des HTML-Templates
  $template = file_get_contents('template.html');

  // Ersetzen der Platzhalter im Template mit den eingegebenen Daten
  $template = str_replace('%title%', $title, $template);
  $template = str_replace('%text%', $text, $template);
  $template = str_replace('%image%', $image_path, $template);

  // Setzen der Content-Type-Header-Informationen
  header('Content-Type: text/html');

  // Senden des fertigen HTML-Templates an den Client
  echo $template;
}
?>