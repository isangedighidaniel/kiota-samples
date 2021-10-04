<?php

namespace Microsoft\Graph\Users\MailFolders\Messages\Attachments;

use Microsoft\Graph\Users\Attachment;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;

class AttachmentsResponse 
{
    private array $additionalData;
    
    /** @var string $nextLink  */
    private string $nextLink;
    
    /** @var Attachment $value  */
    private Attachment $value;
    
    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, object>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the nextLink property value. 
     * @return string|null
    */
    public function getNextLink(): ?string {
        return $this->nextLink;
    }

    /**
     * Gets the value property value. 
     * @return Attachment|null
    */
    public function getValue(): ?Attachment {
        return $this->value;
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
        $writer->writeStringValue('@odata.nextLink', $this->nextLink);
        $writer->writeCollectionOfObjectValues('value', $this->value);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,object> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the nextLink property value. 
     *  @param string|null $value Value to set for the nextLink property.
    */
    public function setNextLink(string $value): void {
        $this->nextLink = $value;
    }

    /**
     * Sets the value property value. 
     *  @param Attachment|null $value Value to set for the value property.
    */
    public function setValue(Attachment $value): void {
        $this->value = $value;
    }

}
