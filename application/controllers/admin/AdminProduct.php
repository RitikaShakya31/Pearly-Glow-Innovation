<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminProduct extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (sessionId('admin_id') == "") {
			redirect("admin");
		}
		date_default_timezone_set("Asia/Kolkata");
	}

	//   category

	public function categoryAll()
	{
		$get['category_all'] = $this->CommonModal->getRowByIdInOrder('category', "is_delete = '1'", 'category_name', 'ASC');
		$get['title'] = 'Admin | All Category';
		$this->load->view('admin/product/category_all', $get);
	}
	

	public function categoryAdd()
	{
		extract($this->input->post());
		$id = $this->input->get('id');
		$dID = $this->input->get('dID');
		$decrypt_id = decryptId($this->input->get('id'));
		$get = $this->CommonModal->getSingleRowById('category', "category_id = '$decrypt_id'");
		$data['category_name'] = set_value('category_name') == false ? @$get['category_name'] : set_value('category_name');
		$data['priority'] = set_value('priority') == false ? @$get['priority'] : set_value('priority');
		$data['image'] = set_value('image') == false ? @$get['image'] : set_value('image');
		if (isset($id)) {
			$data['title'] = 'Edit Category';
		} else {
			$data['title'] = 'Add Category';
		}

		if (isset($dID)) {
			$update = $this->CommonModal->updateRowById('category', 'category_id', decryptId($dID), array('is_delete' => '0'));
			redirect('categoryAll');
			exit;
		}

		if (count($_POST) > 0) {
			$this->form_validation->set_rules('category_name', 'category name', 'required');
			if ($this->form_validation->run()) {
				$post['category_name'] = trim($category_name);
				$post['priority'] = trim($priority);
				if (!empty($_FILES['image']['name'])) {
					$picture = imageUploadWithRatio('image', CATEGORY_IMAGE, 600, 400, $data['image']);
					$post['image'] = $picture; 
				}
				if (isset($id)) {
					$update = $this->CommonModal->updateRowById('category', 'category_id', $decrypt_id, $post);
					// flashData('errors', 'Category Update Successfully');
					flashMultiData(['success_status' => "success", 'msg' => "Category Update Successfully"]);
				} else {
					$insert = $this->CommonModal->insertRow('category', $post);
					// flashData('errors', 'Category Add Successfully');
					flashMultiData(['success_status' => "success", 'msg' => "Category Add Successfully"]);

					
				}
				redirect('categoryAll');
			}
		}
		$this->load->view('admin/product/category_add', $data);
	}
	public function videoAdd()
	{
		extract($this->input->post());
		$id = $this->input->get('id');
		$decrypt_id = decryptId($this->input->get('id'));
		$get = $this->CommonModal->getSingleRowById('tbl_video_gallery', "id = '$decrypt_id'");
		$data['video'] = set_value('video') == false ? @$get['video'] : set_value('video');
		$data['title'] = set_value('title') == false ? @$get['title'] : set_value('title');
		if (isset($id)) {
			$data['gtitle'] = 'Edit Video Gallery';
		} else {
			$data['gtitle'] = 'Add Video Gallery';
		}
		if (count($_POST) > 0) {
			$post = $this->input->post();
			if (!empty($_FILES['video']['name'])) {
				$uploadedFileName = fileUpload('video', 'upload/video');
				if ($uploadedFileName) {
					$post['video'] = $uploadedFileName;
				} else {
					flashData('errors', 'Video upload failed.');
				}
			}
			if (isset($id)) {
				$insertData = $this->CommonModal->updateRowById('tbl_video_gallery', 'id', $decrypt_id, $post);
				flashData('errors', 'Video Gallery Updated Successfully');
			} else {
				$insertData = $this->CommonModal->insertRow('tbl_video_gallery', $post);
				flashData('errors', 'Video Gallery Added Successfully');
			}
			if ($insertData) {
				flashMultiData(['success_status' => "success", 'msg' => "Video Gallery added"]);
			} else {
				flashMultiData(['success_status' => "error", 'msg' => "Something went wrong."]);
			}
			redirect('video_list');
			exit();
		}
		
		$data['gtitle'] = "Add Video Gallery";
		$this->load->view('admin/video_add', $data);
	}
	public function bannerAdd()
	{
		extract($this->input->post());
		$id = $this->input->get('id');
		$decrypt_id = decryptId($this->input->get('id'));
		$get = $this->CommonModal->getSingleRowById('banner', "banner_id  = '$decrypt_id'");
		$data['title'] = set_value('title') == false ? @$get['title'] : set_value('title');
		$data['priority'] = set_value('priority') == false ? @$get['priority'] : set_value('priority');
		$data['image_path'] = set_value('image_path') == false ? @$get['image_path'] : set_value('image_path');
		if (isset($id)) {
			$data['gtitle'] = 'Edit Banner';
		} else {
			$data['gtitle'] = 'Add Banner';
		}

		if (count($_POST) > 0) {
			$post = $this->input->post();
			if (!empty($_FILES['image_path']['name'])) {
                $post['image_path'] = imageUpload('image_path', 'upload/banner/');
            }
		
			if (isset($id)) {
				$insertData = $this->CommonModal->updateRowById('banner', 'banner_id ', $decrypt_id, $post);
				flashData('errors', 'Banner Update Successfully');
			} else {
				$insertData = $this->CommonModal->insertRow('banner', $post);
				flashData('errors', 'Banner Add Successfully');
			}
			if ($insertData) {
				flashMultiData(['success_status' => "success", 'msg' => "Banner added"]);
			} else {
				flashMultiData(['success_status' => "error", 'msg' => "Something went wrong."]);
			}
			redirect('banner-list');
			exit();
		}
		$data['gtitle'] = "Add Banner";
		$this->load->view('admin/banner_add', $data);
	}
	public function galleryAdd()
	{
		extract($this->input->post());
		$id = $this->input->get('id');
		$decrypt_id = decryptId($this->input->get('id'));
		$get = $this->CommonModal->getSingleRowById('gallery', "id = '$decrypt_id'");
		$data['title'] = set_value('title') == false ? @$get['title'] : set_value('title');
		$data['description'] = set_value('description') == false ? @$get['description'] : set_value('description');
		$data['image'] = set_value('image') == false ? @$get['image'] : set_value('image');
		if (isset($id)) {
			$data['gtitle'] = 'Edit Gallery';
		} else {
			$data['gtitle'] = 'Add Gallery';
		}

		if (count($_POST) > 0) {
			$post = $this->input->post();
			// $post['image'] = imageUpload('image', 'upload/gallery/');
			// $insertData = $this->CommonModal->insertRow('gallery', $post);.
			if (!empty($_FILES['image']['name'])) {
                $post['image'] = imageUpload('image', 'upload/gallery/');
            }
			if (isset($id)) {
				$insertData = $this->CommonModal->updateRowById('gallery', 'id', $decrypt_id, $post);
				flashData('errors', 'Gallery Update Successfully');
			} else {
				$insertData = $this->CommonModal->insertRow('gallery', $post);
				flashData('errors', 'Gallery Add Successfully');
			}
			if ($insertData) {
				flashMultiData(['success_status' => "success", 'msg' => "Gallery added"]);
			} else {
				flashMultiData(['success_status' => "error", 'msg' => "Something went wrong."]);
			}
			redirect('gallery_list');
			exit();
		}
		$data['gtitle'] = "Add Gallery";
		$this->load->view('admin/gallery_add', $data);
	}
	public function testimonialAdd()
	{
		extract($this->input->post());
		$id = $this->input->get('id');
		$decrypt_id = decryptId($this->input->get('id'));
		$get = $this->CommonModal->getSingleRowById('testimonial', "id = '$decrypt_id'");
		$data['name'] = set_value('name') == false ? @$get['name'] : set_value('name');
		$data['content'] = set_value('content') == false ? @$get['content'] : set_value('content');
		$data['image'] = set_value('image') == false ? @$get['image'] : set_value('image');
		if (isset($id)) {
			$data['gtitle'] = 'Edit Testimonial';
		} else {
			$data['gtitle'] = 'Add Testimonial';
		}
		if (count($_POST) > 0) {
			$post = $this->input->post();
			// $post['image'] = imageUpload('image', 'upload/testimonial/');
			// $insertData = $this->CommonModal->insertRow('testimonial', $post);
			if (!empty($_FILES['image']['name'])) {
                $post['image'] = imageUpload('image', 'upload/testimonial/');
            }
			if (isset($id)) {
				$insertData = $this->CommonModal->updateRowById('testimonial', 'id', $decrypt_id, $post);
				flashData('errors', 'Testimonial Update Successfully');
			} else {
				$insertData = $this->CommonModal->insertRow('testimonial', $post);
				flashData('errors', 'Testimonial Add Successfully');
			}
			if ($insertData) {
				flashMultiData(['success_status' => "success", 'msg' => "Testimonial added"]);
			} else {
				flashMultiData(['success_status' => "error", 'msg' => "Something went wrong."]);
			}
			redirect('testimonial-list');
			exit();
		}
		$data['gtitle'] = "Add Testimonial";
		$this->load->view('admin/testimonial_add', $data);
	}
	public function blogAdd()
	{
		extract($this->input->post());
		$id = $this->input->get('id');
		$decrypt_id = decryptId($this->input->get('id'));
		$get = $this->CommonModal->getSingleRowById('blog', "id = '$decrypt_id'");
		$data['title'] = set_value('title') == false ? @$get['title'] : set_value('title');
		$data['description'] = set_value('description') == false ? @$get['description'] : set_value('description');
		$data['image'] = set_value('image') == false ? @$get['image'] : set_value('image');
		if (isset($id)) {
			$data['gtitle'] = 'Edit Blog';
		} else {
			$data['gtitle'] = 'Add Blog';
		}
		if (count($_POST) > 0) {
			$post = $this->input->post();
			if (!empty($_FILES['image']['name'])) {
                $post['image'] = imageUpload('image', 'upload/blog/');
            }
			if (isset($id)) {
				$insertData = $this->CommonModal->updateRowById('blog', 'id', $decrypt_id, $post);
			} else {
				$insertData = $this->CommonModal->insertRow('blog', $post);
			}
			if ($insertData) {
				flashMultiData(['success_status' => "success", 'msg' => "Blog added"]);
			} else {
				flashMultiData(['success_status' => "error", 'msg' => "Something went wrong."]);
			}
			redirect('blog-list');
			exit();
		}
		$data['gtitle'] = "Add Blog";
		$this->load->view('admin/blog_add', $data);
	}
	public function eventAdd()
	{
		extract($this->input->post());
		$id = $this->input->get('id');
		$decrypt_id = decryptId($this->input->get('id'));
		$get = $this->CommonModal->getSingleRowById('event', "id = '$decrypt_id'");
		$data['title'] = set_value('title') == false ? @$get['title'] : set_value('title');
		$data['description'] = set_value('description') == false ? @$get['description'] : set_value('description');
		$data['image'] = set_value('image') == false ? @$get['image'] : set_value('image');
		if (isset($id)) {
			$data['gtitle'] = 'Edit Event';
		} else {
			$data['gtitle'] = 'Add Event';
		}
		if (count($_POST) > 0) {
			$post = $this->input->post();
			// $post['image'] = imageUpload('image', 'upload/blog/');
			// $insertData = $this->CommonModal->insertRow('blog', $post);
			if (!empty($_FILES['image']['name'])) {
                $post['image'] = imageUpload('image', 'upload/event/');
            }
			if (isset($id)) {
				$insertData = $this->CommonModal->updateRowById('event', 'id', $decrypt_id, $post);
			} else {
				$insertData = $this->CommonModal->insertRow('event', $post);
			}
			if ($insertData) {
				flashMultiData(['success_status' => "success", 'msg' => "Event added"]);
			} else {
				flashMultiData(['success_status' => "error", 'msg' => "Something went wrong."]);
			}
			redirect('event-list');
			exit();
		}
		$data['gtitle'] = "Add Event";
		$this->load->view('admin/event_add', $data);
	}

	//   sub category

	public function subCategoryAll()
	{
		$data['sub_category'] = $this->CommonModal->getRowByIdInOrder('sub_category', "is_delete = '1'", 'sub_category_name', 'ASC');
		$data['title'] = "Admin | All Sub Category";
		$this->load->view('admin/product/sub_category_all', $data);
	}

	public function subCategoryAdd()
	{
		$dID = $this->input->get('dID');
		$id = $this->input->get('id');
		extract($this->input->post());
		$decrypt_id = decryptId($this->input->get('id'));

		$get = $this->CommonModal->getSingleRowById('tbl_sub_category', "sub_category_id = '$decrypt_id'");
// 		$data['priority'] = set_value('priority') == false ? @$get['priority'] : set_value('priority');
		$data['sub_category_name'] = set_value('sub_category_name') == false ? @$get['sub_category_name'] : set_value('sub_category_name');
		$data['category_id'] = set_value('category_id') == false ? @$get['category_id'] : set_value('category_id');
		// $data['sub_category_image'] = set_value('sub_category_image') == false ? @$get['sub_category_image'] : set_value('sub_category_image');
		if (isset($id)) {
			$data['title'] = 'Edit Sub Category';
		} else {
			$data['title'] = 'Add Sub Category';
		}

		if (isset($dID)) {
			$update = $this->CommonModal->updateRowById('sub_category', 'sub_category_id', decryptId($dID), array('is_delete' => '0'));
			redirect('subCategoryAll');
			exit;
		}

		if (count($_POST) > 0) {
			$this->form_validation->set_rules('sub_category_name', 'sub category name', 'trim|required');
// 			$this->form_validation->set_rules('priority', 'sub category priority', 'trim|required');
			$this->form_validation->set_rules('category_id', 'category', 'required');
			if ($this->form_validation->run()) {

				$post['sub_category_name'] = $sub_category_name;
				// $post['priority'] = $priority;
				$post['category_id'] = $category_id;

				// if (!empty($_FILES['sub_category_image']['name'])) {
				// 	$picture = imageUploadWithRatio('sub_category_image', CATEGORY_IMAGE, 600, 400, $data['sub_category_image']);
				// 	$post['sub_category_image'] = $picture;
				// }

				if (isset($id)) {
					$update = $this->CommonModal->updateRowById('tbl_sub_category', 'sub_category_id', $decrypt_id, $post);
					flashData('errors', 'Sub Category Update Successfully');
				} else {
					$insert = $this->CommonModal->insertRow('tbl_sub_category', $post);
					flashData('errors', 'Sub Category Add Successfully');
				}
				redirect('subCategoryAll');
			}
		}
		$this->load->view('admin/product/sub_category_add', $data);
	}

	//  Product
	public function productAll()
	{
		$subCategoryId = $this->input->get('sCateId');
		$dID = $this->input->get('dID');
		if (isset($dID)) {
			$update = $this->CommonModal->updateRowById('product', 'product_id', decryptId($dID), array('is_delete' => '0'));
			redirect('productAll');
			exit;
		}

		$select = "product.*, category.category_name, sub_category.sub_category_name";
		$join = [
			['category', 'category.category_id = product.category_id', 'LEFT'],
			['sub_category', 'sub_category.sub_category_id = product.sub_category_id', 'LEFT'],
		];
		if (isset($subCategoryId)) {
			$get['all_product'] = $this->CommonModal->getRowWithMultiJoin($select, 'product', "product.is_delete = '1' AND product.sub_category_id = '" . decryptId($subCategoryId) . "'", $join, 'product_name', 'ASC', 1);
		} else {
			$get['all_product'] = $this->CommonModal->getRowWithMultiJoin($select, 'product', "product.is_delete = '1'", $join, 'product_name', 'ASC', 1);
		}
		$get['title'] = 'Admin | All Product';
		$this->load->view('admin/product/product_all', $get);
	}

	function getSubCategory()
	{
		$category_id = $this->input->post('category_id');
		$data['type'] = 1;
		$data['all_data'] = $this->CommonModal->getRowByIdInOrder('tbl_sub_category', "category_id = '$category_id' AND is_delete = '1'", 'sub_category_name', 'ASC');
		$this->load->view('admin/product/sub_category_list', $data);
	}

	function getProductSubCategory()
	{
		$category_id = $this->input->post('category_id');
		$data['all_data'] = $this->CommonModal->getRowByIdInOrder('tbl_sub_category', "category_id = '$category_id' AND is_delete = '1'", 'sub_category_name', 'ASC');
		$data['type'] = 2;
		$this->load->view('admin/product/sub_category_list', $data);
	}

	public function productAdd()
	{
		$id = $this->input->get('id');
		$decrypt_id = decryptId($id);

		if (isset($id)) {
			$data['title'] = 'Edit Product';
			$getProduct = $this->CommonModal->getSingleRowById('product', "product_id = '$decrypt_id'");
		} else {
			$data['title'] = 'Add Product';
			$getProduct = false;
		}

		$data['product_name'] = set_value('product_name') == false ? @$getProduct['product_name'] : set_value('product_name');
		$data['category_id'] = set_value('category_id') == false ? @$getProduct['category_id'] : set_value('category_id');
		$data['sub_category_id'] = set_value('sub_category_id') == false ? @$getProduct['sub_category_id'] : set_value('sub_category_id');
		$data['product_type'] = set_value('product_type') == false ? @$getProduct['product_type'] : set_value('product_type');
		$data['description'] = set_value('description') == false ? @$getProduct['description'] : set_value('description');
		$data['market_price'] = set_value('market_price') == false ? @$getProduct['market_price'] : set_value('market_price');
		$data['sale_price'] = set_value('sale_price') == false ? @$getProduct['sale_price'] : set_value('sale_price');
		$data['quantity'] = set_value('quantity') == false ? @$getProduct['quantity'] : set_value('quantity');
		$data['quantity_type'] = set_value('quantity_type') == false ? @$getProduct['quantity_type'] : set_value('quantity_type');
		$data['article_num'] = set_value('article_num') == false ? @$getProduct['article_num'] : set_value('article_num');
		$data['image_all'] = $this->CommonModal->getRowById('product_image', "product_id", $decrypt_id);


		if (count($_POST) > 0) {
			extract($this->input->post());
			$post['product_name'] = $product_name;
			$post['category_id'] = $category_id;
			$post['sub_category_id'] = $sub_category_id;
			$post['description'] = $description;
			$post['product_type'] = $product_type;
			$post['market_price'] = $market_price;
			$post['sale_price'] = $sale_price;
			$post['quantity'] = $quantity;
			$post['quantity_type'] = $quantity_type;
			$post['article_num'] = $article_num;


			if (isset($id)) {
				$filesCount = count($_FILES['image']['name']);
				if ($filesCount > 0) {
					for ($i = 0; $i < $filesCount; $i++) {
						$extension = pathinfo($_FILES["image"]["name"][$i], PATHINFO_EXTENSION);
						$newFilename = round(microtime(true) * 1000);
						$_FILES['files']['name'] = $newFilename . '.' . $extension;
						$_FILES['files']['type'] = $_FILES['image']['type'][$i];
						$_FILES['files']['tmp_name'] = $_FILES['image']['tmp_name'][$i];
						$_FILES['files']['error'] = $_FILES['image']['error'][$i];
						$_FILES['files']['size'] = $_FILES['image']['size'][$i];

						$picture = imageUploadWithRatio('files', PRODUCT_IMAGE, 600, 400, "");
						if ($picture) {
							$post2['image_path'] = $picture;
							$post2['product_id'] = $decrypt_id;
							$insert = $this->CommonModal->insertRow('product_image', $post2);
						}
					}
				}
				$update = $this->CommonModal->updateRowById('product', 'product_id', $decrypt_id, $post);
				flashData('errors', 'Produce update successfully');
			} else {
				$p_id = $this->CommonModal->insertRowReturnIdWithClean('product', $post);
				if ($p_id > 0) {
					$filesCount = count($_FILES['image']['name']);
					if ($filesCount > 0) {
						for ($i = 0; $i < $filesCount; $i++) {
							$extension = pathinfo($_FILES["image"]["name"][$i], PATHINFO_EXTENSION);
							$newFilename = round(microtime(true) * 1000);
							$_FILES['files']['name'] = $newFilename . '.' . $extension;
							$_FILES['files']['type'] = $_FILES['image']['type'][$i];
							$_FILES['files']['tmp_name'] = $_FILES['image']['tmp_name'][$i];
							$_FILES['files']['error'] = $_FILES['image']['error'][$i];
							$_FILES['files']['size'] = $_FILES['image']['size'][$i];

							$picture = imageUploadWithRatio('files', PRODUCT_IMAGE, 600, 400, "");
							if ($picture) {
								$post2['image_path'] = $picture;
								$post2['product_id'] = $p_id;
								$insert = $this->CommonModal->insertRow('product_image', $post2);
							}
						}
					}

					flashData('errors', 'Produce add successfully');
				} else {
					flashData('errors', 'Product not add');
				}
			}
			redirect('productAll');
		}
		$this->load->view('admin/product/product_add', $data);
	}

	public function productImageD($id, $img)
	{
		$delete = $this->CommonModal->deleteRowById('product_image', "product_image_id = '" . decryptId($id) . "'");
		unlink(PRODUCT_IMAGE . $img);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function productDetails()
	{
		$id = $this->input->get('id');
		$decrypt_id = decryptId($id);
		$getProduct = $this->CommonModal->getSingleRowById('product', "product_id = '$decrypt_id'");
		$data['product_name'] = set_value('product_name') == false ? @$getProduct['product_name'] : set_value('product_name');
		$data['company_id'] = set_value('company_id') == false ? @$getProduct['company_id'] : set_value('company_id');
		$data['category_id'] = set_value('category_id') == false ? @$getProduct['category_id'] : set_value('category_id');
		$data['sub_category_id'] = set_value('sub_category_id') == false ? @$getProduct['sub_category_id'] : set_value('sub_category_id');
		$data['product_type'] = set_value('product_type') == false ? @$getProduct['product_type'] : set_value('product_type');
		$data['description'] = set_value('description') == false ? @$getProduct['description'] : set_value('description');
		$data['product_type'] = set_value('product_type') == false ? @$getProduct['product_type'] : set_value('product_type');
		$data['market_price'] = set_value('market_price') == false ? @$getProduct['market_price'] : set_value('market_price');
		$data['sale_price'] = set_value('sale_price') == false ? @$getProduct['sale_price'] : set_value('sale_price');
		$data['quantity'] = set_value('quantity') == false ? @$getProduct['quantity'] : set_value('quantity');
		$data['quantity_type'] = set_value('quantity_type') == false ? @$getProduct['quantity_type'] : set_value('quantity_type');
		$data['image_all'] = $this->CommonModal->getRowById('product_image', "product_id", $decrypt_id);
		$data['title'] = 'Product Details';
		$this->load->view('admin/product/view_product_details', $data);
	}
	

	public function delete_item()
    {
        $product_id = $this->input->post('pid');
        $data = array(
            'rowid' => $product_id,
            'qty'   => 0
        );
        $this->cart->update($data);
    }



}
