<?php

namespace Microsoft\Graph\Users;

use Microsoft\Kiota\Abstractions\Serialization\ParseNode;

class EmailAddress 
{
    private array $additionalData;
    
    /** @var string $address The email address of an entity instance. */
    private string $address;
    
    /** @var string $name The display name of an entity instance. */
    private string $name;
    
    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, object>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the address property value. The email address of an entity instance.
     * @return string|null
    */
    public function getAddress(): ?string {
        return $this->address;
    }

    /**
     * Gets the name property value. The display name of an entity instance.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
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
        $writer->writeStringValue('address', $this->address);
        $writer->writeStringValue('name', $this->name);
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
     * Sets the address property value. The email address of an entity instance.
     *  @param string|null $value Value to set for the address property.
    */
    public function setAddress(string $value): void {
        $this->address = $value;
    }

    /**
     * Sets the name property value. The display name of an entity instance.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(string $value): void {
        $this->name = $value;
    }

}
