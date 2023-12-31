<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgUnitsInSameDBForUserResponse StructType
 * @subpackage Structs
 */
class GetOrgUnitsInSameDBForUserResponse extends AbstractStructBase
{
    /**
     * The UnitName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected array $UnitName = [];
    /**
     * Constructor method for GetOrgUnitsInSameDBForUserResponse
     * @uses GetOrgUnitsInSameDBForUserResponse::setUnitName()
     * @param string[] $unitName
     */
    public function __construct(array $unitName = [])
    {
        $this
            ->setUnitName($unitName);
    }
    /**
     * Get UnitName value
     * @return string[]
     */
    public function getUnitName(): array
    {
        return $this->UnitName;
    }
    /**
     * This method is responsible for validating the values passed to the setUnitName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitName method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitNameForArrayConstraintsFromSetUnitName(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrgUnitsInSameDBForUserResponseUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($getOrgUnitsInSameDBForUserResponseUnitNameItem)) {
                $invalidValues[] = is_object($getOrgUnitsInSameDBForUserResponseUnitNameItem) ? get_class($getOrgUnitsInSameDBForUserResponseUnitNameItem) : sprintf('%s(%s)', gettype($getOrgUnitsInSameDBForUserResponseUnitNameItem), var_export($getOrgUnitsInSameDBForUserResponseUnitNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UnitName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UnitName value
     * @throws InvalidArgumentException
     * @param string[] $unitName
     * @return \Pggns\MidocoApi\Documents\StructType\GetOrgUnitsInSameDBForUserResponse
     */
    public function setUnitName(array $unitName = []): self
    {
        // validation for constraint: array
        if ('' !== ($unitNameArrayErrorMessage = self::validateUnitNameForArrayConstraintsFromSetUnitName($unitName))) {
            throw new InvalidArgumentException($unitNameArrayErrorMessage, __LINE__);
        }
        $this->UnitName = $unitName;
        
        return $this;
    }
    /**
     * Add item to UnitName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetOrgUnitsInSameDBForUserResponse
     */
    public function addToUnitName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The UnitName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UnitName[] = $item;
        
        return $this;
    }
}
