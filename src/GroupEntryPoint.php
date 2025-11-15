<?php

declare(strict_types=1);

namespace Mammatus\Kubernetes\Contracts;

/**
 * Marker interface, one of the interfaces in the AddOn namespace is needed to actually do anything
 */
interface GroupEntryPoint
{
    public function start(string $group): void;
    public function stop(string $group): void;
}
