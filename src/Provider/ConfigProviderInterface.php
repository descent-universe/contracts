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


interface ConfigProviderInterface
{
    /**
     * returns the default configuration for a service provider
     *
     * @return array
     */
    public function configuration(): array;

    /**
     * return the configuration query for the default configuration to be stored in.
     *
     * Example:
     *
     * "security.firewalls" will store the array normalized into:
     *
     * [
     *      "security" => [
     *          "firewalls" => array( with default configuration )
     *      ]
     * ]
     *
     * @return string
     */
    public function getConfigurationQuery(): string;
}