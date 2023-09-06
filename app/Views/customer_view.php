<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer List</title>
</head>

<body>

    <body>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">

                    <?php if (!empty(session()->getFlashdata('message'))) : ?>

                        <div class="alert alert-success">
                            <?php echo session()->getFlashdata('message'); ?>
                        </div>

                    <?php endif ?>

                    <a href="<?php echo base_url('customer/create') ?>" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>NAME</th>
                                <th>ADDRESS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($customer as $key => $customer) : ?>

                                <tr>
                                    <td><?php echo $customer['customer_name'] ?></td>
                                    <td><?php echo $customer['customer_address'] ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo base_url('post/edit/' . $customer['id']) ?>" class="btn btn-sm btn-primary">EDIT</a>
                                        <a href="<?php echo base_url('post/delete/' . $customer['id']) ?>" class="btn btn-sm btn-danger">HAPUS</a>
                                    </td>
                                </tr>

                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>

</html>