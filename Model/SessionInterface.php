<?php

namespace amillot\MeetingBundle\Model;

use amillot\MeetingBundle\Model\Traits\MeetingListAwareInterface;
use amillot\MeetingBundle\Model\Traits\PeriodableInterface;

interface SessionInterface extends MeetingListAwareInterface, PeriodableInterface
{
    /**
     * @return int|null
     */
    public function getCycleId(): ?int;

    /**
     * @param int|null $prmCycleId
     *
     * @return SessionInterface
     */
    public function setCycleId(?int $prmCycleId): SessionInterface;
}
