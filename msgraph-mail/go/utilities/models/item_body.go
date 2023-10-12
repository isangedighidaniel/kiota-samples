package models

import (
    i878a80d2330e89d26896388a3f487eef27b0a0e6c010c493bf80be1452208f91 "github.com/microsoft/kiota-abstractions-go/serialization"
)

// ItemBody 
type ItemBody struct {
    // Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    additionalData map[string]any
    // The content of the item.
    content *string
    // The contentType property
    contentType *BodyType
}
// NewItemBody instantiates a new itemBody and sets the default values.
func NewItemBody()(*ItemBody) {
    m := &ItemBody{
    }
    m.SetAdditionalData(make(map[string]any))
    return m
}
// CreateItemBodyFromDiscriminatorValue creates a new instance of the appropriate class based on discriminator value
func CreateItemBodyFromDiscriminatorValue(parseNode i878a80d2330e89d26896388a3f487eef27b0a0e6c010c493bf80be1452208f91.ParseNode)(i878a80d2330e89d26896388a3f487eef27b0a0e6c010c493bf80be1452208f91.Parsable, error) {
    return NewItemBody(), nil
}
// GetAdditionalData gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
func (m *ItemBody) GetAdditionalData()(map[string]any) {
    return m.additionalData
}
// GetContent gets the content property value. The content of the item.
func (m *ItemBody) GetContent()(*string) {
    return m.content
}
// GetContentType gets the contentType property value. The contentType property
func (m *ItemBody) GetContentType()(*BodyType) {
    return m.contentType
}
// GetFieldDeserializers the deserialization information for the current model
func (m *ItemBody) GetFieldDeserializers()(map[string]func(i878a80d2330e89d26896388a3f487eef27b0a0e6c010c493bf80be1452208f91.ParseNode)(error)) {
    res := make(map[string]func(i878a80d2330e89d26896388a3f487eef27b0a0e6c010c493bf80be1452208f91.ParseNode)(error))
    res["content"] = func (n i878a80d2330e89d26896388a3f487eef27b0a0e6c010c493bf80be1452208f91.ParseNode) error {
        val, err := n.GetStringValue()
        if err != nil {
            return err
        }
        if val != nil {
            m.SetContent(val)
        }
        return nil
    }
    res["contentType"] = func (n i878a80d2330e89d26896388a3f487eef27b0a0e6c010c493bf80be1452208f91.ParseNode) error {
        val, err := n.GetEnumValue(ParseBodyType)
        if err != nil {
            return err
        }
        if val != nil {
            m.SetContentType(val.(*BodyType))
        }
        return nil
    }
    return res
}
// Serialize serializes information the current object
func (m *ItemBody) Serialize(writer i878a80d2330e89d26896388a3f487eef27b0a0e6c010c493bf80be1452208f91.SerializationWriter)(error) {
    {
        err := writer.WriteStringValue("content", m.GetContent())
        if err != nil {
            return err
        }
    }
    if m.GetContentType() != nil {
        cast := (*m.GetContentType()).String()
        err := writer.WriteStringValue("contentType", &cast)
        if err != nil {
            return err
        }
    }
    {
        err := writer.WriteAdditionalData(m.GetAdditionalData())
        if err != nil {
            return err
        }
    }
    return nil
}
// SetAdditionalData sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
func (m *ItemBody) SetAdditionalData(value map[string]any)() {
    m.additionalData = value
}
// SetContent sets the content property value. The content of the item.
func (m *ItemBody) SetContent(value *string)() {
    m.content = value
}
// SetContentType sets the contentType property value. The contentType property
func (m *ItemBody) SetContentType(value *BodyType)() {
    m.contentType = value
}
// ItemBodyable 
type ItemBodyable interface {
    i878a80d2330e89d26896388a3f487eef27b0a0e6c010c493bf80be1452208f91.AdditionalDataHolder
    i878a80d2330e89d26896388a3f487eef27b0a0e6c010c493bf80be1452208f91.Parsable
    GetContent()(*string)
    GetContentType()(*BodyType)
    SetContent(value *string)()
    SetContentType(value *BodyType)()
}
