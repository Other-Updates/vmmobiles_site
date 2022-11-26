<?php

namespace GlobalPayments\Api\Entities\Enums;

use GlobalPayments\Api\Entities\Enum;

class GiftEntryMethod extends Enum
{
    const SWIPE = 0;
    const PROXIMITY = 1;
    const MANUAL = 2;
}
