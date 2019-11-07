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

        public function get_child_categories()
        {
            $query = $this->db->get('all_categories');
            return $query->result();
        }

        public function insert_entry()
        {
            $this->title    = $_POST['title']; // please read the below note
            $this->content  = $_POST['content'];
            $this->date     = time();

            $this->db->insert('entries', $this);
        }

        public function update_entry()
        {
            $this->title    = $_POST['title'];
            $this->content  = $_POST['content'];
            $this->date     = time();

            $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

    }