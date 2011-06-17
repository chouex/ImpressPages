

ALTER TABLE `ip_content_element_to_modules` DROP `module_id` ,
DROP `instance_id` ,
DROP `group_key` ,
DROP `preview` ;

ALTER TABLE `ip_content_element_to_modules` CHANGE `module_key` `widget` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0'

RENAME TABLE `ip1.1.0`.`ip_content_element_to_modules` TO `ip1.1.0`.`ip_m_content_management_widget`

ALTER TABLE `ip_m_content_management_widget` ADD `layout` VARCHAR( 25 ) NOT NULL DEFAULT 'default'

ALTER TABLE `ip_m_content_management_widget` ADD `data` TEXT NOT NULL 

ALTER TABLE `ip_m_content_management_widget`
CHANGE `row_number` `rowNumber` INT( 11 ) NOT NULL DEFAULT '0',
CHANGE `element_id` `elementId` INT( 11 ) NOT NULL DEFAULT '0',
CHANGE `widget` `widgetName` VARCHAR( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0'


ALTER TABLE `ip_m_content_management_widget` CHANGE `widgetName` `widgetName` VARCHAR( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '0'


include migrate_integrate_widget_tables.php




DROP TABLE `ip_mc_misc_contact_form` ,
`ip_mc_misc_contact_form_field` ,
`ip_mc_misc_file` ,
`ip_mc_misc_html_code` ,
`ip_mc_misc_rich_text` ,
`ip_mc_misc_video` ,
`ip_mc_text_photos_faq` ,
`ip_mc_text_photos_logo_gallery` ,
`ip_mc_text_photos_logo_gallery_logo` ,
`ip_mc_text_photos_photo` ,
`ip_mc_text_photos_photo_gallery` ,
`ip_mc_text_photos_photo_gallery_photo` ,
`ip_mc_text_photos_separator` ,
`ip_mc_text_photos_table` ,
`ip_mc_text_photos_text` ,
`ip_mc_text_photos_text_photo` ,
`ip_mc_text_photos_text_title` ,
`ip_mc_text_photos_title` ;
