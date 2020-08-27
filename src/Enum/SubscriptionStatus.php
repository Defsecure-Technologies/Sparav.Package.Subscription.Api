<?php

namespace Sparav\Subscription\Enum;


use BenSampo\Enum\Enum;

final class SubscriptionStatus extends Enum
{
    const Stopped = 0;
    const Active = 1;
    const Paused = 2;
}
