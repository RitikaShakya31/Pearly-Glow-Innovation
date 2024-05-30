<?php $this->load->view('admin/template/header', $title); ?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h2 class="mb-sm-0 "><?= $title ?></h2>
                        <a href="<?= base_url("productAdd"); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Add</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>Action</th>
                                        <th>Product</th>
                                        <!-- <th>Category</th> -->
                                        <!-- <th>Sub Category</th> -->
                                        <!-- <th>Product Type</th> -->
                                        <th>Price</th>
                                        <!-- <th>Sale Price</th> -->
                                        <th>Quantity</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($all_product) {
                                        $i = 0;
                                        foreach ($all_product as $item) {
                                            $i = $i + 1;
                                            $id = encryptId($item['product_id']);
                                    ?>
                                            <tr>
                                                <td><?= $i ?></td>
                                                <td>
                                                    <a href="<?php echo base_url(); ?>productDetails?id=<?= $id; ?>" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                                    <a href="<?php echo base_url(); ?>productAdd?id=<?= $id; ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                    <a href="<?= base_url("productAll?dID=$id"); ?>" onclick="return confirm('Are you sure ?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                </td>
                                                <td>
                                                    <p class="wrap_text">
                                                        <b>Name: </b> <?= ucwords($item['product_name']) ?> <br>
                                                        <b>Category: </b> <?= $item['category_name'] ?> <br>
                                                        <b>Subcategory: </b> <?= $item['sub_category_name'] ?> <br>
                                                        <b>Type: </b><?= $item['product_type'] == '1' ? 'Normal' : 'Featured' ?>
                                                    </p>
                                                </td>
                                                <!-- <td><?= $item['category_name'] ?> </td> -->
                                                <!-- <td><?= $item['sub_category_name'] ?> </td> -->
                                                <!-- <td><?= $item['product_type'] == '1' ? 'Normal' : 'Featured' ?></td> -->
                                                <td>
                                                    <b>Market Price:</b> <?= $item['market_price'] ?> <br>
                                                    <b>Sale Price:</b> <?= $item['sale_price'] ?>
                                                </td>
                                                <!-- <td><?= $item['sale_price'] ?></td> -->
                                                <td><?= $item['quantity'] ?> Items left </td>

                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('admin/template/footer'); ?>