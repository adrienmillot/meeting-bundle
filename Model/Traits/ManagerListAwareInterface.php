<?php

namespace amillot\MeetingBundle\Model\Traits;

use amillot\MeetingBundle\Model\ManagerSubjectInterface;
use Doctrine\Common\Collections\Collection;

interface ManagerListAwareInterface
{
    /**
     * @param ManagerSubjectInterface $prmManager
     *
     * @return ManagerListAwareInterface
     */
    public function addManager(ManagerSubjectInterface $prmManager): ManagerListAwareInterface;

    /**
     * @return Collection
     */
    public function getManagers(): Collection;

    /**
     * @param ManagerSubjectInterface $prmManager
     *
     * @return ManagerListAwareInterface
     */
    public function removeManager(ManagerSubjectInterface $prmManager): ManagerListAwareInterface;

    /**
     * @param Collection $prmManagers
     *
     * @return ManagerListAwareInterface
     */
    public function setManagers(Collection $prmManagers): ManagerListAwareInterface;
}
