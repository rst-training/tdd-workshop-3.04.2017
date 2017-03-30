<?php

namespace RstGroup\ConferenceSystem\Domain\Payment;

class DiscountService
{
    /**
     * @var SeatsStrategyConfiguration
     */
    private $configuration;

    public function __construct(SeatsStrategyConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function calculateForSeat($seat, $price)
    {
        $discountedPrice = null;

        foreach ($this->seatDiscountStrategies() as $strategy) {
            $discountedPrice = $strategy->calculate($seat, $price, $discountedPrice);
        }

        return $discountedPrice;
    }

    protected function seatDiscountStrategies()
    {
       return [];
    }
}
