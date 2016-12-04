<?php
use Migrations\AbstractMigration;

class CreateContacts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('contacts');
        $table->addColumn('first_name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('last_name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('email', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('message', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addIndex([
            'first_name',
        ], [
            'name' => 'BY_FIRST_NAME',
            'unique' => false,
        ]);
        $table->addIndex([
            'last_name',
        ], [
            'name' => 'BY_LAST_NAME',
            'unique' => false,
        ]);
        $table->addIndex([
            'email',
        ], [
            'name' => 'BY_EMAIL',
            'unique' => false,
        ]);
        $table->addIndex([
            'message',
        ], [
            'name' => 'BY_MESSAGE',
            'unique' => false,
        ]);
        $table->create();
    }
}
