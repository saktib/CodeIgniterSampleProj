<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Migration_Add_all_categories extends CI_Migration {

        public function up()
        {
            $this->dbforge->add_field(array(
                'id' => array(
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
                ),
                'parent_id' => array(
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => TRUE,
                    'null' => TRUE,
                ),
                'category_name' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ),
            ));
            $this->dbforge->add_key('id', TRUE);
            $this->dbforge->add_key('parent_id');
            $this->dbforge->create_table('all_categories');
        }

        public function down()
        {
            $this->dbforge->drop_table('all_categories');
        }
    }