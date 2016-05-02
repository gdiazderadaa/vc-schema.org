# vc-schema.org

Visual Composer for Wordpress is a really nice plugin to make beautiful layouts in a very visual manner. However, it doesn't allow the user to add attributes to the content blocks, which are replaced by ``<div>`` tags when the html is generated. 

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

1. Open a page for edition

![Edit page with VC](https://github.com/username/repository/vc-schema.org/master/img/page-edit.png "Edit page with VC")

2. Click on the **+** symbol as you would do to create a new element. The Visual Composer Add Element popup is shown:

![Add new content to page](https://github.com/username/repository/vc-schema.org/master/img/add-new-content.png "Add new content to page")

3. Search for **Schema.org Meta Tag** element (it has the VC icon) and click on it. The properties window is displayed:

![vc-chema.org Meta Tag properties](https://github.com/username/repository/vc-schema.org/master/img/meta-tag.png "vc-chema.org Meta Tag properties")

4. Fill in the **itemprop** and **content** attributes and click **Save changes**.


### Schema.org Link Tag

1. Open a page for edition

![Edit page with VC](https://github.com/username/repository/vc-schema.org/master/img/page-edit.png "Edit page with VC")

2. Click on the **+** symbol as you would do to create a new element. The Visual Composer Add Element popup is shown:

![Add new content to page](https://github.com/username/repository/vc-schema.org/master/img/add-new-content.png "Add new content to page")

3. Search for **Schema.org Link Tag** element (it has the VC icon) and click on it. The properties window is displayed:

![vc-chema.org Link Tag properties](https://github.com/username/repository/vc-schema.org/master/img/link-tag.png "vc-chema.org Link Tag properties")

4. Fill in the **itemprop** and **href** attributes and click **Save changes**.


### Content block new attributes

1. Open a page for edition

![Edit page with VC](https://github.com/username/repository/vc-schema.org/master/img/page-edit.png "Edit page with VC")

2. Add or edit a content block (either row, column or text block) as you are used to do it and click the brand new tab **Schema.or** that will appear:

![VC row settings](https://github.com/username/repository/vc-schema.org/master/img/row-settings.png "VC row settings")

![VC column settings](https://github.com/username/repository/vc-schema.org/master/img/column-settings.png "VC column settings")

![VC text block settings](https://github.com/username/repository/vc-schema.org/master/img/text-block-settings.png "VC text block settings")

3. Fill in the desired attributes and click **Save changes** to finish.

## License
vc-schema.org is released under the GNU License. See the bundled [LICENSE](LICENSE)
for details.
