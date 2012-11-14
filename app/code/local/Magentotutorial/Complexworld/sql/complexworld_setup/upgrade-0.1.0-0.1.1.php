<?php

$this->startSetup();
$this->addAttribute('complexworld_eavblogpost', 'title', array(
    //the EAV attribute type, NOT a MySQL varchar
    'type'              => 'varchar',
    'label'             => 'Title',
    'input'             => 'text',
    'class'             => '',
    'backend'           => '',
    'frontend'          => '',
    'source'            => '',
    'required'          => true,
    'user_defined'      => true,
    'default'           => '',
    'unique'            => false,
));
$this->addAttribute('complexworld_eavblogpost', 'content', array(
    'type'              => 'text',
    'label'             => 'Content',
    'input'             => 'textarea',
));
$this->addAttribute('complexworld_eavblogpost', 'date', array(
    'type'              => 'datetime',
    'label'             => 'Post Date',
    'input'             => 'datetime',
    'required'          => false,
));
$this->endSetup();
