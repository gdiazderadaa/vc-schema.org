# vc-schema.org

Visual Composer for Wordpress is a really nice plugin to make beautiful layouts in a very visual manner. However, it doesn't allow the user to add attributes to the content blocks, which are replaced by ```<div>`` tags when the html is generated. 

This lack makes impossible to follow structured data best practices, defined by schema.org:
"Schema.org is a collaborative, community activity with a mission to create, maintain, and promote schemas for structured data on the Internet, on web pages, in email messages, and beyond."

Using vc-schema.org extension it is possible to add schema.org's attributes to the following Visual Composer's containers blocks: Row, Column and Text Block, which enables search engines to understand what the content is about, displaying the proper info in search results. 


## Installation steps

1. Download the files to your curren Wordpress theme's folder (e.g: wp-content/themes/mytheme/)
2. Edit your functions.php (e.g: wp-content/themes/mytheme/functions.php) and add this line at the end of the file
```
require_once('vc-schema.org.php');
```

## Using vc-schema.org

[Installation instructions](docs/getting-started.md)


## License
Yii2-user is released under the GNU License. See the bundled [LICENSE.md](LICENSE)
for details.
