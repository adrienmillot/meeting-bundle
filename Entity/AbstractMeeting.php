<?php

namespace amillot\MeetingBundle\Entity;

use amillot\MeetingBundle\Model\MeetingInterface;
use amillot\MeetingBundle\Traits\CollaboratorListAware;

abstract class AbstractMeeting implements MeetingInterface
{
    use CollaboratorListAware {
        CollaboratorListAware::__construct as private __collaboratorListAwareConstruct;
    }

    protected $id;

    public function __construct()
    {
        $this->__collaboratorListAwareConstruct();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
