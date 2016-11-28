
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

-----

#### Source Types  
 
| source_type   | Description     |  Tag format |
| ------------- |-------------    | -------     |
| 1             | Twitter tag     | hashtag     |
| 2             | Instagram tag   | hashtag     |
| 3             | Twitter user    | username    |
| 4             | Instagram user  | username    |
| 5             | Facebook page   | url part    |
| 6             | Vine tag        | hashtag     |
| 7             | Pinterest user  | username    |
| 8             | Google+ tag     | username    |
| 9             | Flickr tag      | hashtag     |
| 10            | Youtube tag     | hashtag     |
| 11            | Tumblr tag      | hashtag     |
| 12            | Google+ user    | username    |
| 13            | Youtube channel | username/channel id |
| 14            | Tumblr user     | username    |
| 15            | Flickr user     | username    |
| 16            | Rss             | url         |
| 17            | LinkedIn user   | username    |
| 18            | LinkedIn page   | company id  |
| 19            | Vine user       |  username   |
| 20            | Twitter user mention   |  username |
| 21            | Twitter geo-location   | lat,long,distance |
| 22            | Instagram geo-location |  lat,long,distance |
| 23            | Instrgram location     | Facebook Place ID
| 24            | Facebook visitor posts   |  url part    |


---

**Tag format**

`hashtag` a string keyword without the `#` usually does not include spaces or none url  
`username` a unique string identifier of the a user on the social network 
`url part` the last part of a url identifying the source
`channel id` unique string id representing a YouTube Channel
`company id` unique string id representing a Linked In Company
`lat,long,distance` a location in the format latitude, longitude and radial distance (in miles) 

---

#### Source description

**1 - Twitter Tag**  - pulls Twitter posts based on a hashtag. `tag` should be Twitter hashtag without the `#` .

**2 - Instagram Tag**  - pulls Instgram posts based on a hashtag. `tag` should be Instgram hashtag without the `#`.
 
**3 - Twitter user**  - pulls Twitter posts from a users public timeline. `tag` should be the Twitter username without the `@`.
 
**4 - Instagram user**  - pulls Instgram posts from a users public timeline. `tag` should be the Instgram username without the `@`.
 
**5 - Facebook page**  - pulls posts from a Facebook page. `tag` should be the last part of the Facebook page's url.

**6 - Vine Tag**  - pulls Vine posts based on a hashtag. `tag` should be Vine hashtag without the `#`.
 
**7 - Pinterest user**  - pulls Pinterest posts from a users public timeline. `tag` should be the Pinterest username without the `@`.

**8 - Google+ Tag**  - pulls Google+ posts based on a hashtag. `tag` should be Google+ hashtag without the `#`.

**9 - Flickr Tag**  - pulls Flickr+ posts based on a hashtag. `tag` should be Flickr hashtag without the `#`.

**10 - Youtube tag**  - pulls Youtube posts based on a hashtag. `tag` should be Youtube hashtag without the `#`.

**11- Tumblr tag**   - pulls Tumblr posts based on a hashtag. `tag` should be Google+ Tumblr without the `#`.

**12 - Google+ user**  - pulls Google+ posts from a users public timeline. `tag` should be the Google+ username without the `@`.

**13 - Youtube channel** - pulls Youtube posts from a users channel. `tag` should be the channel identifier (either a username or channel id).

**14 - Tumblr user**- pulls Tumblr posts from a users public timeline. `tag` should be the Tumblr username without the `@`.   

**15 - Flickr user**  - pulls Flickr posts from a users public timeline. `tag` should be the Flickr username without the `@`. 

**16 - Rss** - pulls posts from a public RSS feed. `tag` should be the full URL to the feed.          

**17 - LinkedIn user**  - pulls LinkedIn posts from a users public timeline. `tag` should be the LinkedIn username without the `@`. 

**18 - LinkedIn page**   - pulls LinkedIn posts from a companies public timeline. `tag` should be the Company Id - this can be found as the last part of the URL to a company page. 

**19 - Vine user** - pulls Vine posts from a users public timeline. `tag` should be the Vine username without the `@`.      

**20 - Twitter user mention** - pulls Twitter posts that mention a specific username. `tag` should be the Twitter username without the `@`.  

**21 - Twitter geo-location** - pulls Twitter posts around a specific location. `tag` is a location in the format latitude, longitude and radial distance (in miles)  

**22 - Instagram geo-location** - pulls Instgram posts around a specific location. `tag` is a location in the format latitude, longitude and radial distance (in miles)   

**23 - Instrgram location**  - pulls Instgram posts around a specific location. `tag` is a Facebook Place ID that identifies the location tag      

**24 - Facebook visitor posts**  - pulls visitor posts from a Facebook page. `tag` should be the last part of the Facebook page's url.  

