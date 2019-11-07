<?php
    class Migrate extends CI_Controller
    {

        public function index()
        {
            $this->load->library('migration');

            if ($this->migration->current() === FALSE)
            {
                show_error($this->migration->error_string());
            }else{
                echo "<b>Migration completed, required table and data got created!</b> <br>";
                echo "<a href='/CodeIgniterSampleProj/index.php/category'> click here </a> to open your application!<br>";

            }
        }

    }