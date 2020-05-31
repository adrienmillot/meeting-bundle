<?php

namespace amillot\MeetingBundle\Model\Traits;

use amillot\MeetingBundle\Model\MeetingInterface;
use Doctrine\Common\Collections\Collection;

interface MeetingListAwareInterface
{
    /**
     * @param MeetingInterface $prmMeeting
     *
     * @return MeetingListAwareInterface
     */
    public function addMeeting(MeetingInterface $prmMeeting): MeetingListAwareInterface;

    /**
     * @return Collection
     */
    public function getMeetings(): Collection;

    /**
     * @param MeetingInterface $prmMeeting
     *
     * @return MeetingListAwareInterface
     */
    public function removeMeeting(MeetingInterface $prmMeeting): MeetingListAwareInterface;

    /**
     * @param Collection $prmMeetings
     *
     * @return MeetingListAwareInterface
     */
    public function setMeetings(Collection $prmMeetings): MeetingListAwareInterface;
}
