<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Add_2_OauthScopes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'scope' => [
                'type' => 'VARCHAR',
                'constraint' => '80',
                'unique' => true
            ],
            'is_default' => [
                'type' => 'TINYINT',
                'constraint' => '1',
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
        $this->forge->createTable('oauth_scopes');
    }

    public function down()
    {
        $this->forge->dropTable('oauth_scopes');
    }
}