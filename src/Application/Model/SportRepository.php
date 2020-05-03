<?php


namespace Application\Model;

use Helpers\DatabaseHelper;

class SportRepository
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
     * @return mixed
     */
    public function getSportById(int $sportId)
    {
        $query = $this->getQuery('WHERE id = :sportId');
        $query->bindParam(':sportId', $sportId);
        $query->execute();
        return $query->fetchObject(
            Sport::class
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
            . 'id, name '
            . 'FROM calendar.sports '
            . $whereClause
        );
    }
}