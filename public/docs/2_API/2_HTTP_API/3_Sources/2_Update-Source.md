Updates a Source.

**Note:** Once created a Sources `feed_id` and `source_type` can not be modified.

### PUT /sources/SOURCE_ID

**Request**

```http
PUT /v1/sources/SOURCE_ID

{
    "tag": "curator_io"
}
```

**Response**

```json
{
    "id": "1301a1f9-4982-4101-8a2f-2bd4d98db41a",
    "feed_id": "660b923a-a6e7-4540-bd03-7e08fd006e0d",
    "source_type": 4,
    "tag": "curator_io",
    "status": 1,
    "initialised": 0,
    "error_count": 0
}
```



**Params**  
| Param         | Description     | Required |
| ------------- |-------------|-------------|
| SOURCE_ID     | Id of Source to update | Yes |
| tag     | Value to use when querying source    | Yes |

