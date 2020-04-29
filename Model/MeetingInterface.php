<?php

declare(strict_types=1);

namespace amillot\MeetingBundle\Model;

use amillot\MeetingBundle\Model\Traits\CollaboratorListAwareInterface;
use amillot\MeetingBundle\Model\Traits\ManagerListAwareInterface;

interface MeetingInterface extends CollaboratorListAwareInterface,
                                   ManagerListAwareInterface
{
}
