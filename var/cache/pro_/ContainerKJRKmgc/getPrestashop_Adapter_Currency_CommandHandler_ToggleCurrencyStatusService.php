<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.currency.command_handler.toggle_currency_status' shared service.

return $this->services['prestashop.adapter.currency.command_handler.toggle_currency_status'] = new \PrestaShop\PrestaShop\Adapter\Currency\CommandHandler\ToggleCurrencyStatusHandler(($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("PS_CURRENCY_DEFAULT"));
