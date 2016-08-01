<?php
$installer = $this;
$installer->startSetup();


$installer->addAttribute("customer", "specialist",  array(
    "type"     => "int",
    "backend"  => "",
    "label"    => "Specialist",
    "input"    => "select",
    "source"   => "customerattribute/eav_entity_attribute_source_customeroptions14700407810",
    "visible"  => true,
    "required" => false,
    "default" => "",
    "frontend" => "",
    "unique"     => false,
    "note"       => ""

	));

        $attribute   = Mage::getSingleton("eav/config")->getAttribute("customer", "specialist");

        
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
	 