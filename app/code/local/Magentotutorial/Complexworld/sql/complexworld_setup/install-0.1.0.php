<?php

$installer = $this;
/* @var $installer Magentotutorial_Complexworld_Model_Resource_Setup */
$installer->startSetup();
$installer->addEntityType('complexworld_eavblogpost', array(
    //entity_mode is the URI you'd pass into a Mage::getModel() call
    'entity_model'    => 'complexworld/eavblogpost',

    //table refers to the resource URI complexworld/eavblogpost
    //<complexworld_resource>...<eavblogpost><table>eavblog_posts</table>
    'table'           =>'complexworld/eavblogpost',
));
$installer->createEntityTables($installer->getTable('complexworld/eavblogpost'));
$installer->endSetup();
