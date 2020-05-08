<?php


namespace Application\Model;


use Helpers\DatabaseHelper;

class EventRepository
{
    /**
     * @var \PDO
     */
    private $pdo;

    /**
     * EventRepository constructor.
     */
    public function __construct()
    {
        $this->pdo = DatabaseHelper::getPdo();
    }

    /**
     * @param int $sportId
     * @return array
     */
    public function getEventsBySportId(int $sportId)
    {
        $query = $this->getQuery('WHERE b.id = :sportId');
        $query->bindParam(':sportId', $sportId);
        $query->execute();
        return $query->fetchAll(
            \PDO::FETCH_CLASS,
            Event::class
        );
    }

    /**
     * @return array
     */
    public function getAllEvents()
    {
        $query = $this->getQuery();
        $query->bindParam(':sportId', $sportId);
        $query->execute();
        return $query->fetchAll(
            \PDO::FETCH_CLASS,
            Event::class
        );
    }

    /**
     * @param string $whereClause
     * @return bool|\PDOStatement
     */
    private function getQuery($whereClause = '')
    {
        return $this->pdo->prepare(
            'SELECT '
            . 'a.id as id, '
            . 'a.date_and_time as dateTime, '
            . 'a.notes, '
            . 'b.name as sportName, '
            . 'b.id as sportId, '
            . 'c.name AS homeName, '
            . 'd.name AS guestName '
            . 'FROM calendar.events a '
            . 'INNER JOIN sports b ON '
            . 'a._sport_id = b.id '
            . 'INNER JOIN teams c ON '
            . 'a._home_id = c.id '
            . 'INNER JOIN teams d ON '
            . 'a._guest_id = d.id '
            . $whereClause
            . ' ORDER BY dateTime ASC '
        );
    }

}