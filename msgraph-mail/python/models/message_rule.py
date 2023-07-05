from __future__ import annotations
from dataclasses import dataclass, field
from kiota_abstractions.serialization import Parsable, ParseNode, SerializationWriter
from typing import Any, Callable, Dict, List, Optional, TYPE_CHECKING, Union

if TYPE_CHECKING:
    from . import entity, message_rule_actions, message_rule_predicates

from . import entity

@dataclass
class MessageRule(entity.Entity):
    # The actions property
    actions: Optional[message_rule_actions.MessageRuleActions] = None
    # The conditions property
    conditions: Optional[message_rule_predicates.MessageRulePredicates] = None
    # The display name of the rule.
    display_name: Optional[str] = None
    # The exceptions property
    exceptions: Optional[message_rule_predicates.MessageRulePredicates] = None
    # Indicates whether the rule is in an error condition. Read-only.
    has_error: Optional[bool] = None
    # Indicates whether the rule is enabled to be applied to messages.
    is_enabled: Optional[bool] = None
    # Indicates if the rule is read-only and cannot be modified or deleted by the rules REST API.
    is_read_only: Optional[bool] = None
    # Indicates the order in which the rule is executed, among other rules.
    sequence: Optional[int] = None
    
    @staticmethod
    def create_from_discriminator_value(parse_node: Optional[ParseNode] = None) -> MessageRule:
        """
        Creates a new instance of the appropriate class based on discriminator value
        Args:
            parseNode: The parse node to use to read the discriminator value and create the object
        Returns: MessageRule
        """
        if parse_node is None:
            raise Exception("parse_node cannot be undefined")
        return MessageRule()
    
    def get_field_deserializers(self,) -> Dict[str, Callable[[ParseNode], None]]:
        """
        The deserialization information for the current model
        Returns: Dict[str, Callable[[ParseNode], None]]
        """
        from . import entity, message_rule_actions, message_rule_predicates

        fields: Dict[str, Callable[[Any], None]] = {
            "actions": lambda n : setattr(self, 'actions', n.get_object_value(message_rule_actions.MessageRuleActions)),
            "conditions": lambda n : setattr(self, 'conditions', n.get_object_value(message_rule_predicates.MessageRulePredicates)),
            "displayName": lambda n : setattr(self, 'display_name', n.get_str_value()),
            "exceptions": lambda n : setattr(self, 'exceptions', n.get_object_value(message_rule_predicates.MessageRulePredicates)),
            "hasError": lambda n : setattr(self, 'has_error', n.get_bool_value()),
            "isEnabled": lambda n : setattr(self, 'is_enabled', n.get_bool_value()),
            "isReadOnly": lambda n : setattr(self, 'is_read_only', n.get_bool_value()),
            "sequence": lambda n : setattr(self, 'sequence', n.get_int_value()),
        }
        super_fields = super().get_field_deserializers()
        fields.update(super_fields)
        return fields
    
    def serialize(self,writer: SerializationWriter) -> None:
        """
        Serializes information the current object
        Args:
            writer: Serialization writer to use to serialize this model
        """
        if writer is None:
            raise Exception("writer cannot be undefined")
        super().serialize(writer)
        writer.write_object_value("actions", self.actions)
        writer.write_object_value("conditions", self.conditions)
        writer.write_str_value("displayName", self.display_name)
        writer.write_object_value("exceptions", self.exceptions)
        writer.write_bool_value("hasError", self.has_error)
        writer.write_bool_value("isEnabled", self.is_enabled)
        writer.write_bool_value("isReadOnly", self.is_read_only)
        writer.write_int_value("sequence", self.sequence)
    

