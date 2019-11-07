<?php
    class Category_model extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function get_master_categories()
        {
            $query = $this->db->get_where('all_categories', array('parent_id =' => NULL));
            return $query->result();
        }

        public function get_child_categories($id)
        {
            $query = $this->db->get_where('all_categories', array('parent_id =' => $id));
            return $query->result();
        }

        public function get_distinct_categories()
        {
            $this->db->distinct();
            $this->db->select('parent_id');
            $query = $this->db->get('all_categories');
            return $query->result();
        }
    }