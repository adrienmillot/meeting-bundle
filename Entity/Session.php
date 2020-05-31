<?php

namespace amillot\MeetingBundle\Entity;

use amillot\MeetingBundle\Traits\MeetingListAware;

class Session extends AbstractSession
{
    use MeetingListAware {
        MeetingListAware::__construct as private __meetingListAwareConstruct;
    }

    public function __construct()
    {
        parent::__construct();
        $this->__meetingListAwareConstruct();
    }
}
