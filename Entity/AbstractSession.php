<?php

namespace amillot\MeetingBundle\Entity;

use amillot\MeetingBundle\Model\SessionInterface;
use amillot\MeetingBundle\Traits\Periodable;

abstract class AbstractSession implements SessionInterface
{
    use Periodable;

    protected $id;

    protected $cycleId;

    public function __construct()
    {
        $this->id = uniqid('session', true);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritDoc}
     */
    public function getCycleId(): ?int
    {
        return $this->cycleId;
    }

    /**
     * {@inheritDoc}
     */
    public function setCycleId(?int $prmCycleId): SessionInterface
    {
        $this->cycleId = $prmCycleId;

        return $this;
    }
}
