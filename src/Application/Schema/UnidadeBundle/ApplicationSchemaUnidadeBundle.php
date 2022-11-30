<?php

namespace App\Application\Schema\UnidadeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApplicationSchemaUnidadeBundle extends Bundle
{
    /** {@inheritdoc} */
    public function getParent()
    {
        return 'ApplicationSchemaUnidadeBundle';
    }
}