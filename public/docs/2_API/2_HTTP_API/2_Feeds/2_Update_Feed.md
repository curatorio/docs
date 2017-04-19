
Update a Feed

### POST /feeds/FEED_ID

**Request**

```http
POST /v1/feeds/FEED_ID

{ 
    "name": "Default",
    "moderation": "post",
    "colour_body_bg": "#efefef",
    "colour_body_text": "#707070",
    "colour_header_bg": "#efefef",
    "colour_header_text": "#2B2B2B",
}
```



**Response**

```json
{
    "id": "705da60d-4479-4696-b49b-29bca98d920d",
    "name": "Default",
    "moderation": "post",
    "colour_body_bg": "#efefef",
    "colour_body_text": "#707070",
    "colour_header_bg": "#efefef",
    "colour_header_text": "#2B2B2B",
    "public_key": "19c614db-c1d1-4111-af53-82f3765a"
}
```

**Params**

| Param              | Description           |
| -------------      |-------------            |
| FEED_ID            | Id of Feed to update     |
| name               | Name of feed - only displayed in the admin|
| moderation         | Moderation the feed will use - `post` or `pre` |
| colour_body_bg     | Body background colour to use for widget    |
| colour_body_text   | Body text color to use for widget         |
| colour_header_bg   | Header background colour to use for widget |
| colour_header_text | Header text colour to use for widget     |