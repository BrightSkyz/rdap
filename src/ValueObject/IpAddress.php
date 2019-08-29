<?php

declare(strict_types=1);
/**
 * Registration Data Access Protocol – core objects implementation package according to the RFC 7483
 *
 * @link      https://github.com/hiqdev/rdap
 * @package   rdap
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2019, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\rdap\core\ValueObject;

/**
 * Interface IpAddress.
 */
interface IpAddress
{
    /**
     * @return string
     */
    public function getHostAddress(): string;

    public function __toString(): string;
}
