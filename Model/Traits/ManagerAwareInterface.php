<?php

namespace amillot\MeetingBundle\Model\Traits;

use amillot\MeetingBundle\Model\ManagerSubjectInterface;
use amillot\MeetingBundle\Traits\ManagerAware;

interface ManagerAwareInterface
{
    /**
     * @return ManagerSubjectInterface
     */
    public function getManager(): ManagerSubjectInterface;

    /**
     * @param ManagerSubjectInterface $prmManager
     *
     * @return ManagerAwareInterface
     */
    public function setManager(ManagerSubjectInterface $prmManager): ManagerAwareInterface;
}
