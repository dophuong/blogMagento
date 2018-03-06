<?php
$installer = $this;
$installer->startSetup();
$table = $installer->getConnection()
    ->newTable($installer->getTable('users'))
    ->addColumn('user_id', Varien_Db_Ddl_Table::
    TYPE_INTEGER, null, array(
        'identity' => true,
        'unsigned' => true,
        'nullable' => false,
        'primary'  => true,
    ), 'User id')
    ->addColumn('created_at', Varien_Db_Ddl_Table::
    TYPE_TIMESTAMP, null, array(
        'nullable' => false,
    ), 'Created at')
    ->addColumn('updated_at', Varien_Db_Ddl_Table::
    TYPE_TIMESTAMP, null, array(
        'nullable' => false,
    ), 'Updated at')
    ->addColumn('username', Varien_Db_Ddl_Table::TYPE_TEXT,
        64, array(
            'nullable' => false,
            'unique'   => false
        ), 'User name')
    ->addColumn('password', Varien_Db_Ddl_Table::TYPE_TEXT,
        64, array(
            'nullable' => false,
        ), 'Password')
    ->addColumn('email', Varien_Db_Ddl_Table::TYPE_TEXT,
        64, array(
            'nullable' => false,
        ), 'Email address')
    ->addIndex($installer->getIdxName('users',
        array('email')),
        array('email'))
    ->setComment('Helloworld');
$installer->getConnection()->createTable($table);
$installer->endSetup();