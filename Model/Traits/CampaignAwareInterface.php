<?php

namespace amillot\MeetingBundle\Model\Traits;

use amillot\MeetingBundle\Model\CampaignInterface;

interface CampaignAwareInterface
{
    /**
     * @return CampaignInterface|null
     */
    public function getCampaign(): ?CampaignInterface;

    /**
     * @param CampaignInterface|null $prmCampaign
     *
     * @return CampaignAwareInterface
     */
    public function setCampaign(?CampaignInterface $prmCampaign): CampaignAwareInterface;
}
