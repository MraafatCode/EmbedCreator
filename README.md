### HTML Embed Creator Package For Laravel
##### Laravel package to create HTML embed code using URL only
##### Supports Facebook, Youtube, Instagram, Twitter, Vimeo and Dailymotion

#### Installing.
###### Via Composer
```shell
composer require mraafatcode/embedcreator
```
##### After you have installed Package, open your Laravel config file config/app.php and add the following lines.

##### In the $providers array add the service providers for this package.
```php
MraafatCode\EmbedCreator\Providers\EmbedCreatorProvider::class
```
##### Add the facade of this package to the $aliases array.
```php
'EmbedCreator' => MraafatCode\EmbedCreator\EmbedCreator::class,
```
#### How to use it?
By use class `EmbedCreator` and pass url to `url()` then pass `maxWidth()` in pixels(px) then embed type function at end use `get()`.
#### Embed type functions 
`youtube()`
`facebook()`
`instagram()`
`twitter()`
`vimeo()`
`dailymotion()`
#### Note! 
##### `You can create embed without set the max width so the code will run with default width.`
#### Examples
```php
// $url = "VIDEO_URL"
$youtuebEmbed = EmbedCreator::url($url)->maxWidth(560)->youtube()->get();
// $url = "VIDEO_URL"
$VimeoEmbed = EmbedCreator::url($url)->maxWidth(600)->vimeo()->get();
// $url = "VIDEO_URL"
$dailymotionEmbed = EmbedCreator::url($url)->maxWidth(600)->dailymotion()->get();
// $url = "TWEET_URL"
$twitterEmbed = EmbedCreator::url($url)->maxWidth(450)->twitter()->get();
// $url = "VIDEO_OR_IMAGE_URL"
$instagramEmbed = EmbedCreator::url($url)->instagram()->get();
// $url = "POST_URL"
$facebookEmbed = EmbedCreator::url($url)->facebook()->get();
```

