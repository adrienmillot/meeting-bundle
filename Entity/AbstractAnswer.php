<?php

declare(strict_types=1);

namespace amillot\MeetingBundle\Entity;

use amillot\MeetingBundle\Traits\MeetingAware;
use amillot\SurveyBundle\Entity\AbstractAnswer as BaseAnswer;

abstract class AbstractAnswer extends BaseAnswer
{
    use MeetingAware;
}
