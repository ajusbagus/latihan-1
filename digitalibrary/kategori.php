<h1 class="mt-4">kategori</h1>
<div class="row">
    <div class="col-md-12">
        <a href="?page=kategori_tambah" class="btn btn_primary">+ tambah data</a>
        <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
            <tr>
                <th>no</th>
                <th>nama kategori</th>
                <th>aksi</th>
            </tr>
                <?php
                $i = 1;
                $query = mysqli_query($koneksi, "SELECT*FROM kategori");
                while($data = mysqli_fetch_array($query)){
                  ?> 
                <tr>
                  <td><?php echo $i++; ?></td> 
                  <td><?php echo $data['kategori']; ?></td> 

                  <td>
                  <a href="?page=kategori_ubah&id=<?php echo $data['id_kategori'];?>" class="btn btn-info">ubah</a>
                  <a onclick="return confirm('Apakah Anda yakin menghapus data ini?');" href="?page=kategori_hapus&id=<?php echo $data['id_kategori'];?>" class="btn btn-danger">hapus</a>
                  </td>

                </tr>
                <?php
                }
                ?>
        </table>
    </div>
</div>