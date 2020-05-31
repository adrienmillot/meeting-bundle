<?php

namespace amillot\MeetingBundle\Traits;

use amillot\MeetingBundle\Model\CollaboratorSubjectInterface;
use amillot\MeetingBundle\Model\Traits\CollaboratorListAwareInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

trait CollaboratorListAware
{
    protected $collaborators;

    public function __construct()
    {
        $this->collaborators = new ArrayCollection();
    }

    /**
     * {@inheritDoc}
     */
    public function addCollaborator(CollaboratorSubjectInterface $prmCollaborator): CollaboratorListAwareInterface
    {
        if (!$this->collaborators->contains($prmCollaborator)) {
            $this->collaborators->add($prmCollaborator);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getCollaborators(): Collection
    {
        return $this->collaborators;
    }

    /**
     * {@inheritDoc}
     */
    public function removeCollaborator(CollaboratorSubjectInterface $prmCollaborator): CollaboratorListAwareInterface
    {
        if ($this->collaborators->contains($prmCollaborator)) {
            $this->collaborators->removeElement($prmCollaborator);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setCollaborators(Collection $prmCollaborators): CollaboratorListAwareInterface
    {
        $this->collaborators = $prmCollaborators;

        return $this;
    }
}
