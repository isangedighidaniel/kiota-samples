<?php

namespace Microsoft\Graph\Users\InferenceClassification;

use Microsoft\Graph\Users\EmailAddress;
use Microsoft\Graph\Users\Entity;
use Microsoft\Graph\Users\InferenceClassificationType;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;

class InferenceClassificationOverride extends Entity 
{
    /** @var InferenceClassificationType $classifyAs  */
    private InferenceClassificationType $classifyAs;
    
    /** @var EmailAddress $senderEmailAddress  */
    private EmailAddress $senderEmailAddress;
    
    /**
     * Gets the classifyAs property value. 
     * @return InferenceClassificationType|null
    */
    public function getClassifyAs(): ?InferenceClassificationType {
        return $this->classifyAs;
    }

    /**
     * Gets the senderEmailAddress property value. 
     * @return EmailAddress|null
    */
    public function getSenderEmailAddress(): ?EmailAddress {
        return $this->senderEmailAddress;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        echo('This is the body of the deserializer.');
    }

    /**
     * Serializes information the current object
     * @param ?ISerializationWriter $writer $writer Serialization writer to use to serialize this model
    */
    public function serialize(?ISerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('classifyAs', $this->classifyAs);
        $writer->writeObjectValue('senderEmailAddress', $this->senderEmailAddress);
    }

    /**
     * Sets the classifyAs property value. 
     *  @param InferenceClassificationType|null $value Value to set for the classifyAs property.
    */
    public function setClassifyAs(InferenceClassificationType $value): void {
        $this->classifyAs = $value;
    }

    /**
     * Sets the senderEmailAddress property value. 
     *  @param EmailAddress|null $value Value to set for the senderEmailAddress property.
    */
    public function setSenderEmailAddress(EmailAddress $value): void {
        $this->senderEmailAddress = $value;
    }

}
