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


use Descent\Facades\Entities\HubEntityInterface;

interface FacadeInterface
{
    /**
     * returns an associative string indexed array. The key defines the alias for a class to interface for further
     * reference and the value must be the interface name of the interface that will be controlled by the facade.
     *
     * @return string[]
     */
    public static function getContainmentInterfaces(): array;

    /**
     * sets the hub entity.
     *
     * @param HubEntityInterface $hub
     * @return void
     */
    public static function withHub(HubEntityInterface $hub);
}