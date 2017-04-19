# Curator.io Docs


### Live

[Curator.io/docs](http://curator.io/docs)

## Intro

This project uses the [daux.io](http://daux.io/) documentation generator to host markdown files found [here](https://github.com/curatorio/docs/tree/master/public/docs). 

### Requirements

- Webserver (Apache/Nginx etc) 
- PHP 
- Composer
- NPM (for frontend CSS build)
- Gulp (for frontend CSS build)

### Server setup

Point webserver at the `/public` folder  
In `/` run `composer install`

### Frontend dev setup

In `/src` run `npm install`
Then `gulp dev`

