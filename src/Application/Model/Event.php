<?php

namespace Application\Model;

class Event
{
    /** @var int $id */
    private $id;

    /** @var \DateTime $dateTime */
    private $dateTime;

    /** @var string $sportName */
    private $sportName;

    /** @var string $homeName */
    private $homeName;

    /** @var string $guestName */
    private $guestName;

    /** @var string $notes */
    private $notes;

    /** @var int $sportId */
    private $sportId;

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
    public function getsportName()
    {
        return $this->sportName;
    }

    /**
     * @param string $sportName
     * @return Event
     */
    public function setsportName($sportName)
    {
        $this->sportName = $sportName;

        return $this;
    }

    /**
     * @return string
     */
    public function gethomeName()
    {
        return $this->homeName;
    }

    /**
     * @param string $homeName
     * @return Event
     */
    public function sethomeName($homeName)
    {
        $this->homeName = $homeName;

        return $this;
    }

    /**
     * @return string
     */
    public function getguestName()
    {
        return $this->guestName;
    }

    /**
     * @param string $guestName
     * @return Event
     */
    public function setguestName($guestName)
    {
        $this->guestName = $guestName;

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

    /**
     * @return int
     */
    public function getSportId()
    {
        return $this->sportId;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return 'Event ID ' . $this->getId();
    }
}