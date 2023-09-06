<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Customer</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <?php if (isset($validation)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $validation->listErrors() ?>
                    </div>
                <?php } ?>
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo base_url('customer/store') ?>" method="POST">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="customer_name" placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" name="customer_address" rows="4" placeholder="Masukkan Alamat"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>