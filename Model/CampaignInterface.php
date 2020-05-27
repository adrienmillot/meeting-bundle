<?php

namespace amillot\MeetingBundle\Model;

use amillot\MeetingBundle\Model\Traits\PeriodableInterface;
use amillot\MeetingBundle\Model\Traits\SessionListAwareInterface;
use amillot\SurveyBundle\Model\Traits\SurveyAwareInterface;

interface CampaignInterface extends PeriodableInterface, SessionListAwareInterface, SurveyAwareInterface
{
}
