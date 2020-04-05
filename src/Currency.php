<?php


class Currency
{
    private $isoCode;

    public const CURL_USD = 'USD';
    public const CURL_EUR = 'EUR';
    public const CURL_RU  = 'RU';

    private $curent = [
        self::CURL_USD,
        self::CURL_EUR,
        self::CURL_RU
    ];

    /**
     * Currency constructor.
     * @param $isoCode
     */
    public function __construct($isoCode)
    {
        $this->setIsoCode($isoCode);
    }

    public function getIsoCode() :string
    {
        return $this->isoCode;
    }

    public function setIsoCode($isoCode)
    {
        if (!in_array( $isoCode, $this->curent)){
            throw new InvalidArgumentException('no set curent');
        }
        $this->isoCode = $isoCode;
    }

    public function equals($curentEql) :string
    {
        return ($this->isoCode === $curentEql) ? 'curents equal' : 'curents no equal';
    }


}