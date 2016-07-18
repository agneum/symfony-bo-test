<?php

namespace AdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class AdminBundle
 * @package AdminBundle
 */
class AdminBundle extends Bundle
{
    public function getParent()
    {
        return 'SonataAdminBundle';
    }
}
