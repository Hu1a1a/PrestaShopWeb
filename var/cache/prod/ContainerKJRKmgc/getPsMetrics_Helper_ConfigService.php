<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_metrics.helper.config' shared service.

return $this->services['ps_metrics.helper.config'] = new \PrestaShop\Module\Ps_metrics\Helper\ConfigHelper(new \PrestaShop\Module\Ps_metrics\Config\Env(($this->services['ps_metrics.module'] ?? $this->load('getPsMetrics_ModuleService.php'))));
