<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Mendaftar!</h1>
                            </div>
                            <form class="user" method="POST" action="<?= base_url('tambah/adddata'); ?>">
                                <div class="form-group">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="nama" name="npm" placeholder="NPM" value="<?= set_value('nama'); ?>">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <input type="text"class="form-control form-control-user" id="exampleInputEmail" name="namamhs" placeholder="Nama Mahasiswa" >
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                 </div>
                                 <div class="form-group">
                                    <input type="text"class="form-control form-control-user" id="exampleInputEmail" name="jurusan" placeholder="Jurusan" >
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                 </div>
                                 <div class="form-group">
                                    <input type="text"class="form-control form-control-user" id="exampleInputEmail" name="alamat" placeholder="Alamat" >
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                 </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Simpan Data
                                </button>

                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>