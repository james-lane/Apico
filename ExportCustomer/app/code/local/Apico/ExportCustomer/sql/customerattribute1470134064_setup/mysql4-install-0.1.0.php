<?php
$installer = $this;
$installer->startSetup();


$installer->addAttribute("customer", "exportcustomer",  array(
    "type"     => "int",
    "backend"  => "",
    "label"    => "Export Customer",
    "input"    => "select",
    "source"   => "eav/entity_attribute_source_boolean",
    "visible"  => true,
    "required" => true,
    "default" => "0",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

	));

        $attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "exportcustomer");

        
$used_in_forms=array();

$used_in_forms[]="adminhtml_customer";
        $attribute->setData("used_in_forms", $used_in_forms)
		->setData("is_used_for_customer_segment", true)
		->setData("is_system", 0)
		->setData("is_user_defined", 1)
		->setData("is_visible", 0)
		->setData("sort_order", 100)
		;
        $attribute->save();
	
	
	
$installer->endSetup();
	 