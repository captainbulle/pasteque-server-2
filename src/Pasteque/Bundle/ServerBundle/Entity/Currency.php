<?php
//    POS-Tech API
//
//    Copyright (C) 2012 Scil (http://scil.coop)
//
//    This file is part of POS-Tech.
//
//    POS-Tech is free software: you can redistribute it and/or modify
//    it under the terms of the GNU General Public License as published by
//    the Free Software Foundation, either version 3 of the License, or
//    (at your option) any later version.
//
//    POS-Tech is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU General Public License for more details.
//
//    You should have received a copy of the GNU General Public License
//    along with POS-Tech.  If not, see <http://www.gnu.org/licenses/>.

namespace Pasteque\Bundle\ServerBundle\Entity;

/**
 * Currency.
 */
class Currency
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $symbol;

    /**
     * @var string
     */
    private $decimalSeparator;

    /**
     * @var string
     */
    private $thousandsSeparator;

    /**
     * @var string
     */
    private $format;

    /**
     * @var float
     */
    private $rate;

    /**
     * @var bool
     */
    private $isMain;

    /**
     * @var bool
     */
    private $isActive;

    /**
     * @param string $name
     * @param string $symbol
     * @param string $decimalSeparator
     * @param string $thousandsSeparator
     * @param string $format
     * @param float  $rate
     * @param bool   $isMain
     */
    public function __construct($name, $symbol, $decimalSeparator = '.', $thousandsSeparator = ',', $format = '#.##0.00¤', $rate = 0.55, $isMain = false)
    {
        $this->name = $name;
        $this->symbol = $symbol;
        $this->decimalSeparator = $decimalSeparator;
        $this->thousandsSeparator = $thousandsSeparator;
        $this->format = $format;
        $this->rate = $rate;
        $this->isMain = $isMain;
        $this->isActive = true;
    }

    /**
     * @param $amount
     *
     * @return bool|string
     */
    public function format($amount)
    {
        $realFormat = str_replace('$', '¤', $this->format);
        $numFormatter = new \NumberFormatter(null, \NumberFormatter::PATTERN_DECIMAL, $realFormat);
        $numFormatter->setSymbol(\NumberFormatter::CURRENCY_SYMBOL, $this->symbol);
        $numFormatter->setSymbol(\NumberFormatter::DECIMAL_SEPARATOR_SYMBOL, $this->decimalSeparator);
        $numFormatter->setSymbol(\NumberFormatter::MONETARY_SEPARATOR_SYMBOL, $this->decimalSeparator);
        $numFormatter->setSymbol(\NumberFormatter::GROUPING_SEPARATOR_SYMBOL, $this->thousandsSeparator);
        $numFormatter->setSymbol(\NumberFormatter::MONETARY_GROUPING_SEPARATOR_SYMBOL, $this->thousandsSeparator);

        // PHP fix: number of decimal digits is forced without pattern analysis
        // when in currency mode (with currency symbol in format)
        if (strpos($realFormat, '¤') !== false) {
            // Count number of 0 after decimal separator
            $parts = explode('.', $realFormat);
            $decimals = 0;
            if (count($parts) == 2) {
                $decimalPart = $parts[1];
                $decimals = count(explode('0', $decimalPart)) - 1;
            }
            $numFormatter->setAttribute(\NumberFormatter::MIN_FRACTION_DIGITS, $decimals);
        }

        return $numFormatter->format($amount);
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Currency
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set symbol.
     *
     * @param string $symbol
     *
     * @return Currency
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;

        return $this;
    }

    /**
     * Get symbol.
     *
     * @return string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * Set decimalSeparator.
     *
     * @param string $decimalSeparator
     *
     * @return Currency
     */
    public function setDecimalSeparator($decimalSeparator)
    {
        $this->decimalSeparator = $decimalSeparator;

        return $this;
    }

    /**
     * Get decimalSeparator.
     *
     * @return string
     */
    public function getDecimalSeparator()
    {
        return $this->decimalSeparator;
    }

    /**
     * Set thousandsSeparator.
     *
     * @param string $thousandsSeparator
     *
     * @return Currency
     */
    public function setThousandsSeparator($thousandsSeparator)
    {
        $this->thousandsSeparator = $thousandsSeparator;

        return $this;
    }

    /**
     * Get thousandsSeparator.
     *
     * @return string
     */
    public function getThousandsSeparator()
    {
        return $this->thousandsSeparator;
    }

    /**
     * Set format.
     *
     * @param string $format
     *
     * @return Currency
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format.
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set rate.
     *
     * @param float $rate
     *
     * @return Currency
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate.
     *
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set isMain.
     *
     * @param bool $isMain
     *
     * @return Currency
     */
    public function setIsMain($isMain)
    {
        $this->isMain = $isMain;

        return $this;
    }

    /**
     * Get isMain.
     *
     * @return bool
     */
    public function getIsMain()
    {
        return $this->isMain;
    }

    /**
     * Set isActive.
     *
     * @param bool $isActive
     *
     * @return Currency
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive.
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }
}
