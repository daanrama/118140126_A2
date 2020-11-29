<!doctype html>
<html lang="en">
  <head>
    <title>Update</title>   <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<div class="container mt-5">
<div class="col-md-12 justify-align-center">
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                                <?php
                                foreach($user->result() as $val) { ?>
                                Nama : <?= $val->name ?>
                                <?php } ?>
                            <div class="float-right">
                                 <a href="<?= base_url('user/tambah'); ?>" class="btn btn-info">Tambah</a>
                                <a href="<?= base_url('index.php/auth/logout') ?>" class="btn btn-primary">Logout</a>
                            </div>
                        </div>
                        <div class="card-body">
                             
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Pekerjaan</th>
                                           <th style="width: 30%;">Status</th>
                                           <th style="width: 25%;" id="btn-action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr><?php
                                        foreach($user->result() as $data) { ?>
                                        <form action="<?php echo base_url(). 'user/tambahdata'; ?>" method="post">
                                            <td><input type="hidden" name="email" value="<?php echo $data->email ?>">
                                            <select name="name">
                                                <option value="Chef">Chef</option>
                                                <option value="Pelayan">Pelayan</option>
                                                <option value="Parkir">Parkir</option>
                                                </select>
                                            </td>
                                            <td><select name="status">
                                                <option value="Aktif">Aktif</option>
                                                <option value="Tidak Aktif">Tidak Aktif</option>
                                                </select>
                                            </td>
                                            <td class="td-btn">
                                                <input type="submit" class="btn btn-success" value="Tambah">
                                            </td>
                                        </tr>
                                    </form>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
</div>
</body>
</html>