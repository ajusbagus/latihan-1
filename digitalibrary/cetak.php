<h2 align="center">laporan peminjaman buku</h2>
<table border="1" cellspacing="0" cellpadding="5" width="100%">
    <tr>
        <th>no</th>
        <th>user</th>
        <th>buku</th>
        <th>tanggal peminjaman</th>
        <th>tanggal pengembalian</th>
        <th>status peminjaman</th>
    </tr>
    <?php
    include "koneksi.php";
    $i = 1;
    $query = mysqli_query($koneksi, "SELECT * FROM peminjaman LEFT JOIN user ON peminjaman.id_user = user.id_user LEFT JOIN buku ON buku.id_buku = peminjaman.id_buku");
    while ($data = mysqli_fetch_array($query)) {
        ?> 
        <tr>
            <td><?php echo $i++; ?></td> 
            <td><?php echo $data['nama']; ?></td> 
            <td><?php echo $data['judul']; ?></td> 
            <td><?php echo $data['tanggal_peminjaman']; ?></td> 
            <td><?php echo $data['tanggal_pengembalian']; ?></td> 
            <td><?php echo $data['status_peminjaman']; ?></td>
        </tr>
    <?php
    }
    ?>
</table>
<script>
    window.print();
    setTimeout(function()  {
        window.close();
    }, 100);
</script>
