

Creates a Feed

## POST /feeds

**Request**

```http
POST /v1/feeds

{
    "name": "My feed"
}
```

**Response**

```json
{ 
    "id": "315181d5-4f15-40bc-b2a0-0dd196caa13a",
    "public_key": "0b3057fb-80c3-4c0f-8af8-590274dbfbd0",
    "moderation": "post",
    "name": "My feed",
    "colour_body_bg": "#efefef",
    "colour_body_text": "#707070",
    "colour_header_bg": "#efefef",
    "colour_header_text": "#2B2B2B"
}
```

**Params**

| Param           | Description                | Required   |
| ---------         |---------                 |---------      |
| name         | Internal name of the Feed     | Yes       |

