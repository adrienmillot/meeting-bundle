<?php

namespace amillot\MeetingBundle\Traits;

use amillot\MeetingBundle\Model\MeetingInterface;
use amillot\MeetingBundle\Model\Traits\MeetingListAwareInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

trait MeetingListAware
{
    protected $meetings;

    public function __construct()
    {
        $this->meetings = new ArrayCollection();
    }

    /**
     * {@inheritDoc}
     */
    public function addMeeting(MeetingInterface $prmMeeting): MeetingListAwareInterface
    {
        if (!$this->meetings->contains($prmMeeting)) {
            $this->meetings->add($prmMeeting);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getMeetings(): Collection
    {
        return $this->meetings;
    }

    /**
     * {@inheritDoc}
     */
    public function removeMeeting(MeetingInterface $prmMeeting): MeetingListAwareInterface
    {
        if ($this->meetings->contains($prmMeeting)) {
            $this->meetings->removeElement($prmMeeting);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setMeetings(Collection $prmMeetings): MeetingListAwareInterface
    {
        $this->meetings = $prmMeetings;

        return $this;
    }
}
