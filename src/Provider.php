<?php

namespace CodehqDk\MyDashboard\Interfaces;

use Psr\Container\ContainerInterface;

interface Provider
{
    public function register(ContainerInterface $container): void;
}