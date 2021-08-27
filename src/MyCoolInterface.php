<?php

declare(strict_types=1);

namespace Deepvibe\PackageName;

/**
 * Interface MyCoolInterface
 *
 * @template T of MyCoolInterface
 *
 * @package Deepvibe\PackageName
 * @author  Yurii Oblovatskyi yuriyobl@gmail.com>
 */
interface MyCoolInterface
{
    /**
     * @param T $payload
     *
     * @return mixed
     */
    public function __invoke($payload);
}

