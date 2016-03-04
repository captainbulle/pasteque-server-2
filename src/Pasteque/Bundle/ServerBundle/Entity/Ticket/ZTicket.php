<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Ticket;

use Pasteque\Bundle\ServerBundle\Entity\Payment\Payment as Payment;
use Pasteque\Bundle\ServerBundle\Entity\Tax\Tax as Tax;
use Pasteque\Bundle\ServerBundle\Entity\Category as Category;

/**
 * ZTicket.
 */
class ZTicket
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $cashId;

    /**
     * @var float
     */
    private $openCash;

    /**
     * @var float
     */
    private $closeCash;

    /**
     * @var int
     */
    private $ticketCount;

    /**
     * @var int
     */
    private $customerCount;

    /**
     * @var int
     */
    private $paymentCount;

    /**
     * @var string
     */
    private $cs;

    /**
     * @var Payment[]
     */
    private $payments;

    /**
     * @var Tax[]
     */
    private $taxes;

    /**
     * @var Category[]
     */
    private $categoriesSales;

    /**
     * ZTicket constructor.
     *
     * @param int                                                    $cashId
     * @param float                                                  $openCash
     * @param float                                                  $closeCash
     * @param int                                                    $ticketCount
     * @param int                                                    $customerCount
     * @param int                                                    $paymentCount
     * @param string                                                 $cs
     * @param \Pasteque\Bundle\ServerBundle\Entity\Payment\Payment[] $payments
     * @param \Pasteque\Bundle\ServerBundle\Entity\Tax\Tax[]         $taxes
     * @param \Pasteque\Bundle\ServerBundle\Entity\Category[]        $categoriesSales
     */
    public function __construct($cashId, $openCash, $closeCash, $ticketCount, $customerCount, $paymentCount, $cs, array $payments, array $taxes, array $categoriesSales)
    {
        $this->cashId = $cashId;
        $this->openCash = $openCash;
        $this->closeCash = $closeCash;
        $this->ticketCount = $ticketCount;
        $this->customerCount = $customerCount;
        $this->paymentCount = $paymentCount;
        $this->cs = $cs;
        $this->payments = $payments;
        $this->taxes = $taxes;
        $this->categoriesSales = $categoriesSales;
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
     * Set cashId.
     *
     * @param int $cashId
     *
     * @return ZTicket
     */
    public function setCashId($cashId)
    {
        $this->cashId = $cashId;

        return $this;
    }

    /**
     * Get cashId.
     *
     * @return int
     */
    public function getCashId()
    {
        return $this->cashId;
    }

    /**
     * Set openCash.
     *
     * @param float $openCash
     *
     * @return ZTicket
     */
    public function setOpenCash($openCash)
    {
        $this->openCash = $openCash;

        return $this;
    }

    /**
     * Get openCash.
     *
     * @return float
     */
    public function getOpenCash()
    {
        return $this->openCash;
    }

    /**
     * Set closeCash.
     *
     * @param float $closeCash
     *
     * @return ZTicket
     */
    public function setCloseCash($closeCash)
    {
        $this->closeCash = $closeCash;

        return $this;
    }

    /**
     * Get closeCash.
     *
     * @return float
     */
    public function getCloseCash()
    {
        return $this->closeCash;
    }

    /**
     * Set ticketCount.
     *
     * @param int $ticketCount
     *
     * @return ZTicket
     */
    public function setTicketCount($ticketCount)
    {
        $this->ticketCount = $ticketCount;

        return $this;
    }

    /**
     * Get ticketCount.
     *
     * @return int
     */
    public function getTicketCount()
    {
        return $this->ticketCount;
    }

    /**
     * Set customerCount.
     *
     * @param int $customerCount
     *
     * @return ZTicket
     */
    public function setCustomerCount($customerCount)
    {
        $this->customerCount = $customerCount;

        return $this;
    }

    /**
     * Get customerCount.
     *
     * @return int
     */
    public function getCustomerCount()
    {
        return $this->customerCount;
    }

    /**
     * Set paymentCount.
     *
     * @param int $paymentCount
     *
     * @return ZTicket
     */
    public function setPaymentCount($paymentCount)
    {
        $this->paymentCount = $paymentCount;

        return $this;
    }

    /**
     * Get paymentCount.
     *
     * @return int
     */
    public function getPaymentCount()
    {
        return $this->paymentCount;
    }

    /**
     * Set cs.
     *
     * @param string $cs
     *
     * @return ZTicket
     */
    public function setCs($cs)
    {
        $this->cs = $cs;

        return $this;
    }

    /**
     * Get cs.
     *
     * @return string
     */
    public function getCs()
    {
        return $this->cs;
    }
}
