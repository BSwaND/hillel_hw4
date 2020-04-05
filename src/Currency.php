<?php


class Currency
{
    private $isoCode;

    /**
     * Currency constructor.
     * @param $isoCode
     */
    public function __construct($isoCode)
    {
        $this->isoCode = $isoCode;
    }

    /**
     * @return mixed
     */
    public function getIsoCode()
    {
        return $this->isoCode;
    }

    /**
     * @param mixed $isoCode
     */
    public function setIsoCode($isoCode)
    {
        $this->isoCode = $isoCode;
    }


}