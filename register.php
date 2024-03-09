<?php
 include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Halaman Registrasi</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        #background-video {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1000;
        }
    </style>
    <body class="bg-secondary">
    <video id="background-video" loop muted autoplay>
        <source src="assets/img/video1.mp4" type="video/mp4">
    </video>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                   <div class="container">
                    <div class="content">
                        <div class="card" style="margin-top: 1rem;">
                            <div class="row  m-3">
                                <div class="col mb-3 mt-3">
                                <h2>Registrasi Perpustakaan Online : </h2>
                                    <?php
                                        if(isset($_POST['register'])) {
                                            $nama = $_POST['nama'];
                                            $email = $_POST['email'];
                                            $alamat = $_POST['alamat'];
                                            $no_telepon = $_POST['no_telepon'];
                                            $username = $_POST['username'];
                                            $level = $_POST['level'];
                                            $password = md5($_POST['password']);

                                            $insert = mysqli_query($koneksi, "INSERT INTO user(nama,email,alamat,no_telepon,username,password,level)VALUES('$nama','$email','$alamat','$no_telepon','$username','$password','$level')");

                                            if($insert){
                                                echo '<script>alert("Selamat, Register Berhasil, Silahkan Login");location.href="login.php";</script>';
                                            }else{
                                                echo '<script>alert("Register Gagal, Silahkan Ulangi Kembali");</script>';
                                            }
                                        }
                                        ?>
                                <form method="post">
                                            <div class="form-group">
                                                <label class="small mb-1">Nama Lengkap</label>
                                                <input class="form-control py-3"  type="text" required name="nama" placeholder="Masukkan Nama Lengkap" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Username</label>
                                                <input class="form-control py-3"  type="text" required name="username" placeholder="Masukkan Username" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Password</label>
                                                <input class="form-control py-3"  type="password" required name="password" placeholder="Masukkan Password" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Email</label>
                                                <input class="form-control py-3"  type="text" required name="email" placeholder="Masukkan Email" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Alamat</label>
                                                <textarea class="form-control py-3"  type="text" required name="alamat" placeholder="Masukkan Alamat"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Nomor Telepon (Whatssap Recommended)</label>
                                                <input class="form-control py-3"  type="text" required name="no_telepon" placeholder="Masukkan Nomor Telepon" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Registrasi Sebagai :</label>
                                                <select class="form-select" aria-label="Default select example" name="level">
                                                <option selected>Tipe Akun</option>
                                                <option value="admin">Admin</option>
                                                <option value="peminjam">Peminjam</option>
                                                
                                                </select>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                
                                                <button class="btn btn-primary" type="submit" name="register" value="register">Register</button>
                                            </div>
                                        </form>
                                <p class="mt-3">Jika Sudah Belum Memiliki Akun Klik : <a href="login.php" class="btn btn-warning text-white">Login</a></p>
                                </div>
                                <div class="col">
                                    <dotlottie-player src="https://lottie.host/03c245bb-af9e-4d66-a129-1e9ff780971b/yxeAYbOoQu.json" background="transparent" speed="1"  loop autoplay></dotlottie-player>
                                </div>
                            </div>
                        </div>
                    </div>
                   </div>
                </main>
            </div>
        </div>
        <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>





       
                                        
                                        
                                  