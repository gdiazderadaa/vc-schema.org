# vc-schema.org

Visual Composer for Wordpress is a really nice plugin to make beautiful layouts in a very visual manner. However, it doesn't allow the user to add attributes to the content blocks, which are replaced by ```<div>`` tags when the html is generated. 

This lack makes impossible to follow structured data best practices, defined by schema.org:
"Schema.org is a collaborative, community activity with a mission to create, maintain, and promote schemas for structured data on the Internet, on web pages, in email messages, and beyond."

Using vc-schema.org extension it is possible to add schema.org's microdata attributes to the following Visual Composer's containers blocks: Row, Column and Text Block, which enables search engines to understand what the content is about, displaying the proper info in search results.

In addition to the extra attributes for the existing content blocks, two new shortcodes are available in Visual Composer: Schema.org Meta tag and Schema.org Link tag which makes easier lay out complex markups and object data structures.


## Installation steps

1. Download the files to your curren Wordpress theme's folder (e.g: wp-content/themes/mytheme/)
2. Edit your functions.php (e.g: wp-content/themes/mytheme/functions.php) and add this line at the end of the file
```
require_once('vc-schema.org.php');
```

## Using vc-schema.org

### Schema.org Meta Tag

Within the Visual Composer Add Element popup, click "Schema.org Meta Tag". You will be prompted to fill in the object property (itemprop) and its value (content). Once entered just click "Save changes" and the metatag will be added.


### Schema.org Link Tag

Within the Visual Composer Add Element popup, click "Schema.org Link Tag". You will be prompted to fill in the object property (itemprop) and its value (href). Once entered just click "Save changes" and the metatag will be added.


### Content block new attributes

Add or edit a content block (either row, column or text block) as you are used to do it and click the brand new tab "Schema.org" that will appear. Fill in the desired attributes and click "Save changes" to finish.


## License
vc-schema.org is released under the GNU License. See the bundled [LICENSE](LICENSE)
for details.
