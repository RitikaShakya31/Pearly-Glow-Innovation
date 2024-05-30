<?php $this->load->view('admin/template/header', $title); ?>
<?php $id = $this->input->get('id'); ?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h2 class="mb-sm-0 "><?= $gtitle ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <?php foreach ($setting as $row) {
                                    ?>
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <label for="example-text-input" class="col-form-label">Phone
                                                        Number</label>
                                                    <input class="form-control" type="text" name="phone_number" required
                                                        value="<?= $row['phone_number'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="row">
                                                <label for="example-text-input"
                                                    class="col-md-4 col-form-label">Email</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="email" name="email"
                                                        value="<?= $row['email'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="row">
                                                <label for="example-text-input"
                                                    class="col-md-4 col-form-label">Address</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="address" required
                                                        value="<?= $row['address']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="row">
                                                <label for="example-text-input"
                                                    class="col-md-4 col-form-label">Facebook link</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="facebook"
                                                        value="<?= $row['facebook']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="row">
                                                <label for="example-text-input"
                                                    class="col-md-4 col-form-label">Instagram link</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="instagram"
                                                        value="<?= $row['instagram']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="row">
                                                <label for="example-text-input"
                                                    class="col-md-4 col-form-label">LinkedIn link</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="linkedin"
                                                        value="<?= $row['linkedin']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="row">
                                                <label for="example-text-input"
                                                    class="col-md-4 col-form-label">Twitter link</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="twitter"
                                                        value="<?= $row['twitter']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="row">
                                                <label for="example-text-input"
                                                    class="col-md-4 col-form-label">Youtube link</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="youtube"
                                                        value="<?= $row['youtube']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <button type="submit" id="save" class="btn btn-primary w">Update</button>
                                    </div>
                                <?php } ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('admin/template/footer'); ?>
<script>

</script>