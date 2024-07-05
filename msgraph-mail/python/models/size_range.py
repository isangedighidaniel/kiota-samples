from __future__ import annotations
from dataclasses import dataclass, field
from kiota_abstractions.serialization import AdditionalDataHolder, Parsable, ParseNode, SerializationWriter
from typing import Any, Callable, Dict, List, Optional, TYPE_CHECKING, Union

@dataclass
class SizeRange(AdditionalDataHolder, Parsable):
    # Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    additional_data: Dict[str, Any] = field(default_factory=dict)

    # The maximum size (in kilobytes) that an incoming message must have in order for a condition or exception to apply.
    maximum_size: Optional[int] = None
    # The minimum size (in kilobytes) that an incoming message must have in order for a condition or exception to apply.
    minimum_size: Optional[int] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: ParseNode) -> SizeRange:
        """
        Creates a new instance of the appropriate class based on discriminator value
        param parse_node: The parse node to use to read the discriminator value and create the object
        Returns: SizeRange
        """
        if not parse_node:
            raise TypeError("parse_node cannot be null.")
        return SizeRange()
    
    def get_field_deserializers(self,) -> Dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: Dict[str, Callable[[ParseNode], None]]
        """
        fields: Dict[str, Callable[[Any], None]] = {
            "maximumSize": lambda n : setattr(self, 'maximum_size', n.get_int_value()),
            "minimumSize": lambda n : setattr(self, 'minimum_size', n.get_int_value()),
        }
        return fields
    
    def serialize(self,writer: SerializationWriter) -> None:
        """
        Serializes information the current object
        param writer: Serialization writer to use to serialize this model
        Returns: None
        """
        if not writer:
            raise TypeError("writer cannot be null.")
        writer.write_int_value("maximumSize", self.maximum_size)
        writer.write_int_value("minimumSize", self.minimum_size)
        writer.write_additional_data_value(self.additional_data)
    

