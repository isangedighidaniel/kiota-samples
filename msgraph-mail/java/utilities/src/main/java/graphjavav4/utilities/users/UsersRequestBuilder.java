package graphjavav4.utilities.users;

import com.microsoft.kiota.serialization.SerializationWriter;
import com.microsoft.kiota.HttpCore;
import com.microsoft.kiota.HttpMethod;
import com.microsoft.kiota.RequestInfo;
import com.microsoft.kiota.ResponseHandler;
import com.microsoft.kiota.QueryParametersBase;
import java.util.Map;
import java.net.URI;
import java.net.URISyntaxException;
import java.io.InputStream;
import java.util.function.Function;
public class UsersRequestBuilder {
    @javax.annotation.Nonnull
    private final String pathSegment = "/users";
    @javax.annotation.Nullable
    public String currentPath;
    @javax.annotation.Nullable
    public HttpCore httpCore;
    @javax.annotation.Nullable
    public Function<String, SerializationWriter> serializerFactory;
}
