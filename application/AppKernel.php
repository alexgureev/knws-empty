<?php

use Knws\Kernel;
use Symfony\Component\HttpFoundation\Response;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\TwigBundle\TwigBundle()
            //new Symfony\Bundle\MonologBundle\MonologBundle(),
            //new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            //new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
        );

        if (in_array($this->environment, array('dev', 'test'))) {
            //$bundles[] = new Acme\DemoBundle\AcmeDemoBundle();
            //$bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
        }

        return $bundles;
    }

    /**
     * handle description
     * @see http://knws.ru/docs/Acme/AppKernel/handle Documentation of Acme\Kernel->handle().
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\Response $responce
     */
    public function handle($request)
    {
        $this->bundles = $this->registerBundles();

        \Knws\Instance::init();
        \Knws\Service\Doctrine::init();

        $responce = new Response(
            \Knws\Service\Doctrine::listRepository(),
            200,
            array('content-type' => 'text/html')
        );

        return $responce;
    }
}
