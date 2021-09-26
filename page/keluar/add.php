<form action="" method="post">
  <textarea name="isi_keluar" id="sample" cols="150" rows="20"></textarea>
  <button type="submit" name="add" class="btn btn-primary my-3">Submit</button>
</form>

<?php
if (isset($_POST['add'])) {
  $isi_keluar = $_POST['isi_keluar'];
  $write_by = "Aris";
  $created_at = date("Y-m-d");

  var_dump($isi_keluar);
  die;

  $sql = $conn->query("INSERT INTO tb_keluar (isi_keluar,writen_by,created_at) VALUES ('$isi_keluar','$write_by','$created_at')");



  if ($sql) {
?>
    <script>
      alert("Surat Keluar berhasil ditambah");
      window.location.href = "?page=keluar";
    </script>
<?php
  }
}
?>