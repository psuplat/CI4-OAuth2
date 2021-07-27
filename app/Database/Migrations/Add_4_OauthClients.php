<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Add_4_OauthClients extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'client_id' => [
                'type' => 'VARCHAR',
                'constraint' => '80',
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '250',
                'null' => true
            ],
            'client_secret' => [
                'type' => 'VARCHAR',
                'constraint' => '250',
                'null' => true
            ],
            'redirect_uri' => [
                'type' => 'VARCHAR',
                'constraint' => '250',
                'null' => true
            ],
            'grant_types' => [
                'type' => 'VARCHAR',
                'constraint' => '80',
                'null' => true
            ],
            'scope' => [
                'type' => 'VARCHAR',
                'constraint' => '250',
                'null' => true
            ],
            'user_id' => [
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
        $this->forge->addKey('client_id', true);
        $this->forge->addForeignKey('user_id','oauth_users','id');
        $this->forge->createTable('oauth_clients');
    }

    public function down()
    {
        $this->forge->dropTable('oauth_clients');
    }
}