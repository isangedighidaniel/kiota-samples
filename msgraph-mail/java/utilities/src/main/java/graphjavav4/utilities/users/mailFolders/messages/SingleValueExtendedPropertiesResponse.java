package graphjavav4.utilities.users.mailFolders.messages;

import java.util.Objects;
import graphjavav4.utilities.users.SingleValueLegacyExtendedProperty;
import com.microsoft.kiota.serialization.SerializationWriter;
import com.microsoft.kiota.serialization.ParseNode;
import com.microsoft.kiota.serialization.Parsable;
import java.util.function.BiConsumer;
import java.util.Map;
import java.util.HashMap;
import java.util.List;
public class SingleValueExtendedPropertiesResponse implements Parsable {
    @javax.annotation.Nullable
    public List<SingleValueLegacyExtendedProperty> value;
    @javax.annotation.Nullable
    public String nextLink;
    public void serialize(@javax.annotation.Nonnull final SerializationWriter writer) {
        Objects.requireNonNull(writer);
        writer.writeCollectionOfObjectValues("value", value);
        writer.writeStringValue("nextLink", nextLink);
    }
    @javax.annotation.Nonnull
    public <T> Map<String, BiConsumer<T, ParseNode>> getDeserializeFields() {
        final Map<String, BiConsumer<T, ParseNode>> fields = new HashMap<>(2);
        fields.put("value", (o, n) -> { ((SingleValueExtendedPropertiesResponse)o).value = n.getCollectionOfObjectValues(SingleValueLegacyExtendedProperty.class); });
        fields.put("nextLink", (o, n) -> { ((SingleValueExtendedPropertiesResponse)o).nextLink = n.getStringValue(); });
        return fields;
    }
}
