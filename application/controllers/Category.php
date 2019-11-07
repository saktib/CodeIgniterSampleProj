<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    /**
     * Category Controller
     * @author saktib
     *
     */
    class Category extends CI_Controller {

    //private $masterCategories;

        /*
         *
         */
        public function index()
        {
            $this->load->model('Category_model');
            $data['masterCategories'] = $this->Category_model->get_master_categories();
            $this->load->view('category_view', $data);
        }
    }
