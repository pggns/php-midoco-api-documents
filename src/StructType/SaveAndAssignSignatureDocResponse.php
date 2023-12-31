<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAndAssignSignatureDocResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: assignSignatureDoc --- assigns a signature document to the specified order,customer or billing document
 * @subpackage Structs
 */
class SaveAndAssignSignatureDocResponse extends AbstractStructBase
{
    /**
     * The MidocoSignatureDoc
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSignatureDoc
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc[]
     */
    protected array $MidocoSignatureDoc = [];
    /**
     * Constructor method for SaveAndAssignSignatureDocResponse
     * @uses SaveAndAssignSignatureDocResponse::setMidocoSignatureDoc()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc[] $midocoSignatureDoc
     */
    public function __construct(array $midocoSignatureDoc = [])
    {
        $this
            ->setMidocoSignatureDoc($midocoSignatureDoc);
    }
    /**
     * Get MidocoSignatureDoc value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc[]
     */
    public function getMidocoSignatureDoc(): array
    {
        return $this->MidocoSignatureDoc;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSignatureDoc method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSignatureDoc method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSignatureDocForArrayConstraintsFromSetMidocoSignatureDoc(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveAndAssignSignatureDocResponseMidocoSignatureDocItem) {
            // validation for constraint: itemType
            if (!$saveAndAssignSignatureDocResponseMidocoSignatureDocItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc) {
                $invalidValues[] = is_object($saveAndAssignSignatureDocResponseMidocoSignatureDocItem) ? get_class($saveAndAssignSignatureDocResponseMidocoSignatureDocItem) : sprintf('%s(%s)', gettype($saveAndAssignSignatureDocResponseMidocoSignatureDocItem), var_export($saveAndAssignSignatureDocResponseMidocoSignatureDocItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSignatureDoc property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSignatureDoc value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc[] $midocoSignatureDoc
     * @return \Pggns\MidocoApi\Documents\StructType\SaveAndAssignSignatureDocResponse
     */
    public function setMidocoSignatureDoc(array $midocoSignatureDoc = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSignatureDocArrayErrorMessage = self::validateMidocoSignatureDocForArrayConstraintsFromSetMidocoSignatureDoc($midocoSignatureDoc))) {
            throw new InvalidArgumentException($midocoSignatureDocArrayErrorMessage, __LINE__);
        }
        $this->MidocoSignatureDoc = $midocoSignatureDoc;
        
        return $this;
    }
    /**
     * Add item to MidocoSignatureDoc value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc $item
     * @return \Pggns\MidocoApi\Documents\StructType\SaveAndAssignSignatureDocResponse
     */
    public function addToMidocoSignatureDoc(\Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc) {
            throw new InvalidArgumentException(sprintf('The MidocoSignatureDoc property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSignatureDoc[] = $item;
        
        return $this;
    }
}
