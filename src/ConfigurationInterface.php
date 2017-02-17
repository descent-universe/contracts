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


use Descent\Contracts\Provider\ConfigProviderInterface;
use Psr\Container\ContainerInterface;

interface ConfigurationInterface extends ContainerInterface
{
    /**
     * gets a configuration value or returns the default value when the configuration path is not available.
     *
     * @param string $query
     * @param null $default
     * @return mixed
     */
    public function get($query, $default = null);

    /**
     * checks whether a query path is given or not.
     *
     * @param $query
     * @return bool
     */
    public function has($query);

    /**
     * sets the configuration value to the provided query path. The value will be normalized in case of an array.
     *
     * @param string $query
     * @param $value
     * @return mixed
     */
    public function set(string $query, $value);

    /**
     * splits a configuration query path into an own configuration instance. Changes to the configuration will be
     * applied to the split context.
     *
     * @param string $query
     * @return ConfigurationInterface
     */
    public function split(string $query): ConfigurationInterface;

    /**
     * registers the provided configuration providers.
     *
     * @param ConfigProviderInterface[] ...$provider
     * @return ConfigurationInterface
     */
    public function register(ConfigProviderInterface ... $provider): ConfigurationInterface;

    /**
     * creates the configuration from a given array. The array may contain query path notation.
     *
     * @param array $configuration
     * @return ConfigurationInterface
     */
    public static function create(array $configuration): ConfigurationInterface;
}