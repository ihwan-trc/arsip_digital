<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Data Arsip</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active">Arsip Digital</li>
    </ol>
  </div>
</div>
</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <a href="?page=arsip&action=add" class="btn btn-outline-primary btn-sm"> <i class="fa fa-pencil-alt"></i> Tambah</a>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="card-body">
      <table id="example1" class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Arsip</th>
            <th>File Arsip</th>
            <th>Diupload</th>
            <th>Tanggal</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          $sql = $conn->query("SELECT * FROM tb_arsip");
          foreach ($sql as $key => $value) :
          ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $value['nama_arsip']; ?>
              </td>
              <td><a href="view.php?file=<?= $value['file_arsip']; ?>" target="blank"><?= $value['file_arsip']; ?></a></td>
              <td><?= $value['upload_by']; ?></td>
              <td><?= $value['created_at']; ?></td>
              <td>
                <a href="?page=arsip&action=edit&id=<?= $value['id_arsip']; ?>">Edit</a>
                <a href="?page=arsip&action=delete&id=<?= $value['id_arsip']; ?>">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->