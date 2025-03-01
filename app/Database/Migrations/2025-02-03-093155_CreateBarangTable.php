<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBarangTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'noresi' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'unique'     => true,
            ],
            'isi_barang' => [
                'type'       => 'TEXT',
            ],
            'penerima' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'no_tlp_penerima' => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'alamat_penerima' => [
                'type'       => 'TEXT',
            ],
            'kota_tujuan' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'pengirim' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'no_tlp_pengirim' => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'alamat_pengirim' => [
                'type'       => 'TEXT',
            ],
            'lokasi_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'status_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'user_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'keterangan' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('barang');
        $this->forge->addForeignKey('no_resi', 'barang_log', 'barang_id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        $this->forge->dropTable('barang');
    }
}
