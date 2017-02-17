<?php
/**
 * This file is part of the Descent Framework.
 *
 * (c)2017 Matthias Kaschubowski
 *
 * This code is licensed under the MIT license,
 * a copy of the license is stored at the project root.
 */

namespace Descent\Contracts\Provider;


use Descent\Contracts\ConfigurationInterface;
use Descent\Contracts\ServiceContainerInterface;

interface BootableProviderInterface
{
    /**
     * boots the provider under the processed configuration and by the initialized services.
     *
     * @param ServiceContainerInterface $services
     * @param ConfigurationInterface $configuration
     * @return mixed
     */
    public function boot(ServiceContainerInterface $services, ConfigurationInterface $configuration);
}