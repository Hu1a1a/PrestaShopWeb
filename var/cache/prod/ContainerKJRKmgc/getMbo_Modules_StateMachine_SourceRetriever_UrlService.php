<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mbo.modules.state_machine.source_retriever.url' shared service.

$this->services['mbo.modules.state_machine.source_retriever.url'] = $instance = new \PrestaShop\Module\Mbo\Module\SourceRetriever\UrlSourceRetriever(($this->services['translator'] ?? $this->getTranslatorService()));

$instance->cacheDir = $this->targetDir.'';

return $instance;
