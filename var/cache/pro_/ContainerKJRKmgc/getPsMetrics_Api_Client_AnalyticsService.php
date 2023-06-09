<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_metrics.api.client.analytics' shared service.

return $this->services['ps_metrics.api.client.analytics'] = new \PrestaShop\Module\Ps_metrics\Api\Client\AnalyticsClient(($this->services['ps_accounts.facade'] ?? $this->load('getPsAccounts_FacadeService.php')), ($this->services['ps_metrics.middleware.response.default'] ?? $this->load('getPsMetrics_Middleware_Response_DefaultService.php')), ($this->services['ps_metrics.middleware.log'] ?? $this->load('getPsMetrics_Middleware_LogService.php')), ($this->services['ps_metrics.middleware.sentry'] ?? ($this->services['ps_metrics.middleware.sentry'] = new \PrestaShop\Module\Ps_metrics\Middleware\SentryMiddleware())), ($this->services['ps_metrics.middleware.response'] ?? ($this->services['ps_metrics.middleware.response'] = new \PrestaShop\Module\Ps_metrics\Middleware\ResponseMiddleware())), ($this->services['ps_metrics.handler.guzzleapi'] ?? ($this->services['ps_metrics.handler.guzzleapi'] = new \PrestaShop\Module\Ps_metrics\Handler\GuzzleApiResponseExceptionHandler())));
