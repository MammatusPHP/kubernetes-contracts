<?php

declare(strict_types=1);

namespace Mammatus\Kubernetes\Contracts\AddOn;

interface AbstractAddOn extends \JsonSerializable
{
    /**
     * The type of addon:
     * container
     * deployment
     */
    public function type(): string;

    /**
     * The Helper to call
     */
    public function helper(): string;
}
