<?php

namespace Avi\Bundle\JobBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AviJobBundle extends Bundle
{
    public function getParent() {
        return 'FOSUserBundle';
    }
}
