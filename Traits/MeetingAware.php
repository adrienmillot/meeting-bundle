<?php

namespace amillot\MeetingBundle\Traits;

use amillot\MeetingBundle\Model\MeetingInterface;
use amillot\MeetingBundle\Model\Traits\MeetingAwareInterface;

trait MeetingAware
{
    protected $meeting;

    /**
     * {@inheritDoc}
     */
    public function getMeeting(): MeetingInterface
    {
        return $this->meeting;
    }

    /**
     * {@inheritDoc}
     */
    public function setMeeting(MeetingInterface $prmMeeting): MeetingAwareInterface
    {
        $this->meeting = $prmMeeting;

        return $this;
    }
}
