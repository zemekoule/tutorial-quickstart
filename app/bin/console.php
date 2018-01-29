#!/usr/bin/env php
<?php

/** @var Nette\DI\Container $container */
$container = require __DIR__ . '/../bootstrap.php';

// Get application from DI container.
$application = $container->getByType(Contributte\Console\Application::class);

// Run application.
exit($application->run());