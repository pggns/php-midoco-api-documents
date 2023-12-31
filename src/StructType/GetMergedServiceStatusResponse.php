<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMergedServiceStatusResponse StructType
 * @subpackage Structs
 */
class GetMergedServiceStatusResponse extends AbstractStructBase
{
    /**
     * The MidocoServiceStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoServiceStatus
     * @var \Pggns\MidocoApi\Documents\StructType\ServiceStatusDTO[]
     */
    protected array $MidocoServiceStatus = [];
    /**
     * Constructor method for GetMergedServiceStatusResponse
     * @uses GetMergedServiceStatusResponse::setMidocoServiceStatus()
     * @param \Pggns\MidocoApi\Documents\StructType\ServiceStatusDTO[] $midocoServiceStatus
     */
    public function __construct(array $midocoServiceStatus = [])
    {
        $this
            ->setMidocoServiceStatus($midocoServiceStatus);
    }
    /**
     * Get MidocoServiceStatus value
     * @return \Pggns\MidocoApi\Documents\StructType\ServiceStatusDTO[]
     */
    public function getMidocoServiceStatus(): array
    {
        return $this->MidocoServiceStatus;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoServiceStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoServiceStatus method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoServiceStatusForArrayConstraintsFromSetMidocoServiceStatus(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMergedServiceStatusResponseMidocoServiceStatusItem) {
            // validation for constraint: itemType
            if (!$getMergedServiceStatusResponseMidocoServiceStatusItem instanceof \Pggns\MidocoApi\Documents\StructType\ServiceStatusDTO) {
                $invalidValues[] = is_object($getMergedServiceStatusResponseMidocoServiceStatusItem) ? get_class($getMergedServiceStatusResponseMidocoServiceStatusItem) : sprintf('%s(%s)', gettype($getMergedServiceStatusResponseMidocoServiceStatusItem), var_export($getMergedServiceStatusResponseMidocoServiceStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoServiceStatus property can only contain items of type \Pggns\MidocoApi\Documents\StructType\ServiceStatusDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoServiceStatus value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\ServiceStatusDTO[] $midocoServiceStatus
     * @return \Pggns\MidocoApi\Documents\StructType\GetMergedServiceStatusResponse
     */
    public function setMidocoServiceStatus(array $midocoServiceStatus = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoServiceStatusArrayErrorMessage = self::validateMidocoServiceStatusForArrayConstraintsFromSetMidocoServiceStatus($midocoServiceStatus))) {
            throw new InvalidArgumentException($midocoServiceStatusArrayErrorMessage, __LINE__);
        }
        $this->MidocoServiceStatus = $midocoServiceStatus;
        
        return $this;
    }
    /**
     * Add item to MidocoServiceStatus value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\ServiceStatusDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetMergedServiceStatusResponse
     */
    public function addToMidocoServiceStatus(\Pggns\MidocoApi\Documents\StructType\ServiceStatusDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\ServiceStatusDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoServiceStatus property can only contain items of type \Pggns\MidocoApi\Documents\StructType\ServiceStatusDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoServiceStatus[] = $item;
        
        return $this;
    }
}
