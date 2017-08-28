
Each API request requires an API key either as a HTTP Header or included as a query string.

You can find your API key in the Curator Dashboard.

Your API key has many privileges, be sure to keep it secret! Do not share the key in publicly accessible areas such GitHub, client-side code, and so forth.

**Query string**  
 Include the API key as part of the request path in the format `?api_key=API_KEY`.

 ```http
 GET https://api.curator.io/v1/feeds?api_key=ABCD-1234
 ```

**HTTP Header / Basic Auth**  
Following the Authorization Basic HTTP Spec (eg https://en.wikipedia.org/wiki/Basic_access_authentication#Client_side). Provide your API key as the basic auth **username** value. You do not need to provide a password.

The Authorization field is constructed as follows:

1) The username (api_key) and password (leave blank) are combined with a single colon. (:)
2) The resulting string is encoded into an octet sequence.
3) The resulting string is encoded using a variant of Base64.
4) The authorization method and a space is then prepended to the encoded string, separated with a space (e.g. "Basic ").

 ```http
 GET https://api.curator.io/v1/feeds
 Authorization: Basic QWxhZGRpbjpPcGVuU2VzYW1l
 ```
