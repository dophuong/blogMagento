<?php
$installer = $this;
$installer->startSetup();
$table = $installer->getConnection()
        ->newTable($installer->getTable('blog/users'))
        ->addColumn('user_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
                'identity' => true,
                'unsigned' => true,
                'nullable' => false,
                'primary'  => true,
        ), 'User id')
        ->addColumn('created_at', Varien_Db_Ddl_Table:: TYPE_TIMESTAMP, null, array(
                'nullable' => true,
                'unsigned' => true,
        ), 'Created at')
        ->addColumn('updated_at', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
                'nullable' => true,
                'unsigned' => true,
        ), 'Updated at')
        ->addColumn('username', Varien_Db_Ddl_Table::TYPE_VARCHAR, 50, array(
                        'nullable' => false,
                        'unsigned' => true,
                ), 'Username')
        ->addColumn('password', Varien_Db_Ddl_Table::TYPE_VARCHAR, 32, array(
                        'nullable' => false,
                        'unsigned' => true,
                ), 'Password')
        ->addColumn('email', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
                        'nullable' => false,
                        'unsigned' => true,
                ), 'Email address')
        ->addColumn('status', Varien_Db_Ddl_Table::TYPE_SMALLINT, 1, array(
                        'nullable' => false,
                        'unsigned' => true,
                        'default'  => '1'
                ), 'Status')
        ->setComment('Blog Users');
$installer->getConnection()->createTable($table);

$table = $installer->getConnection()
        ->newTable($installer->getTable('blog/posts'))
        ->addColumn('post_id', Varien_Db_Ddl_Table::
        TYPE_INTEGER, null, array(
                'identity' => true,
                'unsigned' => true,
                'nullable' => false,
                'primary'  => true,
        ), 'Post id')
        ->addColumn('user_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
                        'nullable' => false,
                        'unsigned' => true,
                ), 'User id')
        ->addColumn('title', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
                        'nullable' => false,
                        'unsigned' => true,
                ), 'Title')
        ->addColumn('content', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
                        'nullable' => false,
                        'unsigned' => true,
                ), 'Content')
        ->addColumn('image_url', Varien_Db_Ddl_Table::TYPE_VARCHAR, 255, array(
                        'nullable' => false,
                        'unsigned' => true,
                ), 'Image Url')
        ->addColumn('is_private', Varien_Db_Ddl_Table::TYPE_SMALLINT, 1, array(
                        'nullable' => false,
                        'unsigned' => true,
                        'default'  => '1'
                ), 'Is_Private')
        ->addColumn('post_date', Varien_Db_Ddl_Table:: TYPE_TIMESTAMP, null, array(
                'nullable' => true,
                'unsigned' => true,
        ), 'Post Date')
        ->addForeignKey(
                $installer->getFkName('blog/posts', 'user_id', 'blog/users', 'user_id'),
                'user_id',
                $installer->getTable('blog/users'),
                'user_id',
                Varien_Db_Ddl_Table::ACTION_CASCADE,
                Varien_Db_Ddl_Table::ACTION_CASCADE)
        ->setComment('Blog Posts');
$installer->getConnection()->createTable($table);

$installer->endSetup();