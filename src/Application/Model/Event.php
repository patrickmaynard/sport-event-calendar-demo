<?php

namespace Application\Model;

class Event
{
    /** @var int $id */
    private $id;

    /** @var \DateTime $dateTime */
    private $dateTime;

    /** @var string $sport */
    private $sport;

    /** @var string $home */
    private $home;

    /** @var string $guest */
    private $guest;

    /** @var string $notes */
    private $notes;

    /**
     * @return int
     */
    public function getSportId()
    {
        return $this->sportId;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Event
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @param \DateTime $dateTime
     * @return Event
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getSport()
    {
        return $this->sport;
    }

    /**
     * @param string $sport
     * @return Event
     */
    public function setSport($sport)
    {
        $this->sport = $sport;

        return $this;
    }

    /**
     * @return string
     */
    public function getHome()
    {
        return $this->home;
    }

    /**
     * @param string $home
     * @return Event
     */
    public function setHome($home)
    {
        $this->home = $home;

        return $this;
    }

    /**
     * @return string
     */
    public function getGuest()
    {
        return $this->guest;
    }

    /**
     * @param string $guest
     * @return Event
     */
    public function setGuest($guest)
    {
        $this->guest = $guest;

        return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param string $notes
     * @return Event
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * @param int $sportId
     * @return Event
     */
    public function setSportId($sportId)
    {
        $this->sportId = $sportId;

        return $this;
    }

    /** @var int $sportId */
    private $sportId;

    /**
     * @return string
     */
    public function __toString()
    {
        return 'Event ID ' . $this->getId();
    }
}