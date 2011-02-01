<?php

namespace Tecbot\AMFBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * TecbotAMFBundle.
 * 
 * @author Thomas Adam <thomas.adam@tebot.de>
 */
class TecbotAMFBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getNamespace()
    {
        return __NAMESPACE__;
    }

    /**
     * {@inheritdoc}
     */
    public function getPath()
    {
        return strtr(__DIR__, '\\', '/');
    }
}