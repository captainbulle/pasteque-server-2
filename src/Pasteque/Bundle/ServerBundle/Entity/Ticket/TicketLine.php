<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Ticket;

use Pasteque\Bundle\ServerBundle\Entity\Tax\Tax as Tax;
use Pasteque\Bundle\ServerBundle\Entity\Product\Product as Product;

/**
 * TicketLine.
 */
class TicketLine
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $ticketId;

    /**
     * @var int
     */
    private $line;

    /**
     * @var string
     */
    private $productId;

    /**
     * @var string
     */
    private $attributeSetInstanceId;

    /**
     * @var float
     */
    private $quantity;

    /**
     * Price without tax and before applying discount.
     *
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $taxId;

    /**
     * @var float
     */
    private $discountRate;

    /**
     * XML attribute field.
     *
     * @var string
     */
    private $attributes;

    /**
     * @var string
     */
    private $productLabel;

    /**
     * TicketLine constructor.
     * Constructor must take full product and tax objects to build xml attributes. Only the id is then kept.
     *
     * @param string  $ticketId
     * @param int     $line
     * @param Product $product
     * @param string  $attributeSetInstanceId
     * @param float   $quantity
     * @param float   $price
     * @param Tax     $tax
     * @param float   $discountRate
     * @param string  $productLabel
     */
    public function __construct($ticketId, $line, $product, $attributeSetInstanceId, $quantity, $price, $tax, $discountRate = 0.0, $productLabel = null)
    {
        $this->ticketId = $ticketId;
        $this->line = $line;
        if ($product !== null) {
            $this->productId = $product->getId();
            $this->createAttributes($product, $tax);
        }
        $this->attributeSetInstanceId = $attributeSetInstanceId;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->taxId = $tax->getId();
        $this->discountRate = $discountRate;
        $this->productLabel = $productLabel;
    }

    /**
     * @param $extDiscountRate
     *
     * @return float
     */
    public function getSubtotal($extDiscountRate)
    {
        $fullDiscount = $this->discountRate + $extDiscountRate;

        return $this->price * (1.0 - $fullDiscount) * $this->quantity;
    }

    /**
     * Build xml attributes from line data. See TicketLineInfo constructors.
     *
     * @param Product $product
     * @param Tax     $tax
     */
    private function createAttributes($product, $tax)
    {
        // Set xml
        $domimpl = new \DOMImplementation();
        $doctype = $domimpl->createDocumentType('properties', null,
            'http://java.sun.com/dtd/properties.dtd');
        $attrs = $domimpl->createDocument(null, null, $doctype);
        $attrs->xmlEncoding = 'UTF-8';
        $attrs->xmlVersion = '1.0';
        $attrs->xmlStandalone = false;
        // Add root properties element
        $properties = $attrs->createElement('properties');
        $attrs->appendChild($properties);
        // Add comment element
        $comment = $attrs->createElement('comment');
        $comment->appendChild($attrs->createTextNode('POS-Tech')); // This is actually the application name
        $properties->appendChild($comment);
        // Add some product keys
        $entry = $attrs->createElement('entry');
        $key = $attrs->createAttribute('key');
        $key->appendChild($attrs->createTextNode('product.taxcategoryid'));
        $entry->appendChild($key);
        $entry->appendChild($attrs->createTextNode($tax->getTaxCategoryId()));
        $properties->appendChild($entry);
        $entry = $attrs->createElement('entry');
        $key = $attrs->createAttribute('key');
        $key->appendChild($attrs->createTextNode('product.com'));
        $entry->appendChild($key);
        $entry->appendChild($attrs->createTextNode('false')); // TODO add iscom field
        $properties->appendChild($entry);
        $entry = $attrs->createElement('entry');
        $key = $attrs->createAttribute('key');
        $key->appendChild($attrs->createTextNode('product.categoryid'));
        $entry->appendChild($key);
        $entry->appendChild($attrs->createTextNode($product->getCategoryId()));
        $properties->appendChild($entry);
        $entry = $attrs->createElement('entry');
        $key = $attrs->createAttribute('key');
        $key->appendChild($attrs->createTextNode('product.scale'));
        $entry->appendChild($key);
        $entry->appendChild($attrs->createTextNode(strval($product->getIsScale()) ? 'true' : 'false'));
        $properties->appendChild($entry);
        $entry = $attrs->createElement('entry');
        $key = $attrs->createAttribute('key');
        $key->appendChild($attrs->createTextNode('product.name'));
        $entry->appendChild($key);
        $entry->appendChild($attrs->createTextNode($product->getName()));
        $properties->appendChild($entry);
        // Save all this stuff
        $this->attributes = $attrs->saveXML();
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
     * Set ticketId.
     *
     * @param string $ticketId
     *
     * @return TicketLine
     */
    public function setTicketId($ticketId)
    {
        $this->ticketId = $ticketId;

        return $this;
    }

    /**
     * Get ticketId.
     *
     * @return string
     */
    public function getTicketId()
    {
        return $this->ticketId;
    }

    /**
     * Set line.
     *
     * @param int $line
     *
     * @return TicketLine
     */
    public function setLine($line)
    {
        $this->line = $line;

        return $this;
    }

    /**
     * Get line.
     *
     * @return int
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Set productId.
     *
     * @param string $productId
     *
     * @return TicketLine
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId.
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set attributeSetInstanceId.
     *
     * @param string $attributeSetInstanceId
     *
     * @return TicketLine
     */
    public function setAttributeSetInstanceId($attributeSetInstanceId)
    {
        $this->attributeSetInstanceId = $attributeSetInstanceId;

        return $this;
    }

    /**
     * Get attributeSetInstanceId.
     *
     * @return string
     */
    public function getAttributeSetInstanceId()
    {
        return $this->attributeSetInstanceId;
    }

    /**
     * Set quantity.
     *
     * @param float $quantity
     *
     * @return TicketLine
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity.
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set price.
     *
     * @param float $price
     *
     * @return TicketLine
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price.
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set taxId.
     *
     * @param string $taxId
     *
     * @return TicketLine
     */
    public function setTaxId($taxId)
    {
        $this->taxId = $taxId;

        return $this;
    }

    /**
     * Get taxId.
     *
     * @return string
     */
    public function getTaxId()
    {
        return $this->taxId;
    }

    /**
     * Set discountRate.
     *
     * @param float $discountRate
     *
     * @return TicketLine
     */
    public function setDiscountRate($discountRate)
    {
        $this->discountRate = $discountRate;

        return $this;
    }

    /**
     * Get discountRate.
     *
     * @return float
     */
    public function getDiscountRate()
    {
        return $this->discountRate;
    }

    /**
     * Set attributes.
     *
     * @param string $attributes
     *
     * @return TicketLine
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Get attributes.
     *
     * @return string
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Set productLabel.
     *
     * @param string $productLabel
     *
     * @return TicketLine
     */
    public function setProductLabel($productLabel)
    {
        $this->productLabel = $productLabel;

        return $this;
    }

    /**
     * Get productLabel.
     *
     * @return string
     */
    public function getProductLabel()
    {
        return $this->productLabel;
    }
}
