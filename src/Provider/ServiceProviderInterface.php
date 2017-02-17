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


use Descent\Contracts\ServiceContainerInterface;

interface ServiceProviderInterface
{
    /**
     * encloses services assignments to provided method body
     *
     * @param ServiceContainerInterface $services
     * @return mixed
     */
    public function services(ServiceContainerInterface $services);
}