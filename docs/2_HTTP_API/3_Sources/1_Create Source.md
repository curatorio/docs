
This end point creates a Source for a Feed.
 
When a source is created the platform will request the latest 20 posts from the source.

The example below creates a source that pulls in Instagram posts with the hashtag **#nofilter**.

### POST /sources

**Request**

```http
POST /v1/sources

{
    "feed_id": "660b923a-a6e7-4540-bd03-7e08fd006e0d"
    "source_id":2,
    "tag":"nofilter"
}
```

**Response**

```json
{
    "id": "b37d3706-7fbd-4af9-a989-e8d20a50e04e",
    "source_type": 2,
    "tag": "nofilter",
    "status": 1,
    "feed_id": "660b923a-a6e7-4540-bd03-7e08fd006e0d"
}

```


**Params**  
| Param        | Description     | Required     |
| ------------- |-------------    |-------------|
| feed_id      | Feed to assign source to    | Yes |
| source_id     | Source Type to to pull posts from. See Source Types below | Yes |
| tag     | Value to query source    | Yes |



**Source Types**  
| source_type   | Description     |
| ------------- |-------------    |
| 1             | Twitter Tag     |
| 2             | Instagram tag   |
| 3             | Twitter user    |
| 4             | Instagram user  |
| 5             | Facebook page   |
| 6             | Vine tag        |
| 7             | Pinterest user  |
| 8             | Google+ tag     |
| 9             | Flickr tag      |
| 10            | Youtube tag     |
| 11            | Tumblr tag      |
| 12            | Google+ user    |
| 13            | Youtube channel |
| 14            | Tumblr user     |
| 15            | Flickr user     |
| 16            | Rss             |
| 17            | LinkedIn User   |
| 18            | LinkedIn Page   |