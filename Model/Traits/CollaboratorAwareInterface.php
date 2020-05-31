<?php

namespace amillot\MeetingBundle\Model\Traits;

use amillot\MeetingBundle\Model\CollaboratorSubjectInterface;
use amillot\MeetingBundle\Traits\CollaboratorAware;

interface CollaboratorAwareInterface
{
    /**
     * @return CollaboratorSubjectInterface
     */
    public function getCollaborator(): CollaboratorSubjectInterface;

    /**
     * @param CollaboratorSubjectInterface $prmCollaborator
     *
     * @return CollaboratorAwareInterface
     */
    public function setCollaborator(CollaboratorSubjectInterface $prmCollaborator): CollaboratorAwareInterface;
}
