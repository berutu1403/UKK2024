<h1 class="mt-4">Dashboard</h1>

<div class="card">
  <div class="card-body">
   <table class="table table-bordered">
   <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
   <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="assets/img/10.png" class="d-block w-100" alt="" height="500" width="500">
    </div>
    <div class="carousel-item">
    <img src="assets/img/11.png" class="d-block w-100" alt="" height="500" width="500">
    </div>
    <div class="carousel-item">
    <img src="assets/img/12.png" class="d-block w-100" alt="" height="500" width="500">
    </div>
    <div class="carousel-item">
    <img src="assets/img/13.png" class="d-block w-100" alt="" height="500" width="500">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </table>
</div>
</div>

                      <div class="col mt-3">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    
                                    <tr>
                                        <td width="200">Nama</td>
                                        <td width="1">:</td>
                                        <td><?php echo $_SESSION['user']['nama']; ?></td>
                                    </tr>

                                    <tr>
                                        <td width="200">Level User  </td>
                                        <td width="1">:</td>
                                        <td><?php echo $_SESSION['user']['level']; ?></td>
                                    </tr>

                                    <tr>
                                        <td width="200">Tanggal Login</td>
                                        <td width="1">:</td>
                                        <td><?php echo date('d-m-Y'); ?></td>
                                    </tr>

                                </table>
                            </div>
                        </div>
              </div>


                 
                        


