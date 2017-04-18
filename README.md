# jsonKeywords
Plugin for Open Journal Systems 2.4.x. Activates autocompletion in keywords metadata fields and uses an ajax call for the source.  

The plugin is hard coded to use the Finnish Finto vocabulary API http://api.finto.fi/

However, the code can be easily modified to use any other similar REST API by editing the jsonKeywordsHeader.tpl file. 
Check especially url, query, label and value if using with another API.

This plugin requires jQuery, jQuery UI and jQuery UI tag-it plugin (https://github.com/aehlke/tag-it). All of these are loaded by default in OJS.

The plugin now uses the tagSource option with tag-it which is deprecated. It should use autocomplete instead, but I could not get it to work with that option.



