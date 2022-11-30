<?php

namespace App\Application\Schema\BlocoBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApplicationSchemaBlocoBundle extends Bundle
{
    /** {@inheritdoc} */
    public function getParent()
    {
        return 'ApplicationSchemaBlocoBundle';
    }
}