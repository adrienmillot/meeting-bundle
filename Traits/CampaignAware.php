<?php

namespace amillot\MeetingBundle\Traits;

use amillot\MeetingBundle\Model\CampaignInterface;
use amillot\MeetingBundle\Model\Traits\CampaignAwareInterface;

trait CampaignAware
{
    protected $campaign;

    /**
     * {@inheritDoc}
     */
    public function getCampaign(): ?CampaignInterface
    {
        return $this->campaign;
    }

    /**
     * {@inheritDoc}
     */
    public function setCampaign(?CampaignInterface $prmCampaign): CampaignAwareInterface
    {
        $this->campaign = $prmCampaign;

        return $this;
    }
}
