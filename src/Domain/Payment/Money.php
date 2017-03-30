<?php


namespace RstGroup\ConferenceSystem\Domain\Payment;


use Litipk\BigNumbers\Decimal;

class Money
{
    /**
     * @var Decimal
     */
    private $amount;

    /**
     * @var Currency
     */
    private $currency;

    /**
     * @param Decimal $amount
     * @param Currency $currency
     */
    public function __construct(Decimal $amount, Currency $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @return Decimal
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return Currency
     */
    public function getCurrency()
    {
        return $this->currency;
    }
}
