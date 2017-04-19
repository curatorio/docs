
Removes a Feed.

**Note:** Deleting a feed will remove all associated sources and posts.

### DELETE /feeds/FEED_ID

**Request**

```http
DELETE /v1/feeds/FEED_ID
```

**Response**

```json
{
   "success":true,
   "message":"Feed deleted"
}
```


**Params**  
| Param         | Description     | Required |
| ------------- |-------------|-------------|
| FEED_ID     | Id of Feed to delete | Yes |
