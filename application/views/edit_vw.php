<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/bootstrap.min.css">
    <script src="<?php echo base_url()?>/assets/js/jquery-3.3.1.min.js"></script>

    <title>Edit Data</title>
</head>
<body>
<div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit Data!</h1>
                            </div>
                            <?php foreach ($hasil as $baris) { ?>                                                        
                            <form class="user" method="POST" action="<?= base_url('Beranda/updatex'); ?>">
                                <div class="form-group">
                                    <div class="form-group">
                                        <input type="hidden" name="id" value="<?= $baris->id ?>"> <input type="text"class="form form-control form-control-user" name="npm" value="<?= $baris->npm?>">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form form-control form-control-user" id="exampleInputEmail" name="namamhs" placeholder="Nama Mahasiswa" value="<?= $baris->nama?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form form-control form-control-user" id="exampleInputEmail" name="jurusan" placeholder="Jurusan" value="<?= $baris->jurusan?>">
                                        <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form form-control form-control-user" id="exampleInputEmail" name="alamat" placeholder="Alamat" value="<?= $baris->alamat?>">
                                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Simpan Data
                                </button>

                            </form>
                           <?php } ?> 
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>