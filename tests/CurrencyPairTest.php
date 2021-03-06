<?php

namespace Tests\Money;

use Money\Currency;
use Money\CurrencyPair;
use Money\Money;
use PHPUnit\Framework\TestCase;

final class CurrencyPairTest extends TestCase
{
    /**
     * @test
     */
    public function it_converts_to_json()
    {
        $expectedJson = '{"baseCurrency":"EUR","counterCurrency":"USD","ratio":1.25}';
        $actualJson = json_encode(new CurrencyPair(new Currency('EUR'), new Money(1.25, new Currency('USD'))));

        $this->assertEquals($expectedJson, $actualJson);
    }
}
