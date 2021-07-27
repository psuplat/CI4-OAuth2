<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Add_6_OauthAccessTokens extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'access_token' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'expires' => [
                'type' => 'DATETIME',
                'null' => true
            ],
            'scope' => [
                'type' => 'VARCHAR',
                'constraint' => '250',
                'null' => true
            ],
            'client_id' => [
                'type' => 'VARCHAR',
                'constraint' => '80'
            ],
            'user_id' => [
                'type' => 'INT',
                'unsigned' => true
            ],
            'revoked' => [
                'type' => 'TINYINT',
                'constraint' => '1',
                'default' => 0,
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
        $this->forge->addKey('access_token', true);
        $this->forge->addForeignKey('user_id','oauth_users','id','Set NULL','CASCADE');
        $this->forge->addForeignKey('client_id','oauth_clients','client_id','CASCADE','CASCADE');
        $this->forge->createTable('oauth_access_tokens');
    }

    public function down()
    {
        $this->forge->dropTable('oauth_access_tokens');
    }
}