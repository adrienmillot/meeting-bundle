<?php

namespace amillot\MeetingBundle\Model;

use amillot\MeetingBundle\Model\Traits\CampaignAwareInterface;
use amillot\MeetingBundle\Model\Traits\MeetingListAwareInterface;
use amillot\MeetingBundle\Model\Traits\PeriodableInterface;

interface SessionInterface extends CampaignAwareInterface, MeetingListAwareInterface, PeriodableInterface
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
