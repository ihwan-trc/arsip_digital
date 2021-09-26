<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1>Form Tambah Arsip</h1>
      </div>
      <div class="col">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">General Form</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">

          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" enctype="multipart/form-data">
            <div class="card-body">
              <div class="form-group">
                <label>Nama File</label>
                <input type="text" class="form-control" name="nama_file" placeholder="Nama File">
              </div>
              <div class="form-group">
                <label for="file">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="file_arsip" id="file">
                    <label class="custom-file-label" for="file">Choose file</label>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" name="add" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>

<?php

if (isset($_POST['add'])) {
  $nama_file = $_POST['nama_file'];
  $file_arsip = $_FILES['file_arsip']['name'];
  $file_arsip_tmp = $_FILES['file_arsip']['tmp_name'];
  $created = date("Y-m-d");
  $upload_by = "Aris";

  $sql = $conn->query("INSERT INTO tb_arsip (nama_arsip, file_arsip, upload_by, created_at) VALUES ('$nama_file', '$file_arsip', '$upload_by', '$created')");

  move_uploaded_file($file_arsip_tmp, 'file_arsip/' . $file_arsip);

  if ($sql) {
?>
    <script>
      alert("Arsip berhasil ditambah");
      window.location.href = "?page=arsip";
    </script>
<?php
  }
}

?>