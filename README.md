# AvoTickerNews

AvoTickerNews is a lightweight WordPress plugin that displays recent blog posts in a scrolling news ticker.

## Features
- Automatically fetches and displays the latest blog posts.
- Smooth scrolling animation.
- Customizable styles and layout.
- Shortcode support for easy placement: `[blog_post_ticker]`
- Responsive design for all devices.

## Installation
1. Download and extract the `avo-ticker-news.zip` file.
2. Upload the `avo-ticker-news` folder to the `/wp-content/plugins/` directory.
3. Activate the plugin through the "Plugins" menu in WordPress.

## Usage
1. Use the shortcode `[blog_post_ticker]` in any post, page, or widget to display the ticker.
2. Customize the ticker's styling by modifying the `style.css` file in the `assets` folder.

## Customization
To modify the ticker settings, edit the `avo-ticker-news.php` file:
- Change the number of displayed posts by modifying `'posts_per_page' => 5`.
- Adjust animation speed in the `@keyframes ticker-scroll` CSS rule.

## Changelog
### v1.0
- Initial release with basic functionality.

## License
This plugin is licensed under the GPL3 License.

## Author
Developed by **Joseph Brzezowski** - [AvocadoWeb](https://avocadoweb.net)

