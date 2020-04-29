<?php

namespace amillot\MeetingBundle\Model;

use amillot\MeetingBundle\Model\Traits\PeriodableInterface;
use amillot\MeetingBundle\Model\Traits\SessionListAwareInterface;

interface CampaignInterface extends PeriodableInterface, SessionListAwareInterface
{
}
