<?php

namespace amillot\MeetingBundle\Model\Traits;

use amillot\MeetingBundle\Model\SessionInterface;

interface SessionAwareInterface
{
    /**
     * @return SessionInterface|null
     */
    public function getSession(): ?SessionInterface;

    /**
     * @param SessionInterface|null $prmSession
     *
     * @return SessionAwareInterface
     */
    public function setSession(?SessionInterface $prmSession): SessionAwareInterface;
}
