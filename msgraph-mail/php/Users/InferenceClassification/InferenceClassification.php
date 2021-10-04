<?php

namespace Microsoft\Graph\Users\InferenceClassification;

use Microsoft\Graph\Users\Entity;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;

class InferenceClassification extends Entity 
{
    /** @var InferenceClassificationOverride $overrides A set of overrides for a user to always classify messages from specific senders in certain ways: focused, or other. Read-only. Nullable. */
    private InferenceClassificationOverride $overrides;
    
    /**
     * Gets the overrides property value. A set of overrides for a user to always classify messages from specific senders in certain ways: focused, or other. Read-only. Nullable.
     * @return InferenceClassificationOverride|null
    */
    public function getOverrides(): ?InferenceClassificationOverride {
        return $this->overrides;
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
        $writer->writeCollectionOfObjectValues('overrides', $this->overrides);
    }

    /**
     * Sets the overrides property value. A set of overrides for a user to always classify messages from specific senders in certain ways: focused, or other. Read-only. Nullable.
     *  @param InferenceClassificationOverride|null $value Value to set for the overrides property.
    */
    public function setOverrides(InferenceClassificationOverride $value): void {
        $this->overrides = $value;
    }

}
