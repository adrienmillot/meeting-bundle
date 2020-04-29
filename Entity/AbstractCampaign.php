<?php

namespace amillot\MeetingBundle\Entity;

use amillot\MeetingBundle\Model\CampaignInterface;
use amillot\MeetingBundle\Traits\Periodable;
use amillot\MeetingBundle\Traits\SessionListAware;

abstract class AbstractCampaign implements CampaignInterface
{
    use Periodable;

    use SessionListAware {
        SessionListAware::__construct as private __sessionListAwareConstruct;
    }

    protected $id;

    public function __construct()
    {
        $this->id = uniqid('campaign', true);
        $this->__sessionListAwareConstruct();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
