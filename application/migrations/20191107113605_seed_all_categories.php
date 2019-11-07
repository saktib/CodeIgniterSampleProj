<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Migration_Seed_all_categories extends CI_Migration {

        public function up()
        {
            $sql = 'INSERT INTO `all_categories` (`id`, `parent_id`, `category_name`) VALUES
                    (1, NULL, \'Category A\'),
                    (2, NULL, \'Category B\'),
                    (3, 1, \'SUB A1\'),
                    (4, 1, \'SUB A2\'),
                    (5, 2, \'SUB B1\'),
                    (6, 2, \'SUB B2\'),
                    (7, 3, \'SUB SUB A1-1\'),
                    (8, 3, \'SUB SUB A1-2\'),
                    (9, 4, \'SUB SUB A2-1\'),
                    (10, 4, \'SUB SUB A2-2\'),
                    (11, 5, \'SUB SUB B1-1\'),
                    (12, 5, \'SUB SUB B1-2\'),
                    (13, 6, \'SUB SUB B2-1\'),
                    (14, 6, \'SUB SUB B2-2\')';
            $this->db->query($sql);
        }

        public function down()
        {
            $sql = 'TRUNCATE TABLE `all_categories`';
            $this->db->query($sql);
        }
    }