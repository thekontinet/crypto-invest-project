<?php

namespace Tests\Unit\Dto;

use App\Dtos\MoneyDto;
use PHPUnit\Framework\TestCase;

class MoneyDtoTest extends TestCase
{
    public function test_can_return_amount(): void
    {
        $money = MoneyDto::from(1000, 'USD');
        $this->assertEquals((string) $money, '1000');
    }

    public function test_can_return_amount_in_currency_format(): void
    {
        $money = MoneyDto::from(1000, 'USD');
        $this->assertEquals((string) $money->format(), '$1,000.00');
    }

    public function test_can_add_to_amount(): void
    {
        $money = MoneyDto::from(1000, 'USD');
        $money->add(MoneyDto::from(500, 'USD'));
        $this->assertEquals((string) $money, '1500');
    }

    public function test_can_subtract_to_amount(): void
    {
        $money = MoneyDto::from(1000, 'USD');
        $money->subtract(MoneyDto::from(500, 'USD'));
        $this->assertEquals((string) $money, '500');
    }

    public function test_can_multiply_to_amount(): void
    {
        $money = MoneyDto::from(1000, 'USD');
        $money->multiply(2);
        $this->assertEquals((string) $money, '2000');
    }

    public function test_can_divide_to_amount(): void
    {
        $money = MoneyDto::from(1000, 'USD');
        $money->divide(2);
        $this->assertEquals((string) $money, '500');
    }

    public function test_can_compare_if_amount_is_greater(): void
    {
        $money = MoneyDto::from(1000, 'USD');;
        $this->assertTrue($money->graterThan(MoneyDto::from(500, 'USD')) === true);
    }

    public function test_can_compare_if_amount_is_lesser(): void
    {
        $money = MoneyDto::from(1000, 'USD');;
        $this->assertTrue($money->lessThan(MoneyDto::from(500, 'USD')) === false);
    }
}
