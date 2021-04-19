package graphjavav4.utilities.users.mailFolders;

import java.util.Objects;
import com.microsoft.kiota.serialization.SerializationWriter;
import com.microsoft.kiota.serialization.ParseNode;
import com.microsoft.kiota.serialization.Parsable;
import java.util.function.BiConsumer;
import java.util.Map;
import java.util.HashMap;
import java.util.List;
public class ChildFoldersResponse implements Parsable {
    @javax.annotation.Nullable
    public List<MailFolder> value;
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
        fields.put("value", (o, n) -> { ((ChildFoldersResponse)o).value = n.getCollectionOfObjectValues(MailFolder.class); });
        fields.put("nextLink", (o, n) -> { ((ChildFoldersResponse)o).nextLink = n.getStringValue(); });
        return fields;
    }
}
