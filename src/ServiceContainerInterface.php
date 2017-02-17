<?php
/**
 * This file is part of the Descent Framework.
 *
 * (c)2017 Matthias Kaschubowski
 *
 * This code is licensed under the MIT license,
 * a copy of the license is stored at the project root.
 */

namespace Descent\Contracts;


use Descent\Services\Container\ContainerInterface;
use Descent\Services\Container\DependencyBuilderInterface;

/**
 * Interface ServiceContainerInterface
 * @package Descent\Contracts
 */
interface ServiceContainerInterface extends DependencyBuilderInterface, ContainerInterface
{
    /**
     * registers the provided service providers.
     *
     * @param ServiceProviderInterface[] ...$providers
     * @return ServiceContainerInterface
     */
    public function register(ServiceProviderInterface ... $providers): ServiceContainerInterface;
}