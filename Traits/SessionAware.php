<?php

namespace amillot\MeetingBundle\Traits;

use amillot\MeetingBundle\Model\SessionInterface;
use amillot\MeetingBundle\Model\Traits\SessionAwareInterface;

trait SessionAware
{
    protected $session;

    /**
     * {@inheritDoc}
     */
    public function getSession(): ?SessionInterface
    {
        return $this->session;
    }

    /**
     * {@inheritDoc}
     */
    public function setSession(?SessionInterface $prmSession): SessionAwareInterface
    {
        $this->session = $prmSession;

        return $this;
    }
}
