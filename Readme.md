# TYPO3 extension "divider2tabsperuser"#

This extension makes it possible to define the setting divider2tabs via TsConfig.
This is especially useful if you have got editors who see very few fields and you don't wanna to split the fields up in different tabs.
It is also helpful for tables inside relations to skip the tabs there.

## Requirements ##

- TYPO3 CMS 6.x (only tested in 6.2 but should work since 6.0)

## How to use ##

* Install the extension.
* Define the settings by using TsConfig. Basically there are 2 options:

### Global configuration ###

Use ```divider2tabs.global = 0``` in Page TsConfig to disable divider2tabs for all tables or the value 1 for global enabling.

Use ```divider2tabs.<tableName> = 0``` in Page TsConfig to disable divider2tabs for the given table name.

**Using UserTsConfig**

If you want to use the UserTsConfig to make the setting on a userbase, use the prefix ```page.```.
For tt_content would this be then ```page.divider2tabs.tt_content = 0```.
