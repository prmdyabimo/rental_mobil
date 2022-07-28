<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'user_id' => [
                'type'       => 'INT',
            ],
            'user_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'user_email' => [
                'type'  => 'VARCHAR',
                'constraint' => '100'
            ],
            'user_password' => [
                'type' => 'VARCHAR',
                'constraint' => '200'
            ]
        ]);
        $this->forge->addKey('user_id', true);
        // nama table
        $this->forge->createTable('pemilik');
    }

    public function down()
    {
        //
        $this->forge->dropTable('pemilik');
    }
}
