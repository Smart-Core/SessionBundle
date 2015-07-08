<?php

namespace SmartCore\Bundle\SessionBundle\Listener;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class UserId
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
    
    public function updateSessionUserId(FilterResponseEvent $event)
    {
        if (HttpKernelInterface::MASTER_REQUEST === $event->getRequestType()
            and $this->container->has('security.token_storage')
            and $this->container->get('security.token_storage') instanceof TokenStorageInterface
            and $this->container->get('security.token_storage')->getToken() instanceof TokenInterface
            and method_exists($this->container->get('security.token_storage')->getToken()->getUser(), 'getId')
        ) {
            $user_id = $this->container->get('security.token_storage')->getToken()->getUser()->getId();
            $this->container->get('smart_core_session.handler')->setUserId($user_id);
        }
    }
}
