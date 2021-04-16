import {SerializationWriter, ParseNode, Parsable} from '@microsoft/kiota-abstractions';

export class Entity implements Parsable<Entity> {
    /** Read-only.  */
    public id?: string | undefined;
    /**
     * Serialiazes information the current object
     * @param writer Serialization writer to use to serialize this model
     * @returns a void
     */
    public serialize (writer: SerializationWriter) : void {
        writer.writeStringValue("id", this.id);
    };
    /**
     * The serialization information for the current model
     * @returns a Map<string, (item: Entity, node: ParseNode) => void>
     */
    public deserializeFields () : Map<string, (item: Entity, node: ParseNode) => void> {
        return new Map<string, (item: Entity, node: ParseNode) => void>([
            ["id", (o, n) => { o.id = n.getStringValue(); }],
        ]);
    };
}
