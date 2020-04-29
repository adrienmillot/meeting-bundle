<?php

namespace amillot\MeetingBundle\Traits;

use amillot\MeetingBundle\Model\Traits\PeriodableInterface;

trait Periodable
{
    protected $endedAt;

    protected $startedAt;

    /**
     * {@inheritDoc}
     */
    public function getEndedAt(): ?\DateTime
    {
        return $this->endedAt;
    }

    /**
     * {@inheritDoc}
     */
    public function getStartedAt(): ?\DateTime
    {
        return $this->startedAt;
    }

    /**
     * {@inheritDoc}
     */
    public function setEndedAt(?\DateTime $prmEndedAt): PeriodableInterface
    {
        $this->endedAt = $prmEndedAt;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setStartedAt(?\DateTime $prmStartedAt): PeriodableInterface
    {
        $this->startedAt = $prmStartedAt;

        return $this;
    }
}
