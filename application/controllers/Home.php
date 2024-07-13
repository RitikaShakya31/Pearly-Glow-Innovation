<?php
class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Home | Pearly Glow Innovation';
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $curdate= date('d-m-Y');
            $msg = "Date: " . $curdate . ("<br>");
            $msg .= "Hello !" . ("<br>");
           $msg .= "Here is Query Details : " . ("<br>");
            $msg .= "Name : " . $post['name'] . ("<br>");
            $msg .= "Phone Number : " . $post['phone'] . ("<br>");
             $msg .= "Email Id : " . $post['email'] . ("<br>");
            $msg .= "Subject : " . $post['subject'] . ("<br>");
            $msg .= "Message : " . $post['message'] . ("<br>");
           
            $sendMail = send_email('info@pearlyglowinnovations.co.uk', 'Pearly Glow Innovations', $msg);            
            $insertData = $this->CommonModal->insertRowReturnId('tbl_contact_query', $post);
            if ($insertData) {
                flashMultiData(['success_status' => "success", 'msg' => "Contact Query Submitted"]);
            } else {
                flashMultiData(['success_status' => "error", 'msg' => "Something Went Worng."]);
            }
        }
        $data['contact'] = $this->CommonModal->getAllRows('setting');
        $data['prod'] = $this->CommonModal->getAllRows('tbl_product');
        $data['blog'] = $this->CommonModal->getAllRowsInOrderWithLimit('blog', '3', 'id', 'DESC');
        $data['event'] = $this->CommonModal->getAllRowsInOrderWithLimit('event', '3', 'id', 'DESC');
        $data['testimonial'] = $this->CommonModal->getAllRowsInOrderWithLimit('testimonial', '4', 'id', 'DESC');
        $data['cate'] = $this->CommonModal->getAllRowsInOrderWithLimit('category', '25', 'priority', 'ASC');
        $data['banner'] = $this->CommonModal->getAllRowsInOrderWithLimit('banner', '4', 'priority', 'ASC');
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('home');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }
    public function gallery()
    {
        $data['title'] = 'Gallery | Pearly Glow Innovation';
        $data['contact'] = $this->CommonModal->getAllRows('setting');
        $data['cate'] = $this->CommonModal->getAllRowsInOrderWithLimit('category', '25', 'priority', 'ASC');
        $data['gallery'] = $this->CommonModal->getAllRowsInOrder('gallery', 'id', 'desc');
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('gallery');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }
    public function video_gallery()
    {
        $data['title'] = 'Gallery | Pearly Glow Innovation';
        $data['contact'] = $this->CommonModal->getAllRows('setting');
        $data['cate'] = $this->CommonModal->getAllRowsInOrderWithLimit('category', '25', 'priority', 'ASC');
        $data['vdo_gallery'] = $this->CommonModal->getAllRowsInOrder('tbl_video_gallery', 'id', 'desc');
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('video_gallery');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }
    public function about()
    {
        $data['title'] = 'About | Pearly Glow Innovation';
        $data['contact'] = $this->CommonModal->getAllRows('setting');
        $data['cate'] = $this->CommonModal->getAllRowsInOrderWithLimit('category', '25', 'priority', 'ASC');
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('about');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }
    public function product($id = null, $sid = null)
    {
        $data['title'] = 'Our Products | Pearly Glow Innovation';
        $data['product'] = $this->CommonModal->getRowByIdInOrder('product', "product_type = '2'", 'product_id', 'ASC');
        // if (!empty($id)) {
        //     $data['subcategory'] = $this->CommonModal->getRowByMoreId('sub_category', ['category_id' => $id]);
        // } else {
        //     $data['subcategory'] = $this->CommonModal->getRowByMoreId('category', ['category_id' => $id]);
        // }
        // $data['product'] = $this->CommonModal->getRowByMoreId('tbl_product', ['sub_category_id ' => $sid]);
        // $product_name = ((isset($_GET['product_name'])) ? $_GET['product_name'] : '');
        // if ($product_name != '') {
        //     $conditions[] = "`product_name` LIKE '%{$product_name}%'";
        // }
        // $search_sql = "SELECT * FROM `tbl_product`";

        // if (isset($conditions) && count($conditions) > 0) {
        //     $search_sql .= " WHERE " . implode($conditions);
        // }
        // $data['product'] = $this->CommonModal->runQuery($search_sql);
        $cateid = $this->input->get('category');
        $data['cateid'] = decryptId($cateid);
        $data['contact'] = $this->CommonModal->getAllRows('setting');
        $data['cate'] = $this->CommonModal->getAllRowsInOrderWithLimit('category', '25', 'priority', 'ASC');
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('product');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }
    public function precisionpro()
    {
        $data['title'] = 'Precision Pro | Pearly Glow Innovation';
        $cateid = $this->input->get('category');
        $data['cateid'] = decryptId($cateid);
        $data['contact'] = $this->CommonModal->getAllRows('setting');
        $data['cate'] = $this->CommonModal->getAllRowsInOrderWithLimit('category', '25', 'priority', 'ASC');
        $data['sidecategory'] = $this->CommonModal->getAllRowsInOrder('category', 'category_id', 'ASC');
        $data['subcategory'] = $this->CommonModal->getAllRowsInOrder('sub_category', 'category_id', 'DESC');
        $data['contact'] = $this->CommonModal->getAllRows('setting');
        $data['product'] = $this->CommonModal->getRowByIdInOrder('product', "product_type = '1'", 'product_id', 'ASC');

        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('precisionpro');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }
    public function catalog()
    {
        $data['cate'] = $this->CommonModal->getAllRowsInOrderWithLimit('category', '25', 'priority', 'ASC');
        $this->load->view('catalog', $data);
    }
    public function brochures()
    {
        $data['cate'] = $this->CommonModal->getAllRowsInOrderWithLimit('category', '25', 'priority', 'ASC');
        $this->load->view('brochures', $data);
    }
    public function contact()
    {
        $data['contact'] = $this->CommonModal->getAllRows('setting');
        $data['cate'] = $this->CommonModal->getAllRowsInOrderWithLimit('category', '25', 'priority', 'ASC');

        if (count($_POST) > 0) {
            $post = $this->input->post();
             $curdate= date('d-m-Y');
            $msg = "Date: " . $curdate . ("<br>");
            $msg .= "Hello !" . ("<br>");
           $msg .= "Here is Query Details : " . ("<br>");
            $msg .= "Name : " . $post['name'] . ("<br>");
            $msg .= "Phone Number : " . $post['phone'] . ("<br>");
             $msg .= "Email Id : " . $post['email'] . ("<br>");
            $msg .= "Subject : " . $post['subject'] . ("<br>");
            $msg .= "Message : " . $post['message'] . ("<br>");
           
            $sendMail = send_email('info@pearlyglowinnovations.co.uk', 'Pearly Glow Innovations', $msg);  
            $insertData = $this->CommonModal->insertRowReturnId('tbl_contact_query', $post);
            if ($insertData) {
                flashMultiData(['success_status' => "success", 'msg' => "Contact Query Submitted"]);
            } else {
                flashMultiData(['success_status' => "error", 'msg' => "Something Went Wrong."]);
            }
        }
        $data['title'] = 'Contact | Pearly Glow Innovation';
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('contact');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }
    public function product_details($id)
    {

        $data['contact'] = $this->CommonModal->getAllRows('setting');
        $data['product'] = $this->CommonModal->getSingleRowById('tbl_product', ['product_id ' => $id]);
        $data['prod'] = $this->CommonModal->getAllRows('tbl_product');

        $data['cate'] = $this->CommonModal->getAllRowsInOrderWithLimit('category', '25', 'priority', 'ASC');
        $data['title'] = 'Product Details | Pearly Glow Innovation';
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('product_details');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }
    public function checkout()
    {
        if (!$this->session->has_userdata('isLogin')) {
            redirect(base_url('login'));
        }
        $data['login'] = $this->CommonModal->getRowById('user_registration', 'user_id', $this->session->userdata('isLogin'));
        $data['contact'] = $this->CommonModal->getAllRows('setting');
        $data['cate'] = $this->CommonModal->getAllRowsInOrderWithLimit('category', '25', 'priority', 'ASC');
        $data['title'] = 'Checkout | Pearly Glow Innovation';
        foreach ($this->cart->contents() as $items):
            $mydata[] = array(
                'create_date' => setDateTime(),
                // 'order_id' => $orderId,
                'no_of_items' => $items['qty'],
                'base_price' => $items['price'],
                'user_price' => $items['price'],
                'booking_price' => ($items['price'] * $items['qty']),
                'product_id' => $items['id'],
            );
        endforeach;
        $insert2 = $this->CommonModal->insertRowInBatch('tbl_book_item', $mydata);
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $post['user_id'] = sessionId('login_user_id');
            $runQuery = $this->CommonModal->insertRowReturnId('tbl_book_product', $post);
            redirect('thank_you');
        }
        $this->load->view('checkout', $data);
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }
    public function policies()
    {
        $data['contact'] = $this->CommonModal->getAllRows('setting');
        $data['cate'] = $this->CommonModal->getAllRowsInOrderWithLimit('category', '25', 'priority', 'ASC');
        $data['title'] = 'Policies | Pearly Glow Innovation';
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('policies');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }

    public function sign_up()
    {
        $data['title'] = 'Sign Up | Pearly Glow Innovation';
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $emailExists = $this->CommonModal->checkEmailExists($post['email_id']);
            if ($emailExists) {
                $this->session->set_flashdata('msg', '<div class="alert alert-warning">You are already registered. Please log in instead.</div>');
                redirect('login');
                return;
            }
            $insertData = $this->CommonModal->insertRowReturnId('user_registration', $post);
            if ($insertData) {
                flashMultiData(['success_status' => "success", 'msg' => "Successfully Registered"]);
            } else {
                flashMultiData(['success_status' => "error", 'msg' => "Something went wrong."]);
            }
        }
        $this->load->view('includes/header-link', $data);
        $this->load->view('sign_up');
    }
    public function login()
    {
        $data['title'] = 'Login | Pearly Glow Innovation';
        if (count($_POST) > 0) {
            $email = $this->input->post('email_id');
            $password = $this->input->post('password');
            $user_id = $this->CommonModal->getSingleRowById('user_registration', "email_id = '$email'");
            if ($user_id) {
                if ($user_id['password'] == $password) {
                    $this->session->set_userdata('isLogin', $user_id['user_id']);
                    redirect(base_url('/'));
                } else {
                    $this->session->set_userdata('msg', '<div class="alert alert-danger">Invalid Password</div>');
                }
            }
        }
        $this->load->view('includes/header-link', $data);
        $this->load->view('login');
    }
    public function thank_you()
    {
        $data['title'] = 'Thank You | Pearly Glow Innovation';
        $this->cart->destroy();
        $data['contact'] = $this->CommonModal->getAllRows('setting');
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('thank_you');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }
    public function fetch_totalamount()
    {
        echo '₹' . $this->cart->total() . '/-';
    }

    public function fetch_data_cart()
    {
        $this->load->view('cart-list');
    }
    public function fetch_totalitems()
    {
        echo $this->cart->total_items();
    }
    public function addToCart()
    {
        $product_id = $this->input->post('pid');
        $qty = $this->input->post('qty');
        $product = $this->CommonModal->getRowByIdfield('tbl_product', 'product_id', $product_id, array('product_id', 'sale_price', 'product_name', 'quantity_type'));
        $imgdata = getSingleRowById('tbl_product_image', array('product_id' => $product_id));
        $data = array(
            'id' => $product[0]['product_id'],
            'qty' => $qty,
            'quantity_type' => $product[0]['quantity_type'],
            'price' => $product[0]['sale_price'],
            'name' => clean($product[0]['product_name']),
            'image' => $imgdata['image_path']
        );
        $this->cart->insert($data);
        print_r($this->cart->contents());
    }
    public function update_qty()
    {
        extract($this->input->post());
        $data = array(
            'rowid' => $rowid,
            'qty' => $qty
        );
        $this->cart->update($data);
    }


    public function delete_item()
    {
        $product_id = $this->input->post('pid');
        $data = array(
            'rowid' => $product_id,
            'qty' => 0
        );
        $this->cart->update($data);
    }
    public function fetch_cart()
    {
        $this->load->view('cart-product');
    }

    public function logout()
    {
        $this->session->unset_userdata('login_user_id');
        $this->session->unset_userdata('isLogin');
        $this->session->unset_userdata('login_user_name');
        $this->session->unset_userdata('login_user_emailid');
        $this->session->unset_userdata('login_user_contact');
        $this->session->unset_userdata('login_user_type');
        redirect(base_url('login'));
    }



}
