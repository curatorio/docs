
Delete a source.

**Note:** Deleting a source will delete all the associated posts.

### DELETE /sources/SOURCE_ID

**Request**

```http
DELETE /v1/sources/SOURCE_ID
```

**Response**

```json
{
   "success":true,
   "message":"Source deleted"
}
```


**Params**  
| Param         | Description     | Required |
| ------------- |-------------|-------------|
| SOURCE_ID     | Id of Source to delete | Yes |
