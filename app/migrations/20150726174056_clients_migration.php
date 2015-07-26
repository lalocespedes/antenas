<?php

use Phinx\Migration\AbstractMigration;

class ClientsMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    public function change()
    {
         $clients = $this->table('clients');
         $clients->addColumn('client_nombre', 'string', array('limit' => 255))
                 ->addColumn('client_activo', 'boolean', array('default' => '1'))
                 ->addColumn('client_calle', 'string', array('limit' => 100, 'null' => true))
                 ->addColumn('client_colonia', 'string', array('limit' => 100, 'null' => true))
                 ->addColumn('client_NoExt', 'string', array('limit' => 50, 'null' => true))
                 ->addColumn('client_NoInt', 'string', array('limit' => 50, 'null' => true))
                 ->addColumn('client_codigoPostal', 'string', array('limit' => 10, 'null' => true))
                 ->addColumn('client_ciudad', 'string', array('limit' => 100, 'null' => true))
                 ->addColumn('client_estado', 'string', array('limit' => 100, 'null' => true))
                 ->addColumn('client_pais', 'string', array('limit' => 100, 'null' => true))
                 ->addColumn('client_tel', 'string', array('limit' => 20, 'null' => true))
                 ->addColumn('client_celular', 'string', array('limit' => 20, 'null' => true))
                 ->addColumn('client_correo', 'string', array('limit' => 255, 'null' => true))
                 ->addColumn('client_notas', 'string', array('limit' => 255, 'null' => true))
                 ->addColumn('client_rfc', 'string', array('limit' => 255, 'null' => true))
                 ->addColumn('client_etiqueta', 'string', array('limit' => 255, 'null' => true))
                 ->addColumn('created_at', 'timestamp')
                 ->addColumn('updated_at', 'timestamp', array('null'    => true, 'default' => null))
                 ->create();
                 
    }
}
