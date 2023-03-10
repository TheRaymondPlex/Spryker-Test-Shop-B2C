<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Development\Communication\Console;

use Spryker\Zed\Development\Communication\Console\CodeTestConsole;

class ApiCodeTestConsole extends CodeTestConsole
{
    /**
     * @var string
     */
    public const COMMAND_NAME = 'code:test:api';

    /**
     * @var string
     */
    protected const PYZ_CODECEPTION_CONFIG_FILE_NAME = 'codeception.api.yml';
}
