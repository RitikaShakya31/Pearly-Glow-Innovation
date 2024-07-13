<?php $this->load->view('admin/template/header', $title); ?>
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h2 class="mb-sm-0 "><?= $title ?></h2>
                        <a href="<?= base_url("videoAdd"); ?>" class="btn btn-success"><i class="fa fa-plus"></i>
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
                                        <th>Video</th>
                                        <th style="width: 20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($video_gallery) {
                                        $i = 0;
                                        foreach ($video_gallery as $all) {
                                            $id = encryptId($all['id']);
                                            ?>
                                            <tr>
                                                <td><?= ++$i; ?></td>
                                                <td><?= $all['title'] ?></td>
                                                <td>
                                                    <a href="<?= base_url("upload/video/") . $all['video']; ?>" target="_blank">
                                                        View Video
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url("videoAdd?id=$id"); ?>" class="btn btn-success"><i
                                                            class="fa fa-edit"></i> Edit</a>
                                                    <a onclick="return confirm('Are you want to sure ?')"
                                                        href="<?= base_url("video_list?BdID=$id"); ?>" class="btn btn-danger"><i
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