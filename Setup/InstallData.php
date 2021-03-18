<?php

namespace AHT\Blog\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
	protected $_postFactory;

	public function __construct(\AHT\Blog\Model\PostFactory $postFactory)
	{
		$this->_postFactory = $postFactory;
	}

	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$data = [
			'name'         => "ducpham",
			'address'      => "hanoi",
			'country'      => "Viet Nam",
			'introduce'    => "ABC"
		];
		$post = $this->_postFactory->create();
		$post->addData($data)->save();
	}
}