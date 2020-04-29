<?php

namespace amillot\MeetingBundle\Entity;

use amillot\MeetingBundle\Model\MeetingInterface;

abstract class AbstractMeeting implements MeetingInterface
{
    protected $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
