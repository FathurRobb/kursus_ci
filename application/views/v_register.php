<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a><b>Aplikasi </b>Inventaris</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
        <?php
            if ($this->session->flashdata('error') !='') {
                echo '<div class="alert alert-danger" role="alert">';
                echo $this->session->flashdata('error');
                echo '</div>';
            }
        ?>
      <p class="login-box-msg">Register Akun Baru </p>

      <form action="<?php echo site_url('register/proses') ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" id="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="<?php echo site_url('login')?>" class="text-center">Klik Disini Jika Sudah Punya Akun</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
<!-- <br>
<div class="container">
    <div class="card">
        <div class="card-header">
            Registrasi Form
        </div>
        <div class="card-body">
            <?php
                if ($this->session->flashdata('error') !='') {
                    echo '<div class="alert alert-danger" role="alert">';
                    echo $this->session->flashdata('error');
                    echo '</div>';
                }
            ?>
            <form action="<?php echo site_url('register/proses') ?>" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Masukan Username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div> -->