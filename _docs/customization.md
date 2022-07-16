---
label: "Customizing your Site"
priority: 25
category: "Digging Deeper"
---

# Customizing your Site

## Introduction

Hyde favours <a href="https://en.wikipedia.org/wiki/Convention_over_configuration">"Convention over Configuration"</a>
and thus comes preconfigured with sensible defaults. However, Hyde also strives to be modular and endlessly customizable hackable if you need it. This page guides you through the endless options available!


## Main Configuration File
The main configuration file is in `config/hyde.php`. The [config file](https://github.com/hydephp/hyde/blob/master/config/hyde.php) is fully documented, so I recommend you take a look to see all the options.

In this config file, you can customize the site name, what modules to enable, and programmatically customize the navigation menu and documentation sidebar. 

Here are a few examples of the config options.

### Modules
With a concept directly inspired by [Laravel Jetstream](https://jetstream.laravel.com/), this setting allows you to toggle various modules.
```php
// torchlight! {"lineNumbers": false}
'features' => [
    Features::blogPosts(),
    Features::bladePages(),
    Features::markdownPages(),
    // Features::documentationPages(),
],
```

### Site URL Configuration


Hyde offers a few options to configure URLs and links for compiled files. Here is an overview.

#### Site URL

If you want, you can set your site's URL in the Hyde config, or in the .env file.

The URL will then be used in meta tags to create permalinks.
If you are serving your site from a subdirectory, you will
need to include that in the path without a trailing slash.


```php
// Default
'site_url' => env('SITE_URL', null),

// Examples
'site_url' => env('https://example.org'),
'site_url' => env('https://example.org/blog'),
```

#### Pretty URLs (Links that do not end in .html)

Introduced in v0.25.0, you can now enable "pretty URLs". When the setting
is enabled, generated links in the compiled HTML site are without the
`.html` extension. Since this breaks local browsing you can leave
the setting disabled, and instead add the `--pretty-urls` flag
when running the `php hyde build` command for deployment.


```php
'prettyUrls' => false, // Default is false
```

> Note that this can cause issues when you are serving your site from a subdirectory. See [#228](https://github.com/hydephp/develop/issues/228)

#### Generate sitemap.xml

When enabled, a sitemap.xml will automatically be generated when you compile your static site.
Note that this requires that a site_url is set!

```php // config/hyde.php
'generateSitemap' => true, // Default is true
```

#### RSS feed generation

When enabled, an RSS feed with your Markdown blog posts will be generated when you compile your static site.
Note that this requires that a site_url is set!

```php // config/hyde.php
'generateRssFeed' => true, // Default is true
```

You can customize the output filename using the following:

```php // config/hyde.php
'rssFilename' => 'feed.rss', // Default is feed.xml
```

You can set the RSS channel description using the following:

```php // config/hyde.php
'rssDescription' => 'A collection of articles and tutorials from my blog', // Example
```

If an rssDescription is not set one is created by appending "RSS Feed" to your site name.


### Authors
Hyde has support for adding authors in front matter, for example to
automatically add a link to your website or social media profiles.
However, it's tedious to have to add those to each and every
post you make, and keeping them updated is even harder.

You can predefine authors in the Hyde config.
When writing posts, just specify the username in the front matter,
and the rest of the data will be pulled from a matching entry.

#### Example
// torchlight! {"lineNumbers": false}
```php
'authors' => [
    Author::create(
        username: 'mr_hyde', // Required username
        name: 'Mr. Hyde', // Optional display name
        website: 'https://hydephp.com' // Optional website URL
    ),
],
```

This is equivalent to the following front matter:
```yaml
author:
    username: mr_hyde
    name: Mr. Hyde
    website: https://hydephp.com
```

But you only have to specify the username:
```yaml
author: mr_hyde
```

### Footer
The footer can be customized using Markdown, and even disabled completely.

```php
// torchlight! {"lineNumbers": false}
'footer' => [
  'enabled' => true,
  'markdown' => 'Site built with [HydePHP](https://github.com/hydephp/hyde).'
],
```

### Navigation Menu & Sidebar
One of my (the author's) favourite features with Hyde is its automatic navigation menu and documentation sidebar generator.

#### How it works:
The sidebar works by creating a list of all the documentation pages.

The navigation menu is a bit more sophisticated, it adds all the top-level Blade and Markdown pages. It also adds an automatic link to the docs if there is an `index.md` in the `_docs` directory.

#### Reordering Sidebar Items
Sadly, Hyde is not intelligent enough to determine what order items should be in (blame Dr Jekyll for this), so you will probably want to set a custom order.

Reordering items in the documentation sidebar is as easy as can be. In the hyde config, there is an array just for this. When the sidebar is generated it looks through this config array. If a slug is found here it will get priority according to its position in the list. If a page does not exist in the list they get priority 999, which puts them last.

Let's see an example:
```php
// torchlight! {"lineNumbers": false}
// This is the default values in the config. It puts the readme.md first in order.
'documentationPageOrder' => [
    'readme', // This is the first entry, so it gets the priority 0
    'installation', // This gets priority 1
    'getting-started', // And this gets priority 2
    // Any other pages not listed will get priority 999 
]
```


#### Reordering Navigation Menu Items

Hyde makes an effort to organize the menu items in a sensible way. Putting your most important pages first. This of course may not always be how you want, so it's easy to reorder the menu items. Simply override the `navigation.order` array in the Hyde config. The priorities set will determine the order of the menu items. Lower values are higher in the menu. Any pages not listed will get priority 999.

```php
// filepath config/hyde.php
'navigation' => [
    'order' => [
        'index' => 0, // _pages/index.md (or .blade.php)
        'posts' => 10, // _pages/posts.md (or .blade.php)
        'docs' => 100, // _docs/index.md
    ]
]
```

You can also set the priority of a page directly in the front matter. This will override any dynamically infered or config defined priority. While this is useful for one-offs, it can make it harder to reorder items later on. It's up to you which method you prefer to use.

```markdown
---
navigation:
    priority: 10
---
```

Note that since Blade pages do not support front matter, this will only work for Markdown pages.

#### Adding Custom Navigation Menu Links

You can easily add custom navigation menu links similar how we add Authors. Simply add a `NavItem` model to the `navigation.custom` array. 

When linking to an external site, you should use the `NavItem::toLink()` method facade. The first two arguments are the destination and label, both required. Third argument is the priority, which is optional.

```php
// filepath config/hyde.php
'navigation' => [
    'custom' => [
        NavItem::toLink('https://github.com/hydephp/hyde', 'GitHub', 200),
    ]
]
```

Simplified, this will then be rendered as follows:

```html
<a href="https://github.com/hydephp/hyde">GitHub</a>
```


#### Excluding Items (Blacklist)

Sometimes, especially if you have a lot of pages, you may want to prevent links from showing up in the main navigation menu. To remove items from being automatically added, simply add the slug to the blacklist. As you can see, the `404` page has already been filled in for you. Note that we don't specify the page type, since only top level pages are added to the navigation menu.

```php
'navigation' => [
    'exclude' => [
        '404'
    ]
]
```

You can also specify that a page should be excluded by setting the page front matter. Note that since Blade pages do not support front matter, this will only work for Markdown pages.

```markdown
---
navigation:
    hidden: true
---
```

#### Changing the menu item labels

Hyde makes a few attempts to find a suitable label for the navigation menu items to automatically create helpful titles. You can override the title using the `navigation.title` front matter property.

From the Hyde config you can also override the title of the documentation label and home page link using the following options:
    
```php
// filepath config/hyde.php
'navigation' => [
    'labels' => [
        'docs' => 'Documentation',
        'index' => 'Start',
    ]
]
```

## Blade Views
Hyde uses the Laravel templating system called Blade. Most parts have been extracted into components to be customized easily.

> Before editing Blade views you should familiarize yourself with how they work in the official documentation https://laravel.com/docs/9.x/blade.

To edit the default component you need to publish them first using the `hyde publish:views` command.

The files will then be available in the `resources/views/vendor/hyde` directory.

## Frontend Styles
Hyde is designed to not only serve as a framework but a whole starter kit and comes with a Tailwind starter template for you to get up and running quickly. If you want to customize these, you are free to do so. Please see the [Managing Assets](managing-assets.html) page to learn more.


## CommonMark environment

Hyde uses [League CommonMark](https://commonmark.thephpleague.com/) for converting Markdown into HTML.

Hyde ships with the GitHub Flavored Markdown extension, and 
the Torchlight extension is enabled automatically when needed.

You can add extra CommonMark extensions, or change the default ones, in the `config/markdown.php` file.

```php
'extensions' => [
	\League\CommonMark\Extension\GithubFlavoredMarkdownExtension::class,
	\League\CommonMark\Extension\Attributes\AttributesExtension::class,
	\League\CommonMark\Extension\DisallowedRawHtml\DisallowedRawHtmlExtension::class,
],
```

In the same file you can also change the config to be passed to the CommonMark environment.

```php
'config' => [
	'disallowed_raw_html' => [
		'disallowed_tags' => [],
	],
],
```
