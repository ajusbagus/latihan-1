<?php
        $id = $_GET['id'];
        $query =mysqli_query($koneksi,"DELETE FROM kategori where id_kategori=$id");
?>
<script>
    alert('hapus data berhasil');
    location.href = "index.php?page=kategori"
</script>