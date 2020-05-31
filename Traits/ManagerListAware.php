<?php

namespace amillot\MeetingBundle\Traits;

use amillot\MeetingBundle\Model\ManagerSubjectInterface;
use amillot\MeetingBundle\Model\Traits\ManagerListAwareInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

trait ManagerListAware
{
    protected $managers;

    public function __construct()
    {
        $this->managers = new ArrayCollection();
    }

    /**
     * {@inheritDoc}
     */
    public function addManager(ManagerSubjectInterface $prmManager): ManagerListAwareInterface
    {
        if (!$this->managers->contains($prmManager)) {
            $this->managers->add($prmManager);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getManagers(): Collection
    {
        return $this->managers;
    }

    /**
     * {@inheritDoc}
     */
    public function removeManager(ManagerSubjectInterface $prmManager): ManagerListAwareInterface
    {
        if ($this->managers->contains($prmManager)) {
            $this->managers->removeElement($prmManager);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setManagers(Collection $prmManagers): ManagerListAwareInterface
    {
        $this->managers = $prmManagers;

        return $this;
    }
}
