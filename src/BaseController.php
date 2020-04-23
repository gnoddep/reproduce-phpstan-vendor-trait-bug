<?php
namespace Peter;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;

class BaseController extends Controller
{
    public function setContainer(ContainerInterface $container = null)
    {
        parent::setContainer($container);
        if ($this->container) {
            $this->initializeDependencies();
        }
    }

    protected function initializeDependencies()
    {
        $bla = $this->container->getParameter('api.domain');
    }
}
