<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchAccountResponse StructType
 * @subpackage Structs
 */
class SearchAccountResponse extends AbstractStructBase
{
    /**
     * The MidocoAccount
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAccount
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoAccount[]
     */
    protected array $MidocoAccount = [];
    /**
     * Constructor method for SearchAccountResponse
     * @uses SearchAccountResponse::setMidocoAccount()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAccount[] $midocoAccount
     */
    public function __construct(array $midocoAccount = [])
    {
        $this
            ->setMidocoAccount($midocoAccount);
    }
    /**
     * Get MidocoAccount value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAccount[]
     */
    public function getMidocoAccount(): array
    {
        return $this->MidocoAccount;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAccount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAccountForArrayConstraintsFromSetMidocoAccount(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchAccountResponseMidocoAccountItem) {
            // validation for constraint: itemType
            if (!$searchAccountResponseMidocoAccountItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoAccount) {
                $invalidValues[] = is_object($searchAccountResponseMidocoAccountItem) ? get_class($searchAccountResponseMidocoAccountItem) : sprintf('%s(%s)', gettype($searchAccountResponseMidocoAccountItem), var_export($searchAccountResponseMidocoAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAccount property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoAccount, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAccount[] $midocoAccount
     * @return \Pggns\MidocoApi\Documents\StructType\SearchAccountResponse
     */
    public function setMidocoAccount(array $midocoAccount = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAccountArrayErrorMessage = self::validateMidocoAccountForArrayConstraintsFromSetMidocoAccount($midocoAccount))) {
            throw new InvalidArgumentException($midocoAccountArrayErrorMessage, __LINE__);
        }
        $this->MidocoAccount = $midocoAccount;
        
        return $this;
    }
    /**
     * Add item to MidocoAccount value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAccount $item
     * @return \Pggns\MidocoApi\Documents\StructType\SearchAccountResponse
     */
    public function addToMidocoAccount(\Pggns\MidocoApi\Documents\StructType\MidocoAccount $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoAccount) {
            throw new InvalidArgumentException(sprintf('The MidocoAccount property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoAccount, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAccount[] = $item;
        
        return $this;
    }
}
