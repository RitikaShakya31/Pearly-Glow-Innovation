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
                <div class="col-8 offset-2">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <div class="row">
                                            <label for="example-text-input" class="col-md-3 col-form-label">Event Title</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text" name="title" required
                                                    value="<?= $title ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <div class="row">
                                            <label for="example-text-input" class="col-md-3 col-form-label">Event Date</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="date" name="date" required
                                                    value="<?= $date ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <div class="row">
                                            <label for="example-text-input" class="col-md-3 col-form-label">Event
                                                Description</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text" name="description" required
                                                    value="<?= $description ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <div class="row">
                                            <label for="example-text-input" class="col-md-3 col-form-label">Event
                                                Image</label>
                                            <div class="col-md-9">
                                                <input class="form-control " type="file" name="image"
                                                    <?= $image == "" ? 'required' : '' ?>>
                                                    <?php
                                                    if ($image != '') {
                                                        ?>
                                                        <img src="<?= base_url('upload/event/' . $image) ?>"
                                                            width="100" />
                                                        <?php
                                                    }
                                                    ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" id="save" class="btn btn-primary w-md">Save</button>
                                </div>
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