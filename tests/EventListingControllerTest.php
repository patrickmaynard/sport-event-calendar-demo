<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Application\Model\EventRepository;
use Application\Model\Event;
use Application\Controller\EventListingController;
use Twig\Environment;
use Application\Model\SportRepository;
use Application\Model\Sport;

class EventListingControllerTest extends TestCase
{
    public function testEventsActionContainsCorrectValues()
    {
        $eventOne = new Event;
        $eventOne->setDateTime(new DateTime('Today'));
        $eventOne->setGuestName('Schöneberg Snappers');
        $eventOne->setHomeName('Wedding Wildcats');
        $eventOne->setNotes('Free Pinwheel Day');
        $eventOne->setSportName('Freestyle Battle Golf');
        $eventOne->getSportId(101);

        $eventTwo = new Event;
        $eventTwo->setDateTime(new DateTime('Tomorrow'));
        $eventTwo->setGuestName('Vienna Alligators');
        $eventTwo->setHomeName('Ostrava Flamingos');
        $eventTwo->setNotes('Firecracker night');
        $eventTwo->setSportName('Windmill tilting');
        $eventTwo->setSportId(102);

        $eventsArray = [$eventOne, $eventTwo];
        $eventRepositoryMock = $this->createMock(
            EventRepository::class
        );
        $eventRepositoryMock->method('getAllEvents')->willReturn(
            $eventsArray
        );
        $sportRepositoryMock = $this->createMock(
            SportRepository::class
        );
        $sport = new Sport;
        $sport->setName('Trondheim Hammer Dance');
        $sportRepositoryMock->method('getSportById')->willReturn(
            $sport
        );
        $loader = new \Twig\Loader\FilesystemLoader('src/Application/View');
        $twig = new Environment($loader);

        $controller = new EventListingController(
            $sportRepositoryMock,
            $eventRepositoryMock,
            $twig
        );

        $response = $controller->eventsAction(['sport' => 1]);

        self::assertIsArray($response);
        self::assertEquals($response['status'], 200);

    }
}