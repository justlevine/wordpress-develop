<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with array will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 2,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/ajax-actions.php',
];
$ignoreErrors[] = [
	'message' => '#^Function edit_link\\(\\) never returns WP_Error so it can be removed from the return type\\.$#',
	'identifier' => 'return.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/bookmark.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always true\\.$#',
	'identifier' => 'booleanNot.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/class-custom-image-header.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between \'themezip\' and \'themezip\' will always evaluate to true\\.$#',
	'identifier' => 'identical.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/class-file-upload-upgrader.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always true\\.$#',
	'identifier' => 'booleanNot.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/class-language-pack-upgrader.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Post\\:\\:\\$post_type \\(string\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 3,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/class-walker-nav-menu-checklist.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Post\\:\\:\\$post_status \\(string\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/class-walker-nav-menu-edit.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_string\\(\\) with bool will always evaluate to false\\.$#',
	'identifier' => 'function.impossibleType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/class-wp-debug-data.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between Imagick and Imagick will always evaluate to true\\.$#',
	'identifier' => 'instanceof.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/class-wp-debug-data.php',
];
$ignoreErrors[] = [
	'message' => '#^Ternary operator condition is always false\\.$#',
	'identifier' => 'ternary.alwaysFalse',
	'count' => 2,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/class-wp-debug-data.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset mixed on array\\{\\} in empty\\(\\) does not exist\\.$#',
	'identifier' => 'empty.offset',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/class-wp-internal-pointers.php',
];
$ignoreErrors[] = [
	'message' => '#^Static method WP_Internal_Pointers\\:\\:print_js\\(\\) is unused\\.$#',
	'identifier' => 'method.unused',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/class-wp-internal-pointers.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'identifier' => 'deadCode.unreachable',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/class-wp-internal-pointers.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Screen\\:\\:\\$post_type \\(string\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/class-wp-screen.php',
];
$ignoreErrors[] = [
	'message' => '#^Right side of && is always true\\.$#',
	'identifier' => 'booleanAnd.rightAlwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/class-wp-site-health.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always true\\.$#',
	'identifier' => 'booleanNot.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/class-wp-upgrader.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \'ParagonIE_Sodium…\' and \'runtime_speed_test\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/file.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always true\\.$#',
	'identifier' => 'booleanNot.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/file.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_callable\\(\\) with \'exif_read_data\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/image.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_callable\\(\\) with \'iptcparse\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/image.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'created_timestamp\' on array\\{\\}\\|array\\{lossless\\?\\: mixed, bitrate\\?\\: int, bitrate_mode\\?\\: mixed, filesize\\?\\: int, mime_type\\?\\: mixed, length\\?\\: int, length_formatted\\?\\: mixed, width\\?\\: int, \\.\\.\\.\\} in empty\\(\\) does not exist\\.$#',
	'identifier' => 'empty.offset',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/media.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_numeric\\(\\) with float\\|int\\|numeric\\-string will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/plugin.php',
];
$ignoreErrors[] = [
	'message' => '#^Function _fix_attachment_links\\(\\) never returns WP_Error so it can be removed from the return type\\.$#',
	'identifier' => 'return.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/post.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Taxonomy\\:\\:\\$meta_box_sanitize_cb \\(callable\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/post.php',
];
$ignoreErrors[] = [
	'message' => '#^Function wp_create_category\\(\\) never returns WP_Error so it can be removed from the return type\\.$#',
	'identifier' => 'return.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/includes/taxonomy.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Site\\:\\:\\$domain \\(string\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/my-sites.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \\(float\\|int\\) on array\\<mixed\\> in isset\\(\\) always exists and is not nullable\\.$#',
	'identifier' => 'isset.offset',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/nav-menus.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between \'update\\-selected\' and mixed~\\(\'activate\'\\|\'activate\\-selected\'\\|\'deactivate\'\\|\'deactivate\\-selected\'\\|\'delete\\-selected\'\\|\'disable\\-auto\\-update\'\\|\'disable\\-auto\\-update\\-selected\'\\|\'enable\\-auto\\-update\'\\|\'enable\\-auto\\-update\\-selected\'\\|\'error_scrape\'\\|\'resume\'\\|\'update\\-selected\'\\) will always evaluate to false\\.$#',
	'identifier' => 'identical.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/plugins.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of && is always true\\.$#',
	'identifier' => 'booleanAnd.leftAlwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/themes.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of && is always false\\.$#',
	'identifier' => 'booleanAnd.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-admin/themes.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_wp_error\\(\\) with 0\\|0\\.0\\|\'\'\\|\'0\'\\|array\\{\\}\\|false\\|null will always evaluate to false\\.$#',
	'identifier' => 'function.impossibleType',
	'count' => 2,
	'path' => __DIR__ . '/../../../src/wp-admin/update.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Block_Type\\:\\:\\$editor_style_handles \\(array\\<string\\>\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/block-editor.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset 1 on array\\{list\\<string\\>, list\\<non\\-empty\\-string\\>\\} on left side of \\?\\? always exists and is not nullable\\.$#',
	'identifier' => 'nullCoalesce.offset',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/block-supports/block-style-variations.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of \\|\\| is always true\\.$#',
	'identifier' => 'booleanOr.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/block-supports/position.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between \'sticky\' and \'sticky\' will always evaluate to true\\.$#',
	'identifier' => 'identical.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/block-supports/position.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of && is always true\\.$#',
	'identifier' => 'booleanAnd.leftAlwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/block-template-utils.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between false and mixed will always evaluate to false\\.$#',
	'identifier' => 'identical.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/block-template-utils.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of && is always true\\.$#',
	'identifier' => 'booleanAnd.leftAlwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/canonical.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'identifier' => 'deadCode.unreachable',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/capabilities.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Block_Bindings_Registry\\:\\:\\$supported_blocks is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-block-bindings-registry.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Block_Processor\\:\\:\\$last_error \\(string\\|null\\) is never assigned string so it can be removed from the property type\\.$#',
	'identifier' => 'property.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-block-processor.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'identifier' => 'deadCode.unreachable',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-block-processor.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always true\\.$#',
	'identifier' => 'booleanNot.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-block-templates-registry.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always true\\.$#',
	'identifier' => 'booleanNot.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-block.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of \\|\\| is always true\\.$#',
	'identifier' => 'booleanOr.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-block.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'identifier' => 'deadCode.unreachable',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-block.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Customize_Control\\:\\:\\$active_callback \\(callable\\) in empty\\(\\) is not falsy\\.$#',
	'identifier' => 'empty.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-customize-control.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Customize_Control\\:\\:\\$settings \\(array\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-customize-control.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Customize_Manager\\:\\:\\$_changeset_post_id \\(int\\|false\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-customize-manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Customize_Manager\\:\\:\\$_changeset_uuid \\(string\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-customize-manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Customize_Manager\\:\\:\\$_post_values \\(array\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-customize-manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Customize_Manager\\:\\:\\$nav_menus \\(WP_Customize_Nav_Menus\\) in empty\\(\\) is not falsy\\.$#',
	'identifier' => 'empty.property',
	'count' => 4,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-customize-manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Customize_Manager\\:\\:\\$widgets \\(WP_Customize_Widgets\\) in empty\\(\\) is not falsy\\.$#',
	'identifier' => 'empty.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-customize-manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Right side of \\|\\| is always true\\.$#',
	'identifier' => 'booleanOr.rightAlwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-customize-manager.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Customize_Panel\\:\\:\\$active_callback \\(callable\\) in empty\\(\\) is not falsy\\.$#',
	'identifier' => 'empty.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-customize-panel.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Customize_Section\\:\\:\\$active_callback \\(callable\\) in empty\\(\\) is not falsy\\.$#',
	'identifier' => 'empty.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-customize-section.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Customize_Setting\\:\\:\\$_previewed_blog_id \\(int\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 2,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-customize-setting.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Customize_Widgets\\:\\:\\$selective_refreshable_widgets \\(array\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-customize-widgets.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Http_Cookie\\:\\:\\$domain \\(string\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-http-cookie.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Http_Cookie\\:\\:\\$name \\(string\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-http-cookie.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Http_Cookie\\:\\:\\$path \\(string\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-http-cookie.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Http_Cookie\\:\\:\\$port \\(int\\|string\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-http-cookie.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Http_Cookie\\:\\:\\$value \\(string\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-http-cookie.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of \\|\\| is always false\\.$#',
	'identifier' => 'booleanOr.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-http-cookie.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WP_Http\\:\\:_dispatch_request\\(\\) is unused\\.$#',
	'identifier' => 'method.unused',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-http.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \'Imagick\' and \'setIteratorIndex\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-image-editor-imagick.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_callable\\(\\) with \'exif_read_data\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-image-editor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Post\\:\\:\\$ID \\(int\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-query.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WP_Recovery_Mode_Cookie_Service\\:\\:recovery_mode_hash\\(\\) never returns false so it can be removed from the return type\\.$#',
	'identifier' => 'return.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-recovery-mode-cookie-service.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\!\\=\\= between null and int\\|string will always evaluate to true\\.$#',
	'identifier' => 'notIdentical.alwaysTrue',
	'count' => 2,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-rewrite.php',
];
$ignoreErrors[] = [
	'message' => '#^Property _WP_Dependency\\:\\:\\$translations_path \\(string\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-scripts.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_wp_error\\(\\) with array will always evaluate to false\\.$#',
	'identifier' => 'function.impossibleType',
	'count' => 2,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-tax-query.php',
];
$ignoreErrors[] = [
	'message' => '#^Comparison operation "\\<\\=" between 0 and int\\<0, max\\>\\|false is always true\\.$#',
	'identifier' => 'smallerOrEqual.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-theme-json.php',
];
$ignoreErrors[] = [
	'message' => '#^Static method WP_Theme\\:\\:_check_headers_property_has_correct_type\\(\\) is unused\\.$#',
	'identifier' => 'method.unused',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-theme.php',
];
$ignoreErrors[] = [
	'message' => '#^Static property WP_Theme\\:\\:\\$persistently_cache \\(bool\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-theme.php',
];
$ignoreErrors[] = [
	'message' => '#^Static property WP_User\\:\\:\\$back_compat_keys \\(array\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-user.php',
];
$ignoreErrors[] = [
	'message' => '#^Right side of && is always true\\.$#',
	'identifier' => 'booleanAnd.rightAlwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-walker.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Widget\\:\\:\\$alt_option_name \\(string\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp-widget.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between \'404\' and \'404\' will always evaluate to true\\.$#',
	'identifier' => 'identical.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wp.php',
];
$ignoreErrors[] = [
	'message' => '#^Property wpdb\\:\\:\\$base_prefix \\(string\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wpdb.php',
];
$ignoreErrors[] = [
	'message' => '#^Right side of && is always false\\.$#',
	'identifier' => 'booleanAnd.rightAlwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/class-wpdb.php',
];
$ignoreErrors[] = [
	'message' => '#^Function _wp_scan_utf8\\(\\) never assigns null to &\\$has_noncharacters so it can be removed from the by\\-ref type\\.$#',
	'identifier' => 'parameterByRef.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/compat-utf8.php',
];
$ignoreErrors[] = [
	'message' => '#^Function _wp_utf8_codepoint_span\\(\\) never assigns null to &\\$found_code_points so it can be removed from the by\\-ref type\\.$#',
	'identifier' => 'parameterByRef.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/compat-utf8.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between mixed and ResourceBundle will always evaluate to false\\.$#',
	'identifier' => 'instanceof.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/compat.php',
];
$ignoreErrors[] = [
	'message' => '#^Instanceof between mixed and SimpleXMLElement will always evaluate to false\\.$#',
	'identifier' => 'instanceof.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/compat.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Customize_Manager\\:\\:\\$nav_menus \\(WP_Customize_Nav_Menus\\) in empty\\(\\) is not falsy\\.$#',
	'identifier' => 'empty.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/customize/class-wp-customize-nav-menu-item-setting.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Customize_Manager\\:\\:\\$nav_menus \\(WP_Customize_Nav_Menus\\) in empty\\(\\) is not falsy\\.$#',
	'identifier' => 'empty.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/customize/class-wp-customize-nav-menu-setting.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Customize_Partial\\:\\:\\$render_callback \\(callable\\) in empty\\(\\) is not falsy\\.$#',
	'identifier' => 'empty.property',
	'count' => 2,
	'path' => __DIR__ . '/../../../src/wp-includes/customize/class-wp-customize-partial.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Customize_Partial\\:\\:\\$settings \\(array\\<string\\>\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/customize/class-wp-customize-partial.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function method_exists\\(\\) with \'SimplePie_Cache\' and \'register\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/feed.php',
];
$ignoreErrors[] = [
	'message' => '#^Comparison operation "\\>\\=" between int\\<2592000, 31535999\\> and 2592000 is always true\\.$#',
	'identifier' => 'greaterOrEqual.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/formatting.php',
];
$ignoreErrors[] = [
	'message' => '#^Comparison operation "\\>\\=" between int\\<31536000, max\\> and 31536000 is always true\\.$#',
	'identifier' => 'greaterOrEqual.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/formatting.php',
];
$ignoreErrors[] = [
	'message' => '#^Comparison operation "\\>\\=" between int\\<3600, 86399\\> and 3600 is always true\\.$#',
	'identifier' => 'greaterOrEqual.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/formatting.php',
];
$ignoreErrors[] = [
	'message' => '#^Comparison operation "\\>\\=" between int\\<60, 3599\\> and 60 is always true\\.$#',
	'identifier' => 'greaterOrEqual.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/formatting.php',
];
$ignoreErrors[] = [
	'message' => '#^Comparison operation "\\>\\=" between int\\<604800, 2591999\\> and 604800 is always true\\.$#',
	'identifier' => 'greaterOrEqual.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/formatting.php',
];
$ignoreErrors[] = [
	'message' => '#^Comparison operation "\\>\\=" between int\\<86400, 604799\\> and 86400 is always true\\.$#',
	'identifier' => 'greaterOrEqual.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/formatting.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset 0 on array\\{0\\: non\\-empty\\-string, non_cdata_followed_by_cdata\\: \'\', 1\\: \'\', 2\\: \'\', cdata\\: \'\', 3\\: \'\', 4\\: \'\', non_cdata\\: string, \\.\\.\\.\\}\\|array\\{0\\: non\\-empty\\-string, non_cdata_followed_by_cdata\\: string, 1\\: string, 2\\: string, cdata\\: non\\-falsy\\-string, 3\\: non\\-falsy\\-string, 4\\: non\\-falsy\\-string\\} in isset\\(\\) always exists and is not nullable\\.$#',
	'identifier' => 'isset.offset',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/formatting.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_callable\\(\\) with \'exif_imagetype\' will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/functions.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset int\\<1, max\\> on non\\-empty\\-list\\<array\\{continent\\: \'\'\\|\'Africa\'\\|\'America\'\\|\'Antarctica\'\\|\'Arctic\'\\|\'Asia\'\\|\'Atlantic\'\\|\'Australia\'\\|\'Europe\'\\|\'Indian\'\\|\'Pacific\', city\\: string, subcity\\: string, t_continent\\: mixed, t_city\\: mixed, t_subcity\\: mixed\\}\\> in isset\\(\\) always exists and is not nullable\\.$#',
	'identifier' => 'isset.offset',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/functions.php',
];
$ignoreErrors[] = [
	'message' => '#^Right side of && is always true\\.$#',
	'identifier' => 'booleanAnd.rightAlwaysTrue',
	'count' => 2,
	'path' => __DIR__ . '/../../../src/wp-includes/functions.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\!\\=\\= between \'Etc\' and \'Africa\'\\|\'America\'\\|\'Antarctica\'\\|\'Arctic\'\\|\'Asia\'\\|\'Atlantic\'\\|\'Australia\'\\|\'Europe\'\\|\'Indian\'\\|\'Pacific\' will always evaluate to true\\.$#',
	'identifier' => 'notIdentical.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/functions.php',
];
$ignoreErrors[] = [
	'message' => '#^Function single_cat_title\\(\\) never returns void so it can be removed from the return type\\.$#',
	'identifier' => 'return.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/general-template.php',
];
$ignoreErrors[] = [
	'message' => '#^Function single_tag_title\\(\\) never returns void so it can be removed from the return type\\.$#',
	'identifier' => 'return.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/general-template.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'identifier' => 'deadCode.unreachable',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/html-api/class-wp-html-doctype-info.php',
];
$ignoreErrors[] = [
	'message' => '#^If condition is always true\\.$#',
	'identifier' => 'if.alwaysTrue',
	'count' => 2,
	'path' => __DIR__ . '/../../../src/wp-includes/html-api/class-wp-html-processor.php',
];
$ignoreErrors[] = [
	'message' => '#^Left side of && is always true\\.$#',
	'identifier' => 'booleanAnd.leftAlwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/html-api/class-wp-html-processor.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'identifier' => 'deadCode.unreachable',
	'count' => 17,
	'path' => __DIR__ . '/../../../src/wp-includes/html-api/class-wp-html-processor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WP_HTML_Tag_Processor\\:\\:skip_rawtext\\(\\) is unused\\.$#',
	'identifier' => 'method.unused',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/html-api/class-wp-html-tag-processor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WP_HTML_Tag_Processor\\:\\:skip_script_data\\(\\) is unused\\.$#',
	'identifier' => 'method.unused',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/html-api/class-wp-html-tag-processor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_HTML_Tag_Processor\\:\\:\\$skip_newline_at \\(int\\|null\\) is never assigned int so it can be removed from the property type\\.$#',
	'identifier' => 'property.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/html-api/class-wp-html-tag-processor.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_HTML_Text_Replacement\\:\\:\\$text \\(string\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 2,
	'path' => __DIR__ . '/../../../src/wp-includes/html-api/class-wp-html-tag-processor.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of && is always true\\.$#',
	'identifier' => 'booleanAnd.alwaysTrue',
	'count' => 2,
	'path' => __DIR__ . '/../../../src/wp-includes/html-api/class-wp-html-tag-processor.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\!\\=\\= between \'STATE_COMPLETE\' and \'STATE_READY\' will always evaluate to true\\.$#',
	'identifier' => 'notIdentical.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/html-api/class-wp-html-tag-processor.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\!\\=\\= between \'STATE_INCOMPLETE…\' and \'STATE_READY\' will always evaluate to true\\.$#',
	'identifier' => 'notIdentical.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/html-api/class-wp-html-tag-processor.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\!\\=\\= between \'STATE_MATCHED_TAG\' and \'STATE_READY\' will always evaluate to true\\.$#',
	'identifier' => 'notIdentical.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/html-api/class-wp-html-tag-processor.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between \'STATE_INCOMPLETE…\' and \'STATE_READY\' will always evaluate to false\\.$#',
	'identifier' => 'identical.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/html-api/class-wp-html-tag-processor.php',
];
$ignoreErrors[] = [
	'message' => '#^Unreachable statement \\- code above always terminates\\.$#',
	'identifier' => 'deadCode.unreachable',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/html-api/class-wp-html-tag-processor.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WP_Interactivity_API\\:\\:data_wp_bind_processor\\(\\) is unused\\.$#',
	'identifier' => 'method.unused',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/interactivity-api/class-wp-interactivity-api.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WP_Interactivity_API\\:\\:data_wp_class_processor\\(\\) is unused\\.$#',
	'identifier' => 'method.unused',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/interactivity-api/class-wp-interactivity-api.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WP_Interactivity_API\\:\\:data_wp_context_processor\\(\\) is unused\\.$#',
	'identifier' => 'method.unused',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/interactivity-api/class-wp-interactivity-api.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WP_Interactivity_API\\:\\:data_wp_each_processor\\(\\) is unused\\.$#',
	'identifier' => 'method.unused',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/interactivity-api/class-wp-interactivity-api.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WP_Interactivity_API\\:\\:data_wp_interactive_processor\\(\\) is unused\\.$#',
	'identifier' => 'method.unused',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/interactivity-api/class-wp-interactivity-api.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WP_Interactivity_API\\:\\:data_wp_router_region_processor\\(\\) is unused\\.$#',
	'identifier' => 'method.unused',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/interactivity-api/class-wp-interactivity-api.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WP_Interactivity_API\\:\\:data_wp_style_processor\\(\\) is unused\\.$#',
	'identifier' => 'method.unused',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/interactivity-api/class-wp-interactivity-api.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WP_Interactivity_API\\:\\:data_wp_text_processor\\(\\) is unused\\.$#',
	'identifier' => 'method.unused',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/interactivity-api/class-wp-interactivity-api.php',
];
$ignoreErrors[] = [
	'message' => '#^Right side of && is always true\\.$#',
	'identifier' => 'booleanAnd.rightAlwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/l10n.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Post\\:\\:\\$filter \\(string\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 2,
	'path' => __DIR__ . '/../../../src/wp-includes/link-template.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Post\\:\\:\\$post_status \\(string\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/link-template.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_string\\(\\) with bool will always evaluate to false\\.$#',
	'identifier' => 'function.impossibleType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/load.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function wp_die\\(\\) with arguments non\\-falsy\\-string, mixed and array\\{exit\\: false, code\\: \'mysql_not_found\'\\} will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/load.php',
];
$ignoreErrors[] = [
	'message' => '#^Right side of && is always true\\.$#',
	'identifier' => 'booleanAnd.rightAlwaysTrue',
	'count' => 4,
	'path' => __DIR__ . '/../../../src/wp-includes/load.php',
];
$ignoreErrors[] = [
	'message' => '#^Function wp_imagecreatetruecolor\\(\\) never returns GdImage so it can be removed from the return type\\.$#',
	'identifier' => 'return.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/media.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset 2 on array\\{string, non\\-empty\\-string, non\\-empty\\-string\\} in isset\\(\\) always exists and is not nullable\\.$#',
	'identifier' => 'isset.offset',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/media.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with non\\-empty\\-array\\<mixed\\> will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/ms-functions.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Term\\:\\:\\$term_id \\(int\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 2,
	'path' => __DIR__ . '/../../../src/wp-includes/nav-menu.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\!\\=\\= between 0 and int\\<min, \\-1\\>\\|int\\<1, max\\> will always evaluate to true\\.$#',
	'identifier' => 'notIdentical.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/nav-menu.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\!\\=\\= between float\\|int\\|numeric\\-string and \'bottom\'\\|\'footer\'\\|\'header\'\\|\'main\'\\|\'menu\\-1\'\\|\'menu\\-2\'\\|\'navigation\'\\|\'primary\'\\|\'secondary\'\\|\'social\'\\|\'subsidiary\'\\|\'top\' will always evaluate to true\\.$#',
	'identifier' => 'notIdentical.alwaysTrue',
	'count' => 2,
	'path' => __DIR__ . '/../../../src/wp-includes/nav-menu.php',
];
$ignoreErrors[] = [
	'message' => '#^Negated boolean expression is always true\\.$#',
	'identifier' => 'booleanNot.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/option.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\!\\=\\= between false and int will always evaluate to true\\.$#',
	'identifier' => 'notIdentical.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/pluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\!\\=\\= between null and int will always evaluate to true\\.$#',
	'identifier' => 'notIdentical.alwaysTrue',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/pluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between 3000000000 and 2147483647 will always evaluate to false\\.$#',
	'identifier' => 'identical.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/pluggable.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Post\\:\\:\\$filter \\(string\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/post.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset mixed on array\\{\\} in isset\\(\\) does not exist\\.$#',
	'identifier' => 'isset.offset',
	'count' => 2,
	'path' => __DIR__ . '/../../../src/wp-includes/rest-api.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of && is always false\\.$#',
	'identifier' => 'booleanAnd.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/rest-api.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Post\\:\\:\\$post_name \\(string\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/rest-api/endpoints/class-wp-rest-font-families-controller.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Post\\:\\:\\$post_title \\(string\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/rest-api/endpoints/class-wp-rest-font-families-controller.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Post_Type\\:\\:\\$template \\(array\\<array\\>\\) on left side of \\?\\? is not nullable\\.$#',
	'identifier' => 'nullCoalesce.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/rest-api/endpoints/class-wp-rest-post-types-controller.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_REST_Template_Autosaves_Controller\\:\\:\\$parent_post_type is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/rest-api/endpoints/class-wp-rest-template-autosaves-controller.php',
];
$ignoreErrors[] = [
	'message' => '#^Strict comparison using \\=\\=\\= between false and mixed will always evaluate to false\\.$#',
	'identifier' => 'identical.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/rest-api/endpoints/class-wp-rest-users-controller.php',
];
$ignoreErrors[] = [
	'message' => '#^Function _set_preview\\(\\) never returns false so it can be removed from the return type\\.$#',
	'identifier' => 'return.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/revision.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WP_Query\\:\\:\\$max_num_pages \\(int\\) in isset\\(\\) is not nullable\\.$#',
	'identifier' => 'isset.property',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/sitemaps/providers/class-wp-sitemaps-posts.php',
];
$ignoreErrors[] = [
	'message' => '#^Function remove_theme_support\\(\\) never returns void so it can be removed from the return type\\.$#',
	'identifier' => 'return.unusedType',
	'count' => 1,
	'path' => __DIR__ . '/../../../src/wp-includes/theme.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
