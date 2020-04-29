<?php

namespace amillot\MeetingBundle\Entity;

use amillot\MeetingBundle\Model\MeetingInterface;
use amillot\MeetingBundle\Traits\SessionAware;
use amillot\MeetingBundle\Traits\CollaboratorListAware;
use amillot\MeetingBundle\Traits\ManagerListAware;

abstract class AbstractMeeting implements MeetingInterface
{
    use SessionAware;

    use CollaboratorListAware {
        CollaboratorListAware::__construct as private __collaboratorListAwareConstruct;
    }

    use ManagerListAware {
        ManagerListAware::__construct as private __managerListAwareConstruct;
    }

    protected $id;

    public function __construct()
    {
        $this->__collaboratorListAwareConstruct();
        $this->__managerListAwareConstruct();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
