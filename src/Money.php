<?php


class Money
{
    /** @var string|null  */
    private $amount;
    /** @var string|null  */
    private $currency;

    /**
     * Money constructor.
     * @param string|null $amount
     * @param string|null $currency
     */
    public function __construct(string $amount, string $currency)
    {
        $this->setAmount($amount);
        $this->setCurrency($currency);
    }

    /**
     * @return string|null
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * @param string|null $amount
     */
    public function setAmount(?string $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /** @return bool
     * @var bool
     */
    public function equals(Money $money): bool
    {
        return  $this->getCurrency() === $money->getCurrency() && $this->getAmount() === $money->getAmount();
    }

    /**
     * @param Money $money
     * @return mixed
     */
    public function add(Money $money)
    {
        if($this->equals($money)){
            return $this->getAmount() + $money->getAmount();
        }else{
            throw new InvalidArgumentException('arguments not eguals');
        }
    }

}