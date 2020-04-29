<?php

namespace amillot\MeetingBundle\Traits;

use amillot\MeetingBundle\Model\ManagerSubjectInterface;
use amillot\MeetingBundle\Model\Traits\ManagerAwareInterface;

trait ManagerAware
{
    protected $manager;

    /**
     * {@inheritDoc}
     */
    public function getManager(): ManagerSubjectInterface
    {
        return $this->manager;
    }

    /**
     * {@inheritDoc}
     */
    public function setManager(ManagerSubjectInterface $prmManager): ManagerAwareInterface
    {
        $this->manager = $prmManager;

        return $this;
    }
}
