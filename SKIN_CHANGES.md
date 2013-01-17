# Skin Changes in Nova 2.5

## Bootstrap 2

### Tabs

### Tooltips

### Popovers

## Include Files

Nova has always had special include files to ensure that each section template pulls in the right elements. The original include files still exist for backwards compatability, but there are several new files that can be used to conform to the new skinning changes.

_global/main_head.php_

This new file includes all of the style and script calls that are necessary to be included in the HEAD of your template. We've split the include files into seperate head and foot files for performance reasons. The most performant way to build web applications to hold off on doing any script loading until the end of the document.

You can use this file by simply requiring the file in your template's HEAD:

`<?php include_once MODFOLDER.'/assets/global/main_head.php';?>`

_global/main_foot.php_

This new file includes all of the style and script calls that are necessary to be included at the end of your template. We've split the include files into seperate head and foot files for performance reasons. The most performant way to build web applications to hold off on doing any script loading until the end of the document.

You can use this file by simply requiring the file at the end of your template's BODY tag followed by any of your template-wide scripts:

`<?php include_once MODFOLDER.'/assets/global/main_foot.php';?>`

_include_head_main_bs2.php_

This new file includes both the head and foot files but provides only a single file that needs to be included instead of two.