<?php

declare(strict_types=1);

namespace Mammatus\Kubernetes\Contracts\AddOn;

interface AbstractAddOn extends \JsonSerializable
{
    /**
     * The Helper to call
     */
    public function helper(): string;
}
