<?php $this->load->view('admin/template/header', $title); ?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h2 class="mb-sm-0 "><?= $title ?></h2>
                        <a href="<?= base_url("bannerAdd"); ?>" class="btn btn-success"><i class="fa fa-plus"></i>
                            Add</a>
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
                                        <th>Sr no.</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Priority</th>
                                        <th style="width: 20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($banner) {
                                        $i = 0;
                                        foreach ($banner as $all) {
                                            $id = encryptId($all['banner_id']);
                                            ?>
                                            <tr>
                                                <td><?= ++$i; ?></td>
                                                <td><?= $all['title'] ?></td>
                                                <td>
                                                    <a href="<?= base_url("upload/banner/") . $all['image_path']; ?> "
                                                        target="_blank">
                                                        <img src="<?= base_url("upload/banner/") . $all['image_path']; ?>"
                                                            style="width: 60px; height: 50px">
                                                    </a>
                                                </td>
                                                <td><?= $all['priority'] ?></td>

                                                <td>
                                                    <a href="<?= base_url("bannerAdd?id=$id"); ?>" class="btn btn-success"><i
                                                            class="fa fa-edit"></i> Edit</a>
                                                    <a onclick="return confirm('Are you want to sure ?')"
                                                        href="<?= base_url("banner_list?BdID=$id"); ?>" class="btn btn-danger"><i
                                                            class="fa fa-trash"></i> Delete</a>
                                                </td>
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