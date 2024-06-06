
<?php
include "koneksi.php";

    if(isset($_POST['register'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $no_telpon = $_POST['no_telpon'];
        $username = $_POST['username'];
        $level = $_POST['level'];
        $password = ($_POST['password']); 
        
        $insert = mysqli_query($koneksi, "INSERT INTO user(nama,email,alamat,no_telpon,username,password,level) VALUES('$nama','$email','$alamat','$no_telpon','$username','$password','$level')");

        if($insert){
            echo '<script>alert("Selamat, registrasi berhasil. Silahkan login."); location.href="login.php";</script>';
        } else {
            echo '<script>alert("Registrasi gagal, silahkan coba kembali.");</script>';
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>register ke perpustakaan digital</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">register perpustakaan digital</h3></div>
                                    <div class="card-body">
                     

                                        <form method="post" class="user">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" required name="nama" placeholder="masukan nama lengkap" />
                                                <label>nama lengkap</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" required name="email" placeholder="masukan email" />
                                                <label>email</label>
                                             </div>
                                            <div class="form-group">
                                                <label class="small mb-1">alamat</label>
                                                <textarea name="alamat" rows="5" class="form-control py-4"></textarea>
                                            </div>


                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" required name="no_telpon" placeholder="masukan no.telpon" />
                                                <label>no. telpon</label>
                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" required name="username" placeholder="masukan username" />
                                                <label>username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="password"required name="password" placeholder="masukan Password" />
                                                <label>Password</label>
                                            </div>
                                            </div>
                                            <div class="form-grup">
                                                <label class="small mb-1">level</label>
                                                <select name="level" required class="from-select-py-4">
                                                    <option value="peminjam">peminjam</option>
                                                    <option value="admin">admin</option>
                                                </select>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" name="register" value="register" >register</button>
                                                <a class="btn btn-primary"href="login.php">login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small">
                                            @copy;2024 perpustakaan digital
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>