<h1 class="mt-4">laporan peminjaman buku</h1>
<div class="row">
    <div class="col-md-12">
    <a href="?page=peminjaman_tambah" class="btn btn_primary"> <i class="fa fa-plus"></i>tambah data</a>
        <table class="table table-bordered" id="datatable" width="100%" cellspacing="0">
            <tr>
                <th>no</th>
                <th>uaer</th>
                <th>buku</th>
                <th>tanggal peminjaman</th>
                <th>tanggal pengembalian</th>
                <th>status peminjaman</th>
                <th>aksi</th>
              
            </tr>
            <?php
$i = 1;
$query = mysqli_query($koneksi, "SELECT * FROM peminjaman LEFT JOIN user ON peminjaman.id_user = user.id_user LEFT JOIN buku ON buku.id_buku = peminjaman.id_buku where peminjaman.id_user=".$_SESSION['user']['id_user']);
while ($data = mysqli_fetch_array($query)) {
    ?> 
    <tr>
        <td><?php echo $i++; ?></td> 
        <td><?php echo $data['nama']; ?></td> 
        <td><?php echo $data['judul']; ?></td> 
        <td><?php echo $data['tanggal_peminjaman']; ?></td> 
        <td><?php echo $data['tanggal_pengembalian']; ?></td> 
        <td><?php echo $data['status_peminjaman']; ?></td>
        <td>
            <a href="?page=peminjam_ubah&id=<?php echo $data['id_peminjam'];?>" class="btn btn-info">ubah</a>
            <a onclick="return confirm('Apakah Anda yakin menghapus data ini?');" href="?page=peminjam_hapus&id=<?php echo $data['id_peminjam'];?>" class="btn btn-danger">hapus</a>
        </td>
    </tr>
                  

    <?php
}
?>

        </table>
    </div>
</div>