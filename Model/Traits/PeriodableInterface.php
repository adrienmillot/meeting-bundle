<?php

namespace amillot\MeetingBundle\Model\Traits;

interface PeriodableInterface
{
    /**
     * @return \DateTime|null
     */
    public function getEndedAt(): ?\DateTime;

    /**
     * @return \DateTime|null
     */
    public function getStartedAt(): ?\DateTime;

    /**
     * @param \DateTime|null $prmEndedAt
     *
     * @return PeriodableInterface
     */
    public function setEndedAt(?\DateTime $prmEndedAt): PeriodableInterface;

    /**
     * @param \DateTime|null $prmStartedAt
     *
     * @return PeriodableInterface
     */
    public function setStartedAt(?\DateTime $prmStartedAt): PeriodableInterface;
}
