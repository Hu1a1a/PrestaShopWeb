<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.command_handler.remove_all_product_tags_handler' shared service.

return $this->services['prestashop.adapter.product.command_handler.remove_all_product_tags_handler'] = new \PrestaShop\PrestaShop\Adapter\Product\CommandHandler\RemoveAllProductTagsHandler(($this->services['prestashop.adapter.product.repository.product_repository'] ?? $this->load('getPrestashop_Adapter_Product_Repository_ProductRepositoryService.php')), ($this->services['prestashop.adapter.product.updater.product_tag_updater'] ?? $this->load('getPrestashop_Adapter_Product_Updater_ProductTagUpdaterService.php')));