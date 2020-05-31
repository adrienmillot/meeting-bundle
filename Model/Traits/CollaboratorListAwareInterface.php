<?php

namespace amillot\MeetingBundle\Model\Traits;

use amillot\MeetingBundle\Model\CollaboratorSubjectInterface;
use Doctrine\Common\Collections\Collection;

interface CollaboratorListAwareInterface
{
    /**
     * @param CollaboratorSubjectInterface $prmCollaborator
     *
     * @return CollaboratorListAwareInterface
     */
    public function addCollaborator(CollaboratorSubjectInterface $prmCollaborator): CollaboratorListAwareInterface;

    /**
     * @return Collection
     */
    public function getCollaborators(): Collection;

    /**
     * @param CollaboratorSubjectInterface $prmCollaborator
     *
     * @return CollaboratorListAwareInterface
     */
    public function removeCollaborator(CollaboratorSubjectInterface $prmCollaborator): CollaboratorListAwareInterface;

    /**
     * @param Collection $prmCollaborators
     *
     * @return CollaboratorListAwareInterface
     */
    public function setCollaborators(Collection $prmCollaborators): CollaboratorListAwareInterface;
}
