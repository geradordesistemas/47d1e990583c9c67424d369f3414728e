<?php

namespace App\Application\Schema\TopicoBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApplicationSchemaTopicoBundle extends Bundle
{
    /** {@inheritdoc} */
    public function getParent()
    {
        return 'ApplicationSchemaTopicoBundle';
    }
}