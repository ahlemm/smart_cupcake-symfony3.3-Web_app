<?php
namespace UserBundle\Redirection;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\Routing\RouterInterface;

class AfterRegistrationRedirection implements EventSubscriberInterface
{
    /**
     * @var \Symfony\Component\Routing\RouterInterface
     */
    private $router;

    /**
     * @param RouterInterface $router
     */
    public function __construct($router)
    {

        $this->router = $router;
    }

    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
                FOSUserEvents::REGISTRATION_SUCCESS => 'onRegistrationSucess'
        );
    }

    public function onRegistrationSucess(FormEvent $event)
    {

        if($event->getForm()->has("patissier"))
            $event->setResponse(new RedirectResponse($this->router->generate('home')));
        else
            $event->setResponse(new RedirectResponse($this->router->generate('home')));
    }
}
?>