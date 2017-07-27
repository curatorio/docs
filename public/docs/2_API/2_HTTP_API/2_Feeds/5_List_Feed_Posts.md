Get collection of Posts for a Feed

### GET /feeds/FEED_ID/posts

**Request**  
```http
GET /v1/feeds/FEED_ID/posts
```

**Response**  
- The response is a JSON object containing two variables:
  - postCount - the number of posts in the feed
  - posts - an array of Posts

```json
{
    "postCount": 1,
    "posts": [
        {
            "id": 460,
            "network_id": 2,
            "status": 1,
            "flagged": 0,
            "has_media": 0,
            "source_type": 4,
            "source_identifier": "599710470306835805_672103626",
            "source_created_at": "2013-11-29 07:44:40",
            "user_screen_name": "curator_io",
            "user_full_name": "Curator",
            "user_image": "https://igcdn-photos-d-a.akamaihd.net/hphotos-ak-xpf1/t51.2885-19/11349140_1632676937008587_1455132383_a.jpg",
            "text": "Deck the halls #Xmas #christmas #decorations #westfield",
            "image": "https://scontent.cdninstagram.com/t51.2885-15/e15/1171199_638781222826850_457932404_n.jpg?ig_cache_key=NTk5NzEwNDcwMzA2ODM1ODA1.2",
            "video": null,
            "url": "https://www.instagram.com/p/hSmX7OuK1d/",
            "userUrl": "",
            "thumbnail": "",
            "video_width": 0,
            "video_height": 0,
            "network_name": "Instagram"
        }
    ]
}
```


**Params**
  
| Param        | Description     |
|----|----|
| FEED_ID      | Feed API Key or Feed Public Key     |

**Optional Params**
  
| Param        | Description     |
|----|----|
| limit      | Limits the number of posts returned - defaults to 25, max is 100     |
| offset      | Page offset - used to paginate through the results     |

**Premium Params**

| Param        | Description     |
|----|----|
| network_id      | Filter by a specific [Network ID](../5_Network_IDs)     |
| source_type      | Filter by a specific [Source Type ID](../6_Source_Type_IDs)    |
| status      | Filter by specific Post status - 1=all active posts, 0=all disabled posts, all = all posts   |



