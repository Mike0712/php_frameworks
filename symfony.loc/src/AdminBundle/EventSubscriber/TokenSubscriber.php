<?php


namespace AdminBundle\EventSubscriber;


use AdminBundle\Controller\TokenAuthenticatedController;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\KernelEvents;

class TokenSubscriber implements EventSubscriberInterface
{
    private $params;

    public function __construct($params)
    {
        $this->params = $params;
    }

    public function onKernelController(FilterControllerEvent $event)
    {
        $controller = $event->getController();
        /*
         * $controller passed can be either a class or a Closure.
         * This is not usual in Symfony but it may happen.
         * If it is a class, it comes in array format
         */
        if (!is_array($controller)) {
            return;
        }

        if ($controller[0] instanceof TokenAuthenticatedController) {
            $login = $event->getRequest()->query->get('X-UserName');
            $password = $event->getRequest()->query->get('X-Password');

            if (!in_array($login, $this->params)) {
                throw new AccessDeniedHttpException('This action needs a valid login!');
            }
            if($this->params['X-Password'] !== hash('sha256', $password)){
                throw new AccessDeniedHttpException('This action needs a valid password!');
            }
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
        ];
    }
}