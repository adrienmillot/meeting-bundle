<?php

namespace amillot\MeetingBundle\Traits;

use amillot\MeetingBundle\Model\CollaboratorSubjectInterface;

trait CollaboratorAware
{
    protected $collaborator;

    /**
     * {@inheritDoc}
     */
    public function getCollaborator(): CollaboratorSubjectInterface
    {
        return $this->collaborator;
    }

    /**
     * {@inheritDoc}
     */
    public function setCollaborator(CollaboratorSubjectInterface $prmCollaborator): CollaboratorAware
    {
        $this->collaborator = $prmCollaborator;

        return $this;
    }
}
