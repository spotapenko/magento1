<?php
$installer = $this;
$installer->startSetup();
$installer->addEntityType('complextext_eavfeedbackpost', array(
    //entity_mode is the URI you'd pass into a Mage::getModel() call
    'entity_model'    => 'complextext/eavfeedbackpost',

    //table refers to the resource URI
    //...eavblog_posts

    'table'           =>'complextext/eavfeedbackpost',
));

//http://stackoverflow.com/questions/16995383/magento-1-6-2-got-double-prefix-while-calling-createentitytables-during-custom-e
$table = strtolower(substr(ltrim($this->getTable('complextext/eavfeedbackpost')), strlen(Mage::getConfig()->getTablePrefix())));

$installer->createEntityTables($table);

$installer->endSetup();