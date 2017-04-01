<?php

namespace RstGroup\ConferenceSystem\Domain\Payment\Test;

use RstGroup\ConferenceSystem\Domain\Payment\DiscountPoolRepository;
use RstGroup\ConferenceSystem\Domain\Payment\PoolDiscountStrategy;
use RstGroup\ConferenceSystem\Domain\Reservation\ConferenceId;
use RstGroup\ConferenceSystem\Domain\Reservation\Seat;

class PoolDiscountStrategyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function returns_discount_equal_to_zero_if_discount_pool_is_empty()
    {
        $seatQuantity = 34;
        $conferenceId = new ConferenceId(7);
        $discountPoolRepository = $this->getMock(DiscountPoolRepository::class);
        $discountPoolRepository->method('getNumberOfDiscounts')->willReturn(0);
        $discountPoolRepository->method('getDiscountPerSeat')->willReturn(13);
        $poolDiscountStrategy = new PoolDiscountStrategy($conferenceId, $discountPoolRepository);
        $seat = new Seat("Regular", $seatQuantity);

        $discount = $poolDiscountStrategy->calculate($seat);

        $this->assertSame(0, $discount);
    }

    /**
     * @test
     */
    public function returns_discount_per_seat_multiplied_by_number_of_seats_when_there_are_enough_discounts()
    {
        $conferenceId = new ConferenceId(3);
        $numberOfSeats = 100;
        $discountPoolRepository = $this->getMock(DiscountPoolRepository::class);
        $discountPoolRepository->method('getNumberOfDiscounts')->willReturn($numberOfSeats);
        $discountPoolRepository->method('getDiscountPerSeat')->willReturn(50);
        $poolDiscountStrategy = new PoolDiscountStrategy($conferenceId, $discountPoolRepository);
        $seat = new Seat("Regular", $numberOfSeats);

        $discount = $poolDiscountStrategy->calculate($seat);

        $this->assertEquals(5000, $discount);
    }
}
