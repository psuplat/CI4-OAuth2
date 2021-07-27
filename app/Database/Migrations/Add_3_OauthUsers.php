<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Add_3_OauthUsers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
                'unique' => true,
                'null' => true
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '250',
                'null' => true
            ],
            'scope' => [
                'type' => 'VARCHAR',
                'constraint' => '250',
                'null' => true
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
    ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('oauth_users');
    }

    public function down()
    {
        $this->forge->dropTable('oauth_users');
    }
}