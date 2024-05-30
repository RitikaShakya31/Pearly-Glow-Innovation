<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminHome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (sessionId('admin_id') == "") {
			redirect("admin");
		}
		date_default_timezone_set("Asia/Kolkata");
	}

	public function dashboard()
	{
		$getRows['active_user'] = $this->CommonModal->getNumRows("user_registration", "user_status = '1'");
		$getRows['inactive_user'] = $this->CommonModal->getNumRows("user_registration", "user_status = '0'");
		$getRows['product_category'] = $this->CommonModal->getNumRows("category", "is_delete = '1'");
		$getRows['product_sub_category'] = $this->CommonModal->getNumRows("sub_category", "is_delete = '1'");
		$getRows['total_product'] = $this->CommonModal->getNumRows("product", "is_delete = '1'");
		$getRows['recent_orders'] = $this->CommonModal->getNumRows("book_product", "booking_status = '0' AND (payment_mode = '1' OR payment_mode = '2' AND transaction_status = '1')");
		$getRows['accepted_orders'] = $this->CommonModal->getNumRows("book_product", "booking_status = '1' AND (payment_mode = '1' OR payment_mode = '2' AND transaction_status = '1')");
		$getRows['dispatch_orders'] = $this->CommonModal->getNumRows("book_product", "booking_status = '3' AND (payment_mode = '1' OR payment_mode = '2' AND transaction_status = '1')");
		$getRows['completed_orders'] = $this->CommonModal->getNumRows("book_product", "booking_status = '4' AND (payment_mode = '1' OR payment_mode = '2' AND transaction_status = '1')");
		$getRows['canceled_orders'] = $this->CommonModal->getNumRows("book_product", "booking_status = '2' AND (payment_mode = '1' OR payment_mode = '2' AND transaction_status = '1')");
		$getRows['title'] = "Home";
		$getRows['recentOrderList'] = $this->CommonModal->getRowByIdInOrder('book_product', "booking_status = '0' AND (payment_mode = '1' OR payment_mode = '2' AND transaction_status = '1')", 'create_date', 'DESC');
		$this->load->view('admin/index', $getRows);
	}
     public function contact_query()
	{
		$data['contact'] = $this->CommonModal->getRowByIdInOrder('contact_query', [], 'cid', 'DESC');
		$data['title'] = 'Contact ';
		$BdID = $this->input->get('BdID');
		if (decryptId($BdID) != '') {
			$delete = $this->CommonModal->deleteRowById('contact_query', array('cid' => decryptId($BdID)));
			if ($delete) {
				flashMultiData(['success_status' => "success", 'msg' => "Contact Query Deleted"]);
			} else {
				flashMultiData(['success_status' => "error", 'msg' => "Something Went Wrong."]);
			}
		 
			redirect('contact_query');
			exit;
		}
		$this->load->view('admin/contact', $data);
	}
     public function gallery()
	{
		$data['gallery'] = $this->CommonModal->getAllRowsInOrder('gallery', 'id', 'DESC');
		$data['title'] = 'Gallery ';
		$BdID = $this->input->get('BdID');
		if (decryptId($BdID) != '') {
			$delete = $this->CommonModal->deleteRowById('gallery', array('id' => decryptId($BdID)));
			if ($delete) {
				flashMultiData(['success_status' => "success", 'msg' => "Gallery Deleted"]);
			} else {
				flashMultiData(['success_status' => "error", 'msg' => "Something Went Wrong."]);
			}
		 
			redirect('gallery_list');
			exit;
		}
		$this->load->view('admin/gallery', $data);
	}
     public function testimonial_list()
	{
		$data['testimonial'] = $this->CommonModal->getAllRowsInOrder('testimonial', 'id', 'DESC');
		$data['title'] = 'Testimonial ';
		$BdID = $this->input->get('BdID');
		if (decryptId($BdID) != '') {
			$delete = $this->CommonModal->deleteRowById('testimonial', array('id' => decryptId($BdID)));
			if ($delete) {
				flashMultiData(['success_status' => "success", 'msg' => "Testimonial Deleted"]);
			} else {
				flashMultiData(['success_status' => "error", 'msg' => "Something Went Wrong."]);
			}
		 
			redirect('testimonial-list');
			exit;
		}
		$this->load->view('admin/testimonial_list', $data);
	}
     public function blog_list()
	{
		$data['blog'] = $this->CommonModal->getAllRowsInOrder('blog', 'id', 'DESC');
		$data['title'] = 'Blog ';
		$BdID = $this->input->get('BdID');
		
		if (decryptId($BdID) != '') {
			$delete = $this->CommonModal->deleteRowById('blog', array('id' => decryptId($BdID)));
			if ($delete) {
				flashMultiData(['success_status' => "success", 'msg' => "Blog Deleted"]);
			} else {
				flashMultiData(['success_status' => "error", 'msg' => "Something Went Wrong."]);
			}
		 
			redirect('blog-list');
			exit;
		}
		$this->load->view('admin/blog_list', $data);
	}

	public function setting(){
		$data['setting'] = $this->CommonModal->getAllRowsInOrder('setting', 'id', 'DESC');
		$data['title'] = 'Setting';
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $updateData = $this->CommonModal->updateRowById('setting', 'id', 1 , $post);
            if ($updateData) {
                flashMultiData(['success_status' => "success", 'msg' => "Setting Updated"]);
            } else {
                flashMultiData(['success_status' => "error", 'msg' => "Something went wrong."]);
            }
            redirect('setting');
            exit();
        }
		$this->load->view('admin/setting', $data);
	}
	public function banner()
	{
		extract($this->input->get());
		$id = $this->input->get('bID');
		$BdID = $this->input->get('BdID');
		$sId = decryptId($id);
		$get = $this->CommonModal->getSingleRowById('banner', "banner_id = '$sId'");
		$data['image_path'] = set_value('image_path') == false ? @$get['image_path'] : set_value('image_path');
		$data['all_banner'] = $this->CommonModal->getAllRowsInOrder('banner', 'create_date', 'DESC');

		if (decryptId($BdID) != '') {
			$delete = $this->CommonModal->deleteRowById('banner', array('banner_id' => decryptId($BdID)));
			unlink('upload/banner/' . $img);
			redirect('banner');
			exit;
		}

		if (isset($id)) {
			$data['title'] = 'Banner Edit';
		} else {
			$data['title'] = 'Banner add';
		}
		if (count($_POST) > 0) {

			if (!empty($_FILES['image_path']['name'])) {
				$p = fullImage('image_path', BANNER_IMAGE, $data['image_path']);
				$post['image_path'] = $p;
			}

			if (isset($id)) {
				$post['update_date'] = setDateTime();
				$update = $this->CommonModal->updateRowById('banner', 'banner_id', $sId, $post);
				flashData('errors', 'Banner Update Successfully');
			} else {
				$post['create_date'] = setDateTime();
				$insert = $this->CommonModal->insertRow('banner', $post);
				flashData('errors', 'Banner Add successfully.');
			}
			redirect('banner');
		}
		$this->load->view('admin/banner', $data);
	}

	public function promoCode()
	{
		$id = $this->input->get('promo');
		$dID = $this->input->get('dID');
		$sId = decryptId($id);
		$getPlans = getRowById('promocode', 'promocode_id', $sId);
		$data['promocode'] = set_value('promocode') == false ? @$getPlans[0]['promocode'] : set_value('promocode');
		$data['expiry_date'] = set_value('expiry_date') == false ? @$getPlans[0]['expiry_date'] : set_value('expiry_date');
		$data['minimum_order'] = set_value('minimum_order') == false ? @$getPlans[0]['minimum_order'] : set_value('minimum_order');
		$data['amount'] = set_value('amount') == false ? @$getPlans[0]['amount'] : set_value('amount');

		if (decryptId($dID) != '') {
			$delete = $this->CommonModal->deleteRowById('promocode', array('promocode_id' => decryptId($dID)));
		}

		if (isset($id)) {
			$data['title'] = 'Promo code Edit';
		} else {
			$data['title'] = 'Promo code add';
		}
		if (count($_POST) > 0) {
			extract($this->input->post());
			$post['promocode'] = strtoupper($promocode);
			$post['amount'] = $amount;
			$post['minimum_order'] = $minimum_order;
			$post['expiry_date'] = date('Y-m-d', strtotime($expiry_date));
			if (isset($id)) {
				$post['update_date'] = setDateTime();
				$update = updateRowById('promocode', 'promocode_id', $sId, $post);
				if ($update) {
					flashData('errors', 'Promo code Update Successfully');
				} else {
					flashData('errors', 'Promo code Not Update. please try again');
				}
			} else {
				$post['create_date'] = setDateTime();
				$insert = insertRow('promocode', $post);
				if ($insert) {
					flashData('errors', 'Promo code Add Successfully');
				} else {
					flashData('errors', 'Promo code Not Add');
				}
			}
			redirect('promoCode');
		} else {
			$data['title'] = 'Promo Code';
			$this->load->view('admin/user_promo_code', $data);
		}
	}

	public function setDeliveryCharges()
	{
		extract($this->input->post());
		$get = $this->CommonModal->getSingleRowById('delivery_charge', "delivery_charge_id = '1'");
		$data['min_amount'] = set_value('min_amount') == false ? @$get['min_amount'] : set_value('min_amount');
		$data['amount'] = set_value('amount') == false ? @$get['amount'] : set_value('amount');

		$data['title'] = 'Delivery Charge';
		if (count($_POST) > 0) {
			$this->form_validation->set_rules('min_amount', 'minimum amount', 'trim|required');
			$this->form_validation->set_rules('amount', 'amount', 'trim|required');
			if ($this->form_validation->run()) {
				$getC = $this->CommonModal->getAllRows('delivery_charge');
				$post['min_amount'] = $min_amount;
				$post['amount'] = $amount;
				if ($getC > 0) {
					$updateRow = updateRowById('delivery_charge', 'delivery_charge_id', '1', $post);
					if ($updateRow) {
						flashData('errors', 'Delivery Charges Update Successfully');
					} else {
						flashData('errors', 'Delivery Charges Not Add.');
					}
				} else {
					$insert = $this->CommonModal->insertRow('delivery_charge', $post);
					if ($insert) {
						flashData('errors', 'Delivery Charges Add Successfully');
					} else {
						flashData('errors', 'Delivery Charges Not Add.');
					}
				}
				redirect('setDeliveryCharges');
			}
		}
		$this->load->view('admin/delivery_charges', $data);
	}

	public function activeUser()
	{
		$data['title'] = "All Active Users";
		$data['all_data'] = $this->CommonModal->getRowByIdInOrder('user_registration', "verify_status = '1' AND user_status = '1'", 'create_date', 'desc');
		$data['is_register'] = 0;
		$this->load->view('admin/users/user_all', $data);
	}

	public function inactiveUser()
	{
		$data['title'] = "All Inactive Users";
		$data['all_data'] = $this->CommonModal->getRowByIdInOrder('user_registration', "verify_status = '1' AND user_status = '0'", 'create_date', 'desc');
		$data['is_register'] = 0;
		$this->load->view('admin/users/user_all', $data);
	}

	public function userStatus($user_id, $status)
	{
		if ($status == 1) {
			$post = array('user_status' => '0');
			$msg = 'User inactive successfully';
		} else {
			$post = array('user_status' => '1');
			$msg = 'User active successfully';
		}
		$update = $this->CommonModal->updateRowById('user_registration', 'user_id', decryptId($user_id), $post);
		if ($update) {
			flashData('errors', $msg);
		} else {
			flashData('errors', 'Something went wrong. Please try again');
		}
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function userDetails($id)
	{
		$data['title'] = "User Details";
		$data['all_data'] = $this->CommonModal->getSingleRowById('user_registration', "user_id = '" . decryptId($id) . "'");
		$this->load->view('admin/users/user_details', $data);
	}

	// Order 

	public function recentOrders()
	{
		$data['title'] = 'Recent Orders';
		$data['allOrders'] = $this->CommonModal->getRowByIdInOrder('book_product', "booking_status = '0' AND (payment_mode = '1' OR payment_mode = '2' AND transaction_status = '1')", 'create_date', 'DESC');
		$this->load->view('admin/orders', $data);
	}

	public function acceptOrder()
	{
		$estimated_time = $this->input->post('estimated_time');
		$estimated_date = $this->input->post('estimated_date');
		$id = $this->input->post('id');
		if ($estimated_time != '' and $id != '') {
			$update = $this->CommonModal->updateRowById('book_product', 'product_book_id', decryptId($id), array('booking_status' => '1', 'estimated_time' => $estimated_date . ' ' . date('h:i A', strtotime($estimated_time))));
			flashData('errors', 'Order accept successfully');
		} else {
			flashData('errors', 'Something went wrong.');
		}
		redirect('recentOrders');
	}

	public function cancelOrder()
	{
		$cancel_msg = $this->input->post('cancel_msg');
		$id = $this->input->post('id');
		if ($cancel_msg != '' and $id != '') {
			$update = $this->CommonModal->updateRowById('book_product', 'product_book_id', decryptId($id), array('booking_status' => '2', 'cancel_message' => $cancel_msg, 'cancel_by' => 'Admin', 'cancel_date' => date('d.m.Y')));
			flashData('errors', 'Order Cancel successfully');
		} else {
			flashData('errors', 'Something went wrong.');
		}
		redirect('recentOrders');
	}

	public function acceptedOrders()
	{
		$data['allOrders'] = $this->CommonModal->getRowByIdInOrder('book_product', "booking_status = '1' AND (payment_mode = '1' OR payment_mode = '2' AND transaction_status = '1')", 'create_date', 'DESC');
		$data['title'] = 'All Accepted Orders';
		$this->load->view('admin/orders', $data);
	}

	public function dispatchOrder($id, $type)
	{
		if ($type == '3') {
			$post['booking_status'] = '3';
			$message = "Order Dispatch successfully";
		} else {
			$post['booking_status'] = '4';
			$post['order_complete_date'] = setDateTime();
			$message = "Order Complete successfully";
		}
		$update = $this->CommonModal->updateRowById('book_product', 'product_book_id', decryptId($id), $post);
		flashData('errors', $message);
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function dispatchOrders()
	{
		$data['allOrders'] = $this->CommonModal->getRowByIdInOrder('book_product', "booking_status = '3' AND (payment_mode = '1' OR payment_mode = '2' AND transaction_status = '1')", 'create_date', 'DESC');
		$data['title'] = 'All Dispatch Orders';
		$this->load->view('admin/orders', $data);
	}

	public function completedOrders()
	{
		$data['allOrders'] = $this->CommonModal->getRowByIdInOrder('book_product', "booking_status = '4' AND (payment_mode = '1' OR payment_mode = '2' AND transaction_status = '1')", 'create_date', 'DESC');
		$data['title'] = 'All Completed Orders';
		$this->load->view('admin/orders', $data);
	}

	public function cancelOrders()
	{
		$data['allOrders'] = $this->CommonModal->getRowByIdInOrder('book_product', "booking_status = '2' AND (payment_mode = '1' OR payment_mode = '2')", 'create_date', 'DESC');
		$data['title'] = 'All Cancel Orders';
		$this->load->view('admin/orders', $data);
	}

	public function allOrders()
	{
		$date = $this->input->get('date');
		if ($date != "") {
			$data['allOrders'] = $this->CommonModal->getRowByIdInOrder('book_product', "booking_date = '" . date('Y-m-d', strtotime($date)) . "'", 'create_date', 'DESC');
		} else {
			$data['allOrders'] = false;
		}
		$data['title'] = 'All Orders';
		$this->load->view('admin/all_orders', $data);
	}
	public function shiprocket($id)
	{
		$data['favicon'] = base_url() . 'assets/images/favicon.png';
		$data['title'] = "Shiprocket Status";
		$data['checkout'] = $this->CommonModal->getSingleRowById('book_product', ['product_book_id' => $id]);
		$data['checkoutProduct'] = $this->CommonModal->getRowById('book_item', 'order_id', $data['checkout']['order_id']);
		if (count($_POST) > 0) {
			// echo '<pre>';
			// step 1 - generate token
			$post = $this->input->post();
			$token = generateToken();
			$ship_product = array();
			if (!empty($data['checkoutProduct'])) {
				foreach ($data['checkoutProduct'] as $row) {
					$product = $this->CommonModal->getSingleRowById('product', ['product_id' => $row['product_id']]);
					$prod = array(
						"name" => $product['product_name'],
						"sku" => $product['product_id'],
						"units" => (int)$row['no_of_items'],
						"selling_price" => (int)$row['booking_price'],
						"discount" => "",
						"tax" => "",
						"hsn" => ""
					);
					array_push($ship_product, $prod);
				}
			}
			// step 2 - create order
			$shiprocket = createOrder($id, setDateOnly(), $data['checkout']['name'], $data['checkout']['address'], $data['checkout']['city'], $data['checkout']['postal_code'], $data['checkout']['state'], 'India', $data['checkout']['email'], $data['checkout']['contact_no'], (($data['checkout']['payment_mode'] == '0') ? 'COD' : 'Prepaid'), $data['checkout']['final_amount'], $post['length'], $post['breadth'], $post['height'], $post['weight'], ($ship_product), $token);
			$sh = json_decode($shiprocket);
			print_r($sh);exit();
			if ($sh->shipment_id != '') {
				$this->CommonModal->updateRowById('book_product', 'product_book_id', $id, array('status' => '1', 'shipment_id' => $sh->shipment_id));
				$this->session->set_userdata('msg', '<div class="alert alert-danger">Shipment ID is generated and is been saved in shiprocket with id no. ' . $sh->shipment_id . '</div>');
			} else {
				$this->session->set_userdata('msg', '<div class="alert alert-danger">Shipment Id is not created , kindly refer SHiprocket panel for this query.</div>');
			}
			// => step 3 - get recommended courier company
			// $shipping = shipping_charges('123401', $data['checkout']['pincode'], $data['checkout']['weight'], '0', $token, '0');
			// $arr = json_decode($shipping);

			// print_r($arr);
			// if ($arr->status_code != '') {
			//     $arrs = [];
			// } else {
			//     foreach ($arr->data->available_courier_companies as $company) {
			//         if ($company->courier_company_id == $arr->data->recommended_courier_company_id) {
			//             $arrs = array('rate' => $company->rate, 'courier_id' => $company->courier_company_id);
			//         }
			//     }
			// }

			// => assign awb(air way bill)
			// $awb = generateAwb_ship($sh->shipment_id, (($arrs['courier_id'] != '') ? $arrs['courier_id'] : $data['checkout']['courier_id']), $token);
			// $awb_data = json_decode($awb);

			// $post['shiprocket_order_id'] = $sh->order_id;
			// $post['shipment_id'] = $sh->shipment_id;

			// if ($awb_data->awb_assign_status == 1) {
			//     $post['awb_code'] = $awb_data->response->data->awb_code;
			//     $post['awb_assign_status'] = $awb_data->awb_assign_status;
			//     $post['awb_pickup'] = $awb_data->response->data->pickup_scheduled_date;
			//     $post['awb_response'] = $awb;
			//     $post['order_response'] = $shiprocket;
			//     $post['status'] = '5';
			// 	echo 'aws';
			// 	print_r($post);
			//     $insert = $this->CommonModal->updateRowById('book_product', 'product_book_id', $id, $post);
			//     if ($insert) {
			//         $this->session->set_userdata('msg', '<div class="alert alert-success">Order is ready  for shipment.Pickup is scheduled on ' . $awb_data->response->data->pickup_scheduled_date . ' by ' . $awb_data->response->data->courier_name . '</div>');
			//         // redirect(base_url('shiprocket_track/' . $id));
			//     } else {
			//         $this->session->set_userdata('msg', '<div class="alert alert-danger">Order is now Initiated via shiprocket. Contact Shiprocket for any assistance. </div>');
			//         // redirect(base_url('shiprocket/' . $id));
			//     }
			// } else {
			// 	echo 'non aws';
			// 	print_r($post);
			//     $insert = $this->CommonModal->updateRowById('book_product', 'product_book_id', $id, $post);
			//     if ($awb_data->message != '') {
			//         $this->session->set_userdata('msg', '<div class="alert alert-danger">' . $awb_data->message . '</div>');
			//     } else {

			//         if ($awb_data->response->data->awb_assign_error != '') {
			//             // echo $awb_data->response->data->awb_assign_error;
			//             $this->session->set_userdata('msg', '<div class="alert alert-danger">' . $awb_data->response->data->awb_assign_error . '</div>');
			//         } else {
			//             $this->session->set_userdata('msg', '<div class="alert alert-danger">AWB Not generated , kindly refer SHiprocket panel for this query.</div>');
			//         }
			//     }
			//     // exit();
			//     // redirect(base_url('shiprocket/' . $id));
			// }
			// print_r($_SESSION);
			// exit;
		} else {
		}
		$this->load->view('admin/shiprocket_order', $data);
	}
	public function categoryFeatured($id, $featured)
	{

		$categoryData = ['featured' => $featured];
		$update = $this->CommonModal->updateRowById('category', 'category_id', decryptId($id), $categoryData);
		redirect($_SERVER['HTTP_REFERER']);
	}
}
