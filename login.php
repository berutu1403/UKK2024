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
        <title>Halaman login</title>
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
    <body class="bg-success">
<video id="background-video" loop muted autoplay>
        <source src="assets/img/video3.mp4" type="video/mp4">
    </video>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                   <div class="container">
                    <div class="content">
                        <div class="card" style="margin-top: 6rem;">
                            <div class="row  m-3">
                                <div class="col mb-3 mt-3">
                                <h2>Login Ke perpustakaan digital</h2>
                                <?php
                                        if(isset($_POST['login'])) {
                                            $username = $_POST['username'];
                                            $password = md5($_POST['password']);

                                            $data = mysqli_query($koneksi, "SELECT * FROM user where username='$username' and password='$password'");
                                            $cek = mysqli_num_rows($data);
                                            if($cek > 0){
                                                $_SESSION['user'] = mysqli_fetch_array($data); 
                                                echo '<script>alert("Selamat datang, Login berhasil"); location.href="index.php";</script>';
                                            }else{
                                                echo '<script>alert("Maaf, Username atau Password salah")</script>';
                                            }
                                        }
                                        ?>
                                <form method="post">
                                    <div class="form-floating mb-3">
                                        <input class="form-control"  type="text" name="username" placeholder="username" />
                                        <label for="inputUsername">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                        <input class="form-control"  type="password" name="password" placeholder="Password" />
                                        <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button class="btn btn-primary" type="submit" name="login" value="login">Login</button>
                                        <p class="mb-2"><a class="btn btn-warning" href="register.php">Register</a>
                                    </div>
                                </form>
                                    </div>
                                <div class="col">
                                <dotlottie-player src="https://lottie.host/1a800397-26ed-4359-a83a-fd28c7c8f7e9/QljxmlG9VW.json" background="transparent" speed="1"  loop autoplay></dotlottie-player>
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
