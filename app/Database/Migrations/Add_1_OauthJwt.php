<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Add_1_OauthJwt extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'client_id' => [
                'type' => 'VARCHAR',
                'constraint' => '80'
            ],
            'subject' => [
                'type' => 'VARCHAR',
                'constraint' => '80',
                'null'=> true
            ],
            'public_key' => [
                'type' => 'TEXT',
                'null'=> true
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
                'null'=> true,
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'null'=> true,
            ]
    ]);
        $this->forge->addKey('client_id', true);
        $this->forge->createTable('oauth_jwt');
    }

    public function down()
    {
        $this->forge->dropTable('oauth_jwt');
    }
}