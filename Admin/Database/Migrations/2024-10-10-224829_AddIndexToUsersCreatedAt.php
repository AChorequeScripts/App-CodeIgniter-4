<?php

namespace Admin\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddIndexToUsersCreatedAt extends Migration
{
    public function up()
    {
        $this->forge->addkey('created_at');
        $this->forge->processIndexes('users');
    }

    public function down()
    {
        $this->forge->dropkey('users', 'created_at');
    }
}
