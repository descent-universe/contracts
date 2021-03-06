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


interface FacadeProviderInterface
{
    /**
     * returns an array of services static facades
     *
     * @return array
     */
    public function facades(): array;
}