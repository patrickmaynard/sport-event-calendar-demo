<?php

namespace Application\Controller;

use Application\Model\EventRepository;
use Application\Model\SportRepository;

class EventListingController
{
    /**
     * @var array
     */
    private $templateSettings = [];

    /**
     * @var SportRepository
     */
    private $sportRepository;

    /**
     * @var EventRepository
     */
    private $eventRepository;

    private $twig;

    public function __construct()
    {
        //If things get much more complicated, we can inject dependencies.
        //For now, this approach will do.
        $this->sportRepository = new SportRepository();
        $this->eventRepository = new EventRepository();
        $loader = new \Twig\Loader\FilesystemLoader('../src/Application/View');
        $this->twig = new \Twig\Environment($loader);
    }

    public function eventsAction()
    {
        $this->templateSettings['title'] = 'All events';
        if (isset($_GET['sport'])) {
            if(!is_numeric($_GET['sport'])) {
                //TODO: Return a response created by rendering an error template.
                die('Specify a valid sport!');
            }
            $sport = $this->sportRepository->getSportById($_GET['sport']);
            if ($sport === false) {
                //TODO: Return a response created by rendering an error template.
                die('Specify a valid sport!');
            }
            $this->templateSettings['title'] = $sport->getName() . ' events';
            $this->templateSettings['events'] = $this->eventRepository->getEventsBySportId($_GET['sport']);
        } else {
            $this->templateSettings['events'] = $this->eventRepository->getAllEvents();
        }
        //TODO: Return a response created by rendering a result template.
        return $this->twig->render('results.html.twig', ['templateSettings' => $this->templateSettings]);
    }
}