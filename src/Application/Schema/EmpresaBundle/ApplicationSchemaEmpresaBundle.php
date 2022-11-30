<?php

namespace App\Application\Schema\EmpresaBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApplicationSchemaEmpresaBundle extends Bundle
{
    /** {@inheritdoc} */
    public function getParent()
    {
        return 'ApplicationSchemaEmpresaBundle';
    }
}