Simple Debug Plugin for Elgg
============================

This is a very simple elgg debug tool, which displays some basic, but useful debug information.

What this plugin does
---------------------
Simply, if $CONFIG->debug == true, it appends an HTML comment to the page shell containing some handing debug information (including, the page owner entity, logged in user id, the contents of the session etc).

Nothing more complicated than that.

It goes without saying that this is a huge security risk and should never be enabled on a plugin site.

See
---
 * Author: Marcus Povey <http://www.marcus-povey.co.uk>
