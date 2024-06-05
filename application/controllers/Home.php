<?php
class Home extends CI_Controller

{
    public function index()
    {
        $data['title'] = 'Home | Pearly Glow Innovation';
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $insertData = $this->CommonModal->insertRowReturnId('tbl_contact_query', $post);
            if ($insertData) {
                flashMultiData(['success_status' => "success", 'msg' => "Contact Query Submitted"]);
            } else {
                flashMultiData(['success_status' => "error", 'msg' => "Something Went Worng."]);
            }
        }
        $data['contact'] = $this->CommonModal->getAllRows('setting');
        $data['blog'] = $this->CommonModal->getAllRowsInOrderWithLimit('blog', '3', 'id', 'DESC');
        $data['testimonial'] = $this->CommonModal->getAllRowsInOrderWithLimit('testimonial', '4', 'id', 'DESC');
        $data['cate'] = $this->CommonModal->getAllRowsInOrderWithLimit('category', '25', 'category_id', 'ASC');
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
        $data['gallery'] = $this->CommonModal->getAllRowsInOrder('gallery', 'id', 'desc');
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('gallery');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }
    public function about()
    {
        $data['title'] = 'About | Pearly Glow Innovation';
        $data['contact'] = $this->CommonModal->getAllRows('setting');
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('about');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }
    public function product()
    {
        $data['title'] = 'Our Products | Pearly Glow Innovation';
        $cateid = $this->input->get('category');
        $data['cateid'] = decryptId($cateid);
        $data['contact'] = $this->CommonModal->getAllRows('setting');
        $data['sidecategory'] = $this->CommonModal->getAllRowsInOrder('category', 'category_id', 'ASC');
        $data['subcategory'] = $this->CommonModal->getAllRowsInOrder('sub_category', 'category_id', 'DESC');
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
        $data['sidecategory'] = $this->CommonModal->getAllRowsInOrder('category', 'category_id', 'ASC');
        $data['subcategory'] = $this->CommonModal->getAllRowsInOrder('sub_category', 'category_id', 'DESC');
        $data['contact'] = $this->CommonModal->getAllRows('setting');
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('precisionpro');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }
    public function catalog()
    {

        // $this->load->view('includes/header-link');
        // $this->load->view('includes/header');
        $this->load->view('catalog');
        // $this->load->view('includes/footer');
        // $this->load->view('includes/footer-link');
    }
    public function contact()
    {
        $data['contact'] = $this->CommonModal->getAllRows('setting');
        if (count($_POST) > 0) {
        $post = $this->input->post();
        $insertData = $this->CommonModal->insertRowReturnId('tbl_contact_query', $post);
        if ($insertData) {
            flashMultiData(['success_status' => "success", 'msg' => "Contact Query Submitted"]);
        } else {
            flashMultiData(['success_status' => "error", 'msg' => "Something Went Worng."]);
        }
    }
        $data['title'] = 'Contact | Pearly Glow Innovation';
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('contact');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }
    public function product_details()
    {
        $data['contact'] = $this->CommonModal->getAllRows('setting');
        $data['title'] = 'Product Details | Pearly Glow Innovation';
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('product_details');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }
    public function checkout()
    {
        $data['contact'] = $this->CommonModal->getAllRows('setting');
        $data['title'] = 'Checkout | Pearly Glow Innovation';
        $this->load->view('includes/header-link', $data);
        $this->load->view('includes/header');
        $this->load->view('checkout');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }
    public function policies()
    {
        $data['contact'] = $this->CommonModal->getAllRows('setting');
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
        $this->load->view('includes/header-link', $data);
        // $this->load->view('includes/header');
        $this->load->view('sign_up');
        // $this->load->view('includes/footer');
        // $this->load->view('includes/footer-link');
    }
    public function login()
    {
        $data['title'] = 'Login | Pearly Glow Innovation';
        $this->load->view('includes/header-link');
        // $this->load->view('includes/header');
        $this->load->view('login');
        // $this->load->view('includes/footer');
        // $this->load->view('includes/footer-link');
    }
}
