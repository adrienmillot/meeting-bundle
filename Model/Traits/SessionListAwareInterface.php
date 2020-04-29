<?php

namespace amillot\MeetingBundle\Model\Traits;

use amillot\MeetingBundle\Model\SessionInterface;
use Doctrine\Common\Collections\Collection;

interface SessionListAwareInterface
{
    /**
     * @param SessionInterface $prmSession
     *
     * @return SessionListAwareInterface
     */
    public function addSession(SessionInterface $prmSession): SessionListAwareInterface;

    /**
     * @return Collection
     */
    public function getSessions(): Collection;

    /**
     * @param SessionInterface $prmSession
     *
     * @return SessionListAwareInterface
     */
    public function removeSession(SessionInterface $prmSession): SessionListAwareInterface;

    /**
     * @param Collection $prmSessions
     *
     * @return SessionListAwareInterface
     */
    public function setSessions(Collection $prmSessions): SessionListAwareInterface;
}
