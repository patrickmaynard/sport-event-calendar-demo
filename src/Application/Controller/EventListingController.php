<?php

namespace Application\Controller;

use Application\Model\EventRepository;
use Application\Model\Sport;
use Application\Model\SportRepository;
use Twig\Environment;

class EventListingController implements ControllerInterface
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

    /**
     * @var \Twig\Environment
     */
    private $twig;

    /**
     * EventListingController constructor.
     * @param SportRepository $sportRepository
     * @param EventRepository $eventRepository
     * @param Environment $twig
     */
    public function __construct(
        SportRepository $sportRepository,
        EventRepository $eventRepository,
        Environment $twig
    )
    {
        //If things get much more complicated, we can inject dependencies.
        //For now, this approach will do.
        $this->sportRepository = $sportRepository;
        $this->eventRepository = $eventRepository;
        $this->twig = $twig;
    }

    public function eventsAction(array $get)
    {
        $this->templateSettings['title'] = 'All events';
        if (isset($get['sport'])) {
            if(!is_numeric($get['sport'])) {
                return [
                    'text' => $this->twig->render('missingSport.html.twig'),
                    'status' => 400
                ];
            }
            $sport = $this->sportRepository->getSportById($get['sport']);
            if ($sport === false) {
                return [
                    'text' => $this->twig->render('missingSport.html.twig'),
                    'status' => 404
                ];
            }
            $this->templateSettings['title'] = $sport->getName() . ' events';
            $this->templateSettings['events'] = $this->eventRepository->getEventsBySportId($get['sport']);
        } else {
            $this->templateSettings['events'] = $this->eventRepository->getAllEvents();
        }
        //TODO: Return a response created by rendering a result template.
        return [
            'text' => $this->twig->render('results.html.twig', ['templateSettings' => $this->templateSettings]),
            'status' => 200
            ];
    }
}