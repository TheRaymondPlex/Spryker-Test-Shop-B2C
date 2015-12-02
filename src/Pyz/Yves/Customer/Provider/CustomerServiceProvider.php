<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Pyz\Yves\Customer\Provider;

use Pyz\Yves\Application\Provider\AbstractServiceProvider;
use Silex\Application;

class CustomerServiceProvider extends AbstractServiceProvider
{

    /**
     * @param Application $app
     *
     * @return void
     */
    public function register(Application $app)
    {
        $this->addGlobalTemplateVariable($app, [
            'registerForm' => $app['form.factory']->create(
                $this->getLocator()->customer()->pluginRegisterForm()->createFormRegister()
            )->createView(),
        ]);
    }

    /**
     * @param Application $app
     *
     * @return void
     */
    public function boot(Application $app)
    {
        // do nothing
    }

}
