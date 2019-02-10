<?php

namespace AppBundle\Domain\Repository;

use AppBundle\Domain\Entity\Contest\Round;

/**
 * Interface to a repository of Round entities
 *
 * @package AppBundle\Domain\Repository
 */
interface RoundRepositoryInterface
{
    /**
     * Reads a round from the database
     *
     * @param string $uuid
     * @return Round
     */
    public function readRound(string $uuid): Round;

    /**
     * Persists a round in the database
     *
     * @param Round $round
     * @param bool $autoFlush
     * @return RoundRepositoryInterface
     */
    public function persistRound(Round $round, bool $autoFlush = false): RoundRepositoryInterface;

    /**
     * Removes a round
     *
     * @param mixed $round
     * @return RoundRepositoryInterface
     */
    public function removeRound($round): RoundRepositoryInterface;
}
