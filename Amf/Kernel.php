<?php

namespace Tecbot\AMFBundle\Amf;

use Symfony\Component\HttpKernel\Kernel as BaseKernel;

/**
 * Description of Kernel
 *
 * @author Thomas
 */
abstract class Kernel extends BaseKernel
{
    /**
     * {@inheritdoc}
     */
    public function handleAmf(Request $request)
    {
        if (false === $this->booted) {
            $this->boot();
        }

        return $this->container->get('amf.kernel')->handle($request);
    }
}