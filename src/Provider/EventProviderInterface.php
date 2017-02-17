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


use Symfony\Component\EventDispatcher\EventDispatcherInterface;

interface EventProviderInterface
{
    /**
     * allows to engage events to the main event dispatcher.
     *
     * @param EventDispatcherInterface $events
     * @return mixed
     */
    public function events(EventDispatcherInterface $events);
}