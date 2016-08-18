
Each API request requires an API key either as a HTTP Header or included as a query string. 

You can find your API key in the Curator Dashboard.

Your API key has many privileges, be sure to keep it secret! Do not share the key in publicly accessible areas such GitHub, client-side code, and so forth.

**HTTP Header / Basic Auth**  
Provide your API key as the basic auth username value. You do not need to provide a password. 

 ```http
 GET https://api.curator.io/v1/feeds
 Authorization: Basic QWxhZGRpbjpPcGVuU2VzYW1l
 ```
 
**Query string**  
 Include the API key as part of the request path in the format `?api_key=API_KEY`. 
 
 ```http
 GET https://api.curator.io/v1/feeds?api_key=ABCD-1234
 ```
