<?php

namespace App\Dtos;

use App\Models\Asset;
use DivisionByZeroError;
use NumberFormatter;

class MoneyDto
{
    function __construct(private float $value, protected string $currency)
    {

    }

    public function getBaseCurrency(): string
    {
        return 'USD';
    }

    public static function from(float $value, string $currency)
    {
        return new self($value, strtoupper($currency));
    }

    public function convert(MoneyDto $money)
    {
        if($this->currency !== $money->currency){
            $value = $money->toCurrency() / $this->getRate();
        }
        else{
            $value = $money->value;
        }

        return new self($value, $this->currency);
    }

    public function add(MoneyDto $money)
    {
        // $money = $this->convert($money);
        $this->value += $money->value;
        return $this;
    }

    public function subtract(MoneyDto $money)
    {
        // $money = $this->convert($money);
        $this->value -= $money->value;
        return $this;
    }

    public function multiply(int $number)
    {
        $this->value *= $number;
        return $this;
    }

    public function divide(int $number)
    {
        $this->value /= $number;
        return $this;
    }

    public function lessThan(self $amount)
    {
        return $this->value < $amount->value;
    }

    public function graterThan(self $amount)
    {
        return $this->value > $amount->value;
    }

    /**
     * Covert to a currency vlue
     */
    public function toCurrency()
    {
        try{
            $ratePerCurrency = $this->getRate();
            return round($this->value / $ratePerCurrency, 6);
        }
        catch(DivisionByZeroError $ex){
            return round(0, 6);
        }
    }

    public function format()
    {
        return (new NumberFormatter('en_us', NumberFormatter::CURRENCY))
            ->formatCurrency($this->value, $this->getBaseCurrency());
    }

    public function currencyFormat()
    {
        $formatter =  (new NumberFormatter('en_us', NumberFormatter::CURRENCY, ''));
        $formatter->setAttribute(NumberFormatter::FRACTION_DIGITS, 6);
        return $formatter->formatCurrency($this->toCurrency(), $this->getCurrency());
    }

    public function getRate(): float
    {
        if($this->currency === $this->getBaseCurrency()) return 1;

        $rateInBaseCurrency = Asset::where('symbol', $this->currency)->firstOrFail()->price;
        return $rateInBaseCurrency;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getAmount(): float
    {
        return $this->value;
    }

    public function __toString()
    {
        return (string) $this->value;
    }
}
