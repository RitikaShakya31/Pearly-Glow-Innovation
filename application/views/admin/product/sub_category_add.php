<?php $this->load->view('admin/template/header', $title); ?>
<?php $id = $this->input->get('id'); ?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h2 class="mb-sm-0 "><?= $title ?></h2>
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
                                            <label for="example-text-input" class="col-md-3 col-form-label">Sub Category
                                                Name</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="text" name="sub_category_name"
                                                    required value="<?= $sub_category_name ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Category</label>
                                            <div class="col-sm-9">
                                                <select class="form-control select2" name="category_id">
                                                    <option>Select Category</option>
                                                    <?php
                                                    $c = getRowsByMoreIdWithOrder('tbl_category', "is_delete = '1'", "category_name", 'ASC');
                                                    foreach ($c as $cate) {
                                                        ?>
                                                        <option value="<?= $cate['category_id'] ?>" <?php if ($category_id == $cate['category_id']) {
                                                              echo 'selected';
                                                          } ?>><?= ucwords($cate['category_name']) ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-12 mb-3">
                                        <div class="row">
                                            <label for="example-text-input" class="col-md-3 col-form-label">Sub Category
                                                Image</label>
                                            <div class="col-md-9">
                                                <input class="form-control category_image" type="file"
                                                    name="sub_category_image" <?= $sub_category_image == "" ? 'required' : '' ?>>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-lg-12 mb-3">
                                        <div class="row">
                                            <label for="example-text-input" class="col-md-3 col-form-label">Priority Order</label>
                                            <div class="col-md-9">
                                                <input class="form-control" type="number" name="priority" required value="<?= $priority ?>">
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-lg-12">
                                        <img class="temp_image"
                                            src="<?= base_url('upload/category') . '/' . $sub_category_image ?>"
                                            style=" height: 300px;">
                                        <input type="hidden" value="<?= $sub_category_image ?>" name="temp_image">
                                    </div> -->
                                    <!--<div class="col-lg-12 mt-2">-->
                                    <!--    <span id="uploadImageError"></span>-->
                                    <!--</div>-->
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
