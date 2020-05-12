<?php


namespace Application\Controller;


use Application\Model\EventRepository;
use Application\Model\SportRepository;

/**
 * Class ControllerFactory
 *
 * TBH, we don't really need a factory yet.
 * But setting stuff up this way makes things flexible for future use.
 * It also makes our controller testable, since we're injecting dependencies here.
 *
 * @package Application\Controller
 */
class ControllerFactory
{

    /**
     * @param $type
     * @return EventListingController
     */
    public function getController(string $type) : ControllerInterface
    {
        if ($type === 'eventListing') {
            $sportRepository = new SportRepository();
            $eventRepository = new EventRepository();
            $loader = new \Twig\Loader\FilesystemLoader('../src/Application/View');
            $twig = new \Twig\Environment($loader);

            return new EventListingController(
                $sportRepository,
                $eventRepository,
                $twig
            );
        }
    }
}