<?php

namespace amillot\MeetingBundle\Traits;

use amillot\MeetingBundle\Model\SessionInterface;
use amillot\MeetingBundle\Model\Traits\SessionListAwareInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

trait SessionListAware
{
    protected $sessions;

    public function __construct()
    {
        $this->sessions = new ArrayCollection();
    }

    /**
     * {@inheritDoc}
     */
    public function addSession(SessionInterface $prmSession): SessionListAwareInterface
    {
        if (!$this->sessions->contains($prmSession)) {
            $this->sessions->add($prmSession);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getSessions(): Collection
    {
        return $this->sessions;
    }

    /**
     * {@inheritDoc}
     */
    public function removeSession(SessionInterface $prmSession): SessionListAwareInterface
    {
        if ($this->sessions->contains($prmSession)) {
            $this->sessions->removeElement($prmSession);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setSessions(Collection $prmSessions): SessionListAwareInterface
    {
        $this->sessions = $prmSessions;

        return $this;
    }
}
