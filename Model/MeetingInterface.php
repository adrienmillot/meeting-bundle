<?php

declare(strict_types=1);

namespace amillot\MeetingBundle\Model;

use amillot\MeetingBundle\Model\Traits\CollaboratorListAwareInterface;
use amillot\MeetingBundle\Model\Traits\ManagerListAwareInterface;
use amillot\MeetingBundle\Model\Traits\SessionAwareInterface;

interface MeetingInterface extends CollaboratorListAwareInterface,
                                   ManagerListAwareInterface,
                                   SessionAwareInterface
{
}
