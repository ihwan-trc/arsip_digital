<?php

$id_arsip = $_GET['id'];
$sql = $conn->query("SELECT * FROM tb_arsip WHERE id_arsip = '$id_arsip'");
$data = $sql->fetch_assoc();
$file = $data['file_arsip'];
$folder = "file_arsip/";
unlink($folder . $file);

$delete = $conn->query("DELETE FROM tb_arsip WHERE id_arsip = '$id_arsip'");


if ($delete) {
?>
  <script>
    alert("Arsip berhasil dihapus");
    window.location.href = "?page=arsip";
  </script>
<?php
}
