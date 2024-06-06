<h1 class="mt-4">kategori</h1>
<div class="row">
    <div class="col-md-12">
        <a href="?page=buku_tambah" class="btn btn_primary">+ tambah data</a>
        <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
            <tr>
                <th>no</th>
                <th>nama kategori</th>
                <th>judul</th>
                <th>penulis</th>
                <th>penerbit</th>
                <th>tahun terbit</th>
                <th>deskripsi</th>
                <th>aksi</th>
            </tr>
            <?php
$i = 1;
$query = mysqli_query($koneksi, "SELECT * FROM buku LEFT JOIN kategori ON buku.id_kategori = kategori.id_kategori");
while ($data = mysqli_fetch_array($query)) {
?>

                <tr>
                  <td><?php echo $i++; ?></td> 
                  <td><?php echo $data['kategori']; ?></td> 
                  <td><?php echo $data['judul']; ?></td> 
                  <td><?php echo $data['penulis']; ?></td> 
                  <td><?php echo $data['penerbit']; ?></td> 
                  <td><?php echo $data['tahun_terbit']; ?></td>
                  <td><?php echo $data['deskripsi']; ?></td> 
                


                  <td>
                  <a href="?page=buku_ubah&id=<?php echo $data['id_buku'];?>" class="btn btn-info">ubah</a>
                  <a onclick="return confirm('Apakah Anda yakin menghapus data ini?');" href="?page=buku_hapus&id=<?php echo $data['id_buku'];?>" class="btn btn-danger">hapus</a>
                  </td>

                </tr>
                <?php
                }
                ?>
        </table>
    </div>
</div>