
The common HTTP Response Status Codes are used.

### Successful Response  
Successful API queries will return a 200 HTTP Response code

### Error Responses
As much as possible, Curator attempts to use appropriate HTTP status codes to indicate the general class of problem, and this status code is repeated in the code section of the meta response.

**400 (Bad Request)**  
Any case where a parameter is invalid, or a required parameter is missing. This includes the case where no OAuth token is provided and the case where a resource ID is specified incorrectly in a path.

**403 (Forbidden)**  
The requested information cannot be viewed by the acting user, for example, because they are not friends with the user whose data they are trying to read.

**404 (Not Found)**  
Endpoint does not exist.

**405 (Method Not Allowed)**  
Attempting to use POST with a GET-only endpoint, or vice-versa.

**422 (Unprocessable Entity)**  
The request could not be completed as it is. Use the information included in the response to modify the request and retry.

**500 (Internal Server Error)**  
Curator's servers are unhappy. The request is probably valid but needs to be retried later. If the problem persist please contact hello@curator.io

Error responses will return JSON a message in the following format.

```json
{
  "success": false,
  "message": "Please provide a feed_id"
}
```