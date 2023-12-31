<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetChildrenForOrgUnitResponse StructType
 * @subpackage Structs
 */
class GetChildrenForOrgUnitResponse extends AbstractStructBase
{
    /**
     * The MidocoOrgunit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrgunit
     * @var \Pggns\MidocoApi\Documents\StructType\OrgunitDTO[]
     */
    protected array $MidocoOrgunit = [];
    /**
     * Constructor method for GetChildrenForOrgUnitResponse
     * @uses GetChildrenForOrgUnitResponse::setMidocoOrgunit()
     * @param \Pggns\MidocoApi\Documents\StructType\OrgunitDTO[] $midocoOrgunit
     */
    public function __construct(array $midocoOrgunit = [])
    {
        $this
            ->setMidocoOrgunit($midocoOrgunit);
    }
    /**
     * Get MidocoOrgunit value
     * @return \Pggns\MidocoApi\Documents\StructType\OrgunitDTO[]
     */
    public function getMidocoOrgunit(): array
    {
        return $this->MidocoOrgunit;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrgunit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrgunit method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrgunitForArrayConstraintsFromSetMidocoOrgunit(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getChildrenForOrgUnitResponseMidocoOrgunitItem) {
            // validation for constraint: itemType
            if (!$getChildrenForOrgUnitResponseMidocoOrgunitItem instanceof \Pggns\MidocoApi\Documents\StructType\OrgunitDTO) {
                $invalidValues[] = is_object($getChildrenForOrgUnitResponseMidocoOrgunitItem) ? get_class($getChildrenForOrgUnitResponseMidocoOrgunitItem) : sprintf('%s(%s)', gettype($getChildrenForOrgUnitResponseMidocoOrgunitItem), var_export($getChildrenForOrgUnitResponseMidocoOrgunitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrgunit property can only contain items of type \Pggns\MidocoApi\Documents\StructType\OrgunitDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrgunit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\OrgunitDTO[] $midocoOrgunit
     * @return \Pggns\MidocoApi\Documents\StructType\GetChildrenForOrgUnitResponse
     */
    public function setMidocoOrgunit(array $midocoOrgunit = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrgunitArrayErrorMessage = self::validateMidocoOrgunitForArrayConstraintsFromSetMidocoOrgunit($midocoOrgunit))) {
            throw new InvalidArgumentException($midocoOrgunitArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrgunit = $midocoOrgunit;
        
        return $this;
    }
    /**
     * Add item to MidocoOrgunit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\OrgunitDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetChildrenForOrgUnitResponse
     */
    public function addToMidocoOrgunit(\Pggns\MidocoApi\Documents\StructType\OrgunitDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\OrgunitDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrgunit property can only contain items of type \Pggns\MidocoApi\Documents\StructType\OrgunitDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrgunit[] = $item;
        
        return $this;
    }
}
