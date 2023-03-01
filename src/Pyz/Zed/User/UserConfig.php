<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\User;

use Spryker\Zed\User\UserConfig as SprykerUserConfig;

class UserConfig extends SprykerUserConfig
{
    /**
     * @return array
     */
    public function getInstallerUsers()
    {
        return [
            [
                'firstName' => 'Admin (EN)',
                'lastName' => 'Kingsman',
                'username' => 'admin@kingsman.com',
                'password' => 'adminkingsman',
                'localeName' => 'en_US',
            ],
        ];
    }
}
