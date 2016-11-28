This endpoint lists all sources.

### GET /sources

**Request**

```http
GET /v1/sources
```

**Response**

```json
[
    {
        "id": "d7de2fb2-a272-4c75-9e0a-ac9e89aee2b3",
        "feed_id": "660b923a-a6e7-4540-bd03-7e08fd006e0d",
        "source_type": 4,
        "tag": "curator_io",
        "status": 1,
        "initialised": 1,
        "error_count": 0,
        "feed": {
            "id": "660b923a-a6e7-4540-bd03-7e08fd006e0d",
            "moderation": "post",
            "name": "Default",
            "colour_body_bg": "#efefef",
            "colour_body_text": "#707070",
            "colour_header_bg": "#efefef",
            "colour_header_text": "#2B2B2B",
            "public_key": "adfdad0b-88ea-4660-8fc5-6ab02741"
        }
    }
]
```



**Params**  
| Param        | Description     | Required |
| ------------- |-------------|-------------|
| feed_id      | Show sources for a particular Feed    | No |
