<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.router' shared service.

$this->services['prestashop.router'] = $instance = new \PrestaShopBundle\Service\Routing\Router($this, (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app/config/routing.yml'), ['cache_dir' => $this->targetDir.'', 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => NULL], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), (new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this)), $this->getMonolog_Logger_RouterService(), 'es-ES');

$instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? ($this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory())));
$instance->setTokenManager(($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService()));
$instance->setUserProvider(($this->services['prestashop.user_provider'] ?? $this->load('getPrestashop_UserProviderService.php')));

return $instance;
