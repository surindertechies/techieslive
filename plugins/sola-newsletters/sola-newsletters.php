<?php
/*
Plugin Name: Nifty Newsletters
Plugin URI: http://www.solaplugins.com
Description: Create beautiful email newsletters in a flash with Nifty Newsletters.
Version: 4.0.23
Author: SolaPlugins
Author URI: http://www.solaplugins.com
Text Domain: sola
Domain Path: /languages
*/

/**
 * 4.0.23 - 2019-11-12 - Medium Priority
 * Tested in WP 5.3 beta 
 * Enhancement: Improved UI/UX of the extensions page
 * Enhancement: Improved UI/UX of the newsletter preview page
 * Enhancement: Improved "Options" for when using the automatic content feature in editor
 * Enhancement: Updated repository images
 * New Feature: Added option to search through blog posts in editor
 * New Feature: Added Tooltips to editor for better ux
 * Bug Fix: Fixed a bug where the "Read More" link was not being translated
 *
 * 4.0.22 - 2019-09-18 - High priority
 * Enhancement: Improved UI/UX of the campaign editor  
 * Enhancement: Improved UI/UX of the feedback page
 * Enhancement: Improved UI/UX of theme selection page
 * Enhancement: Added a class to submit button in the shortcode
 * New feature: Added button to editor to open page previewer
 * New feature: Added Gutenberg Integration
 * New feature: Added List buttons if no lists have been created
 * New feature: Added Total Active Subscribers and Total Pending Subscribers
 * Bug Fix: Fixed a bug where when dragging in editor added additional padding
 * Bug Fix: Fixed a bug where an error was thrown when sending on localhost
 * Bug Fix: Fixed "Create a list" button not opening a new tab
 * Bug Fix: Fixed error in the stats section if you have no subscribers
 * Bug Fix: Fixed error when you click on "View in Browser"
 * Bug Fix: Fixed Gutenberg submit button text color error
 * 
 * 4.0.21 - 2018-11-09 - Low priority
 * Added data eraser functionality using WordPress hooks (GDPR)
 * Added data export functionality using WordPress hooks (GDPR)
 *
 * 4.0.20 - 2018-11-05 - Low priority
 * Tested in WP 5.0 Beta 2
 * Enhanced settings page user interface
 * Bug Fix: Fixed a bug that prevented the ability to edit a subscriber
 *
 * 4.0.19 - 2017-05-29 - Medium Priority
 * New Feature: You can now export a single list into a CSV file
 * Bug Fix: Fixed a bug that caused a database error when reactivating the plugin on an existing install
 * Enhancement: Selects a default theme when reaching the theme's page while creating a new campaign
 * Bug Fix: Fixed a bug that prevented the color pickers in the Newsletter editor to not open
 * Bug Fix: PHP errors fixed when trying to import subscribers
 * Enhancement: Changes made to feedback form when sending
 * Bug Fix: Javascript errors on the preview page fixed
 * Bug Fix: Fixed JS errors on the campaigns page when sending a new campaign
 *
 * 
 * 4.0.18 - 2017-04-03 - Medium priority
 * Fixed bugs that caused the 'Are you sure you want to do this?' when performing some actions
 * PHP Warnings fixed 
 * Replaced a deprecated function on the feedback page
 * 
 * 4.0.17 - 2017-02-24 - High priority
 * Further changes regarding security issues
 * 
 * 4.0.16 - 2017-02-21 - High Priority
 * Secuirty Improvements
 * Changed the way theme templates load images
 * Canged the way JS files load images (localized)
 *
 * 4.0.15 - 2017-02-17 - High Priority
 * PHPMailer Removed from the plugin
 * 
 * 4.0.14 - 2016-05-12 - Medium priority
 * Fixed a bug that was experienced on some servers that caused multiple emails to be sent to users when a previous email failed
 * New blank newsletter theme
 * Extended the read size of the error log for debugging purposes
 * 
 * 4.0.13 - 2016-04-13 - Low Priority
 * Tested on WordPress 4.5
 * Menu icon has been changed to an envelope
 * Fixed a bug that threw an error in the newsletter editor if a theme wasn't selected
 * Fixed a bug that wouldn't show the Options menu for Automatic posts
 * Slashes are now removed from the subject where necessary
 * A subscriber will now receive a notice if they are already subscribed to a list in the widget
 * 
 * 4.0.12 - 2016-01-07 - Low Priority
 * Promotion removed
 * Tested on WordPress 4.4
 * Styling conflict fixed in settings page
 * 
 * 4.0.11 - 2015-12-03
 * Added a scrollbar to newsletter editor side panel
 * Resolved minor styling issues in newsletter editor 
 *
 * 4.0.10 - 2015-10-20
 * New hooks added to settings page:
 *     sola_nl_main_settings_after
 *     sola_nl_email_settings_after
 *     sola_nl_signup_widget_settings_after
 *     sola_nl_social_links_after
 *     sola_nl_analytics_settings_after
 * Extensions Page added
 * 
 * 4.0.9 - 2015-09-22 - Low priority
 * Limited promotion
 * 
 * 4.0.8 - 2015-09-09 - Low Priority
 * Validation added to the subscription widget
 * Translations added:
 *  Dutch (Thank you Anton Prins)
 * 
 * 4.0.7 - 2015-06-25 - Medium priority
 * Bug fix in the newsletter editor
 * Name change (Sola Newsletters to Nifty Newsletters)
 * 
 * 4.0.6 - 2015-05-28 - Medium priority
 * New Feature: Added Shortcodes for subscriber first and last name
 * Improvement: Migrated from jqplot to Google Charts (Pro)
 * Bug Fix: Slashes stripped in emails when using an apostrophe
 * Bug Fix: French Translation file renamed 
 * 
 * 4.0.5 - 2015-04-13 - Low priority
 * Erroneous Debugging error being shown, Now fixed.
 * Changed character to UTF-8.
 * 
 * 4.0.4 - 2015-03-25 - Low priority
 * French translation fix
 * 
 * 4.0.3 - 2015-03-24 - Medium priority
 * Added support for Amazon SES (via the SMTP method)
 * New throttle setting allows you to specify the delay between each send via SMTP
 * Fixed a bug that caused the ajax send to not work correctly
 * Added 3 more newsletter themes
 * Added basic javascript validation to the newsletter signup widget to force a user to enter an e-mail address
 * Fixed issue in the newsletter signup widget, where when the same e-mail address was used for the signup it gave a database error
 * Removed the slashes from problematic textareas and textfields
 * Fixed Internet Explorer 8 issue where a user could not get passed the "Select Theme" page
 * Added javascript validation to the "Select theme" page, to force a user to select a theme before being able to continue. Also fixed the PHP back-end validation and warning for this
 * Added the ability to select multiple newsletter mailing lists to sign up for in the signup widget. If no list is chosen it defaults to the default mailing list
 * Added javascript to manipulate the DOM for the newsletter signup widget settings page when allowing a user to select mailing lists to subscribe to when using the signup widget
 * 
 * 4.0.2 - 2015-02-19 - Medium priority
 * Fixed the bug that stopped you from dragging your own images into the newsletter
 * Fixed the column width bug for a 4 column table in the newsletter editor
 * Fixed the editing bug when trying to edit the content of columns in a table
 * 
 * 4.0.1 - 2015-02-11 - Low priority
 * Scandir notices fixed when in the newsletter theme page
 * Added the ability to see all available newsletter themes
 * Bug fixes
 * Usability improvements on the theme page
 * 
 * 4.0.0 - 2015-02-06 - Medium priority
 * Major improvements to the newsletter editor
 *  You can now add tables to your newsletters (2 columns, 3 columns and 4 columns)
 *  Improved drag and drop functionality
 *  Image bug fixes (plugin no longer adds an image to a newsletter as width:100%, but rather max-width:100%)
 *  Fixed height issue for left sidebar in the newsletter editor
 *  Usability improvements in the newsletter editor
 * Theme functionality
 *  We have finally introduced newsletter theme/layout functionality
 *  You can now create your own layouts to sell on our website
 *  You can now acquire new themes by visiting the Nifty Newsletters website (solaplugins.com)
 * Other changes
 *  A Valentines Day newsletter theme is now available for purchase on our website
 *  Many bug fixes
 *
 * 3.0.6 - 2015-01-23 - Medium priority
 * The dragging of the social widget changed
 * APC cache warning removed
 * A person can now select the mailing list to subscribe to when subscribing
 *
 * 3.0.5 - 2015-01-21 - Medium priority
 * Additional bug fixes in the newsletter editor in conjunction with changes made in WordPress 4.1
 *
 * 3.0.4 - 2015-01-20 - Medium Priority
 * Newsletter editor bug fixes:
 * - Fixed bug that caused images to be dragged in incorrectly
 * - Fixed bug that caused image dividers to be dragged in incorrectly
 * - Fixed button bug in WP4.1
 *
 * 3.0.3
 * Fixed PHP notices
 * Added a CAN-SPAM Act compliance guide for businesses in the settings page
 *
 * 3.0.2
 * New Features:
 *  - You can now use your own custom HTML
 *  - You can now enable/disable link tracking globally
 *
 * Bug Fixes:
 *  - Lists would not show when creating new campaign after clicking certain automatic options.
 *
 * Improvements:
 *  - Update control implemented in Pro version
 *
 * 3.0.1
 * Improvements:
 * Links changed to new documentation (New Help Desk solaplugins.com/support-desk)
 *
 * Bug Fixes:
 * Could not create a campaign due to a missing column. Fixed when updating or installing new
 * Could not confirm your subscription when signing up
 * View In Browser Link stopped working in the preview mail
 *
 * 3.0
 * New Features:
 *  - You can now create automatic post notifications on an immediate, daily or weekly interval
 *  - You can now create auto-responders for when a user or subscriber is added to your site
 *  A new drag-and-drop 'Automatic Content' element has been added to the editor
 *  - Comprehensive Automatic Content options have been added
 *  - You can now change the View In Browser Text
 *
 * Improvements:
 *  - More strings are now translatable (Some were missing a text-domain)
 *
 * Bug Fixes:
 *  - Viewing subscribers by list issue fixed
 *  - Absolute URLS are now kept when editing an image within TinyMCE
 *
 * New Languages Added:
 *  - French (Thank you Katia from Creaweb again)
 *  - Russian (Thank you Alexey Arkhipenko)
 *
 *
 * v2.3
 * New features:
 * - You can now view the average newsletter open rate from all past campaigns
 * - You can now see the newsletter open rate for that specific campaign
 * - You can now view the total number of unique newsletter opens per campaign
 * - You can now see what newsletter links each subscriber clicked on
 * - You can now see which newsletter subscribers clicked on a specific link
 * - Version check of pro in basic
 * - Styles have version numbers
 * Improvements:
 * - Newsletter statistics
 * - Changed how newsletter styles are saved in db
 * Bug fixes:
 * - Tinymce click issue
 *
 */

if ( ! defined( 'ABSPATH' ) ) exit;

ob_start();
global $sola_nl_version;
global $sola_nl_p_version;
global $sola_nl_tblprfx;
global $sola_nl_subs_tbl;
global $sola_nl_list_tbl;
global $sola_nl_subs_list_tbl;
global $sola_nl_camp_tbl;
global $sola_nl_camp_list_tbl;
global $sola_nl_camp_subs_tbl;
global $sola_nl_success;
global $sola_nl_error;
global $sola_nl_style_table;
global $sola_nl_style_elements_table;
global $sola_nl_css_options_table;
global $sola_nl_link_tracking_table;
global $sola_nl_themes_table;
global $sola_nl_advanced_link_tracking_table;

global $sola_global_subid;
global $sola_global_campid;

define("SOLA_PLUGIN_NAME","Nifty Newsletters");

global $sola_nl_version;
global $sola_nl_version_string;
$sola_nl_version = "4.0.23";
$sola_nl_version_string = "";



global $wpdb;
$sola_nl_tblprfx = $wpdb->prefix."sola_nl_";
$sola_nl_subs_tbl = $sola_nl_tblprfx."subscribers";
$sola_nl_list_tbl =  $sola_nl_tblprfx."list";
$sola_nl_subs_list_tbl = $sola_nl_tblprfx."subscribers_list";
$sola_nl_camp_tbl = $sola_nl_tblprfx."campaigns";
$sola_nl_camp_list_tbl = $sola_nl_tblprfx."campaign_lists";
$sola_nl_camp_subs_tbl = $sola_nl_tblprfx."campaign_subscribers";
$sola_nl_style_table = $sola_nl_tblprfx."styles";
$sola_nl_style_elements_table = $sola_nl_tblprfx."style_elements";
$sola_nl_css_options_table = $sola_nl_tblprfx."css_options";
$sola_nl_link_tracking_table = $sola_nl_tblprfx."link_tracking";
$sola_nl_themes_table = $sola_nl_tblprfx."themes";
$sola_nl_advanced_link_tracking_table = $sola_nl_tblprfx."advanced_link_tracking";


$plugin_url = rtrim(plugin_dir_path(__FILE__), "/");

define("SITE_URL", get_bloginfo('url'));
define("THEME_URL", '');
define("PLUGIN_URL", $plugin_url);
define("PLUGIN_DIR", plugins_url().'/sola-newsletters');

include "modules/module_editor.php";
include "modules/module_sending.php";
include "modules/module_widget.php";
include "modules/module_activation.php";
include "modules/module_auto.php";
include "modules/module_subscribers.php";

include "includes/template_shortcode_replacer.php";

include "includes/blocks/gutenberg-block/index.php";

add_action('admin_bar_menu', 'sola_sending_mails_tool_bar_name', 998);
add_action('admin_bar_menu', 'sola_sending_mails_tool_bar', 999 );
add_action('admin_bar_menu', 'sola_sending_mails_tool_bar_pending', 1000);
add_action('admin_head','sola_nl_wp_head');
add_action('wp_enqueue_scripts', 'sola_nl_add_user_stylesheet');
add_action('admin_enqueue_scripts', 'sola_nl_add_admin_stylesheet');

add_action('user_register', 'sola_nl_on_registration');
add_action('publish_post', 'sola_nl_on_publish_post');
//add_action('add_meta_boxes', 'add_sola_nl_meta_box');
//add_action('save_post', 'sola_nl_save_meta_data');

add_action('init','sola_init');
add_action('init','add_my_error');

add_action('admin_menu', 'sola_nl_admin_menu');
register_activation_hook( __FILE__, 'sola_nl_activate' );
register_deactivation_hook( __FILE__, 'sola_nl_deactivate' );

//front end includes
add_action('wp_head', 'sola_nl_wp_js');
add_action('wp_head', 'sola_nl_wp_post_data');

add_filter( 'cron_schedules', 'sola_cron_add_minutely' );

add_action('wp_ajax_save_template', 'sola_nl_action_callback');
add_action('wp_ajax_preview_mail', 'sola_nl_action_callback');
add_action('wp_ajax_test_mail_2','sola_nl_action_callback');
add_action('wp_ajax_send_mail', 'sola_nl_action_callback');
add_action('wp_ajax_get_perc', 'sola_nl_action_callback');
add_action('wp_ajax_close_review', 'sola_nl_action_callback');
add_action('wp_ajax_force_send', 'sola_nl_action_callback');
add_action('wp_ajax_done_sending', 'sola_nl_action_callback');
add_action('wp_ajax_nopriv_sola_nl_sign_up_add_sub', 'sola_nl_action_callback');
add_action('wp_ajax_sola_nl_sign_up_add_sub', 'sola_nl_action_callback');
add_action('wp_ajax_sola_get_next_subs', 'sola_nl_action_callback');



// Shortcodes

add_action( 'sola_cron_send_hook', 'sola_cron_send' );

add_shortcode("confirm_link", "sola_nl_confirm_link");
add_shortcode("sub_name", "sola_nl_sub_name");
add_shortcode("unsubscribe_href", "sola_nl_unsubscribe_href");
add_shortcode("browser_view","sola_nl_view_browser");
add_shortcode("unsubscribe_text", "sola_nl_unsubscribe_text");
add_shortcode("browser_view_text", "sola_nl_view_browser_text");

add_shortcode('sola_nl_first_name', 'sola_nl_get_first_name');
add_shortcode('sola_nl_last_name', 'sola_nl_get_last_name');

add_shortcode('sola_nl_blog_name', 'sola_nl_get_blog_name');
add_shortcode('sola_nl_post_author', 'sola_nl_get_post_author');
add_shortcode('sola_nl_post_title', 'sola_nl_get_post_title');
add_shortcode('sola_nl_post_count', 'sola_nl_get_post_count');

function sola_nl_get_blog_name(){
    $blog_name = get_bloginfo('name');
    return $blog_name;
}
function sola_nl_get_post_author(){
    $args = array(
        'numberposts' => 1,
    );
    $recent_posts = wp_get_recent_posts( $args, ARRAY_A );

    $author_id = get_userdata(intval($recent_posts[0]['post_author']));
    $author_id = intval($author_id->data->ID);

    $author_name = get_the_author_meta('user_nicename', $author_id);

    return $author_name;

}
function sola_nl_get_post_title(){
    $args = array(
        'numberposts' => 1,
    );
    $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
//    var_dump($recent_posts);
    if($recent_posts){
        $post_title = $recent_posts[0]['post_title'];
    } else {
        $post_title = '';
    }
    return $post_title;
}
function sola_nl_get_post_count(){
    $num_posts = wp_count_posts();

    $post_count = $num_posts->publish;
    return $post_count;

}
// init actions for tracker, links and view in browser

add_action('init', 'sola_nl_init_post_processing');


function sola_init() {
    /* add a "once every minute" cron job for the wp_cron. */
    $plugin_dir = basename(dirname(__FILE__))."/languages/";
    load_plugin_textdomain( 'sola', false, $plugin_dir );



    $camp_id = sola_check_send_mail_time(3);
    $camp_id_2 = sola_check_if_currently_sending(3);
    if($camp_id){
        $_SESSION['camp_id'] = $camp_id;
        $_SESSION['no_send'] = false;
        //sola_ajax_mail_send($camp_id);
        if (isset($_GET['page']) && $_GET['page'] == 'sola-nl-menu' && !isset($_GET['action'])) {
            add_action('admin_print_scripts', 'sola_nl_send_js');
        }
    } else if($camp_id_2){
        $_SESSION['camp_id'] = $camp_id_2;
        $_SESSION['no_send'] = true;
        if (isset($_GET['page']) && $_GET['page'] == 'sola-nl-menu' && !isset($_GET['action'])) {
            add_action('admin_print_scripts', 'sola_nl_send_js');
        }
    }


    sola_nl_update_control();

}

add_action('init','sola_nl_update_control');

function sola_nl_update_control() {
    global $sola_nl_version;
    if(get_option('sola_nl_first_time') === false){
        if (get_option("sola_nl_version") != $sola_nl_version) {
            sola_nl_handle_db();
            if (get_option("sola_nl_confirm_subject") == "") {
                  $confirmation_subject = __("Thank You For Subscribing","sola");
                  add_option("sola_nl_confirm_subject", $confirmation_subject);
            }
            if (get_option("sola_nl_confirm_thank_you") == "") {
                  $confirmation_thank_you = __("Thank You for signing up. You will receive a confirmation mail shortly.", 'sola');
                  add_option("sola_nl_confirm_thank_you", $confirmation_thank_you);
            }
            if (get_option("sola_nl_browser_text") == "") {
                  add_option("sola_nl_browser_text", __("Not Displaying? View In Browser", "sola"));
            }
            /* Link tracking check */
            if(get_option('sola_nl_enable_link_tracking') == ""){
                add_option('sola_nl_enable_link_tracking', 1);
            }

            if(get_option('sola_nl_use_list') == ""){
                add_option('sola_nl_use_list', 0);
            }
            if (get_option("sola_nl_send_delay") == "") {
                  add_option("sola_nl_send_delay", 1000000);
            }

            update_option("sola_nl_version",$sola_nl_version);

            /* Version 3.0 updates */
            global $wpdb;
            global $sola_nl_camp_tbl;

            /* Type Column Check */
            $sql = " SHOW COLUMNS FROM $sola_nl_camp_tbl WHERE `Field` = 'type'";
            $results = $wpdb->get_results($sql);
            if(!$results){
                $sql = "
                    ALTER TABLE `$sola_nl_camp_tbl` ADD `type` tinyint(1) NOT NULL ;
                ";
                $wpdb->query($sql);
            }
            /* Action Column Check */
            $sql = " SHOW COLUMNS FROM $sola_nl_camp_tbl WHERE `Field` = 'action'";
            $results = $wpdb->get_results($sql);
            if(!$results){
                $sql = "
                    ALTER TABLE `$sola_nl_camp_tbl` ADD `action` tinyint(1) NOT NULL ;
                ";
                $wpdb->query($sql);
            }

            /* Automatic Data Column Check */
            $sql = " SHOW COLUMNS FROM $sola_nl_camp_tbl WHERE `Field` = 'automatic_data'";
            $results = $wpdb->get_results($sql);
            if(!$results){
                $sql = "
                    ALTER TABLE `$sola_nl_camp_tbl` ADD `automatic_data` LONGTEXT NOT NULL ;
                ";
                $wpdb->query($sql);
            }




        }
    }
}
//ajax function
function sola_nl_action_callback() {

    global $wpdb;
    global $sola_nl_camp_tbl;
    global $sola_nl_camp_subs_tbl;
    $check = check_ajax_referer( 'sola_nl', 'security' );



    if ($check == 1) {

        // if ($_POST['action'] == "close_review"){
        //     update_option("wplc_review_message","set");

        // }

        if ($_POST['action'] == "get_perc"){
            if (isset($_POST['camp_id'])) { $camp_id = intval($_POST['camp_id']); } else { return false; }

            $sql = "SELECT COUNT(`id`) as `total` FROM `$sola_nl_camp_subs_tbl` WHERE `camp_id` = '$camp_id'";
            $sdf = $wpdb->get_row($sql);
            $total_subscribers = $sdf->total;
            $sql = "SELECT COUNT(`id`) as `total` FROM `$sola_nl_camp_subs_tbl` WHERE `camp_id` = '$camp_id' AND `status` >= 1";
            $sdf = $wpdb->get_row($sql);
            $total_sent = $sdf->total;
            $sent_perc = round((($total_sent / $total_subscribers)*100),0);
            $temp_array[] = $sent_perc;

            $sql = "SELECT `last_sent` FROM `$sola_nl_camp_tbl` WHERE `camp_id` = '$camp_id' LIMIT 1";
            $sdf = $wpdb->get_row($sql);


            if ($sdf->last_sent == "0000-00-00 00:00:00") {

                $time_next = __("Pending first batch","sola");
            } else {

                $last_sent = strtotime($sdf->last_sent);
                $time_interval = get_option("sola_nl_send_limit_time");

                $time_next = ($last_sent + $time_interval) - time();
                $orig_time_next = $time_next;
                if ($time_next <= 0) {
                    $time_next = __("Sending again in about ","sola").'0'.__(" minute(s)","sola");
                } else {
                    $time_next = __("Sending again in about ","sola").ceil(($time_next / 60)).__(" minute(s)","sola");
                }
                
            }


            $temp_array[] = $time_next;
            if ($sent_perc == 100) {
                $next_camp_id = sola_check_send_mail_time(3);
                if (!$next_camp_id) { $temp_array[] = "0";  } else { $temp_array[] = $next_camp_id; }
            } else {
                $camp_id = sola_check_send_mail_time(3);
                /* must we send a batch now, is it time? */
                if ($camp_id) { sola_cron_send($camp_id ); }
                $temp_array[] = "0";
            }
            $temp_array[] = $total_sent." ".__("of","sola")." ".$total_subscribers." ".__("sent","sola");
            echo json_encode($temp_array);

        }

        if ($_POST['action'] == "force_send") {
            if (isset($_POST['camp_id'])) { $camp_id = intval($_POST['camp_id']); } else { return false; }
            sola_cron_send($camp_id);
        }

        if ($_POST['action'] == "save_template") {

            $sola_html = $_POST['sola_html'];
            $camp_id = intval($_POST['camp_id']);
            $auto_options_array = sanitize_text_field($_POST['auto_options']);

            $auto_option = $auto_options_array;
            //var_dump($auto_option);

            $auto_options_data = array();
            foreach ($auto_options_array as $auto_option) {
                foreach ($auto_option as $key => $val) {
                    $auto_options_data[$key] = $val;
                    echo $key . " ". $val . "\n";

                }
            }


            $sql = "SELECT * FROM `$sola_nl_camp_tbl` WHERE `camp_id` = '$camp_id'";
            $current_auto_options = $wpdb->get_row($sql);

            $raw_auto_data = $current_auto_options->automatic_data;
            $raw_auto_data_unserialized = maybe_unserialize($raw_auto_data);
            if (!is_array($raw_auto_data_unserialized)) { $raw_auto_data_unserialized = array(); }

            $raw_auto_data_unserialized["automatic_layout"] = $auto_options_data["automatic_layout"];
            $raw_auto_data_unserialized["automatic_options_posts"] = $auto_options_data["automatic_options_posts"];
            $raw_auto_data_unserialized["automatic_options_columns"] = $auto_options_data["automatic_options_columns"];
            $raw_auto_data_unserialized["automatic_image"] = $auto_options_data["automatic_image"];
            $raw_auto_data_unserialized["automatic_author"] = $auto_options_data["automatic_author"];
            $raw_auto_data_unserialized["automatic_title"] = $auto_options_data["automatic_title"];
            $raw_auto_data_unserialized["automatic_content"] = $auto_options_data["automatic_content"];
            $raw_auto_data_unserialized["automatic_readmore"] = $auto_options_data["automatic_readmore"];
            $raw_auto_data_unserialized["automatic_post_date"] = $auto_options_data["automatic_post_date"];
            $raw_auto_data_unserialized["automatic_post_length"] = $auto_options_data["automatic_post_length"];

            $auto_data = maybe_serialize($raw_auto_data_unserialized);

            if (isset($_POST['auto_options'])) { $auto_options = sanitize_text_field($_POST['auto_options']); } else { $auto_options = ""; }


//            $doc = new DOMDocument();
//            $doc->loadHTML($sola_html);
//            $xpath = new DOMXPath($doc);
//            $nodeList = $xpath->query('//a/@href');
//            for ($i = 0; $i < $nodeList->length; $i++) {
//                # Xpath query for attributes gives a NodeList containing DOMAttr objects.
//                # http://php.net/manual/en/class.domattr.php
//                echo $nodeList->item($i)->value . "<br/>\n";
//            }



//            $regex = '/<a\s+(?:[^"'>]+|"[^"]*"|'[^']*')*href=("[^"]+"|'[^']+'|[^<>\s]+)/i';
//            preg_match_all('/<a\s+(?:[^"\'>]+|"[^"]*"|\'[^\']*\')*href=("[^"]+"|\'[^\']+\'|[^<>\s]+)/i', $sola_html, $matches);
//            var_dump($matches);




            $style_array = serialize(sola_nl_save_style($_POST["styles"], $camp_id));

            $wpdb->update(
                $sola_nl_camp_tbl,
                array(
                    'email' => $sola_html,
                    'last_save' => date("Y-m-d H:i:s"),
                    'styles' => $style_array,
                    'automatic_data' => $auto_data
                ),
                array( 'camp_id' => $camp_id ),
                array(
                    '%s',
                    '%s',
                    '%s',
                    '%s'
                ),
                array( '%d' )
            );
        }
        if($_POST['action'] == "preview_mail"){
            sola_nl_preview_mail();
        }

        if($_POST['action'] == "sola_nl_sign_up_add_sub"){
            global $wpdb;
            global $sola_nl_subs_tbl;
            global $sola_nl_subs_list_tbl;

            extract($_POST);

            if(sola_nl_add_single_subscriber(2)){
                
                /* albert */
                
                $sub_email = sanitize_email($_POST["sub_email"]);
                $sql = "SELECT * FROM `$sola_nl_subs_tbl` WHERE `sub_email` = '$sub_email'";
                $result = $wpdb->get_row($sql);
                $sub_key =  $result->sub_key;
                $sub_id=$result->sub_id;

                
                if(isset($_REQUEST['sola_list_ids_signup_widget']))
                {
                    $selected_lists=$_REQUEST['sola_list_ids_signup_widget'];
                    if(is_array($selected_lists))
                    {
                        foreach($selected_lists as $list_id)
                        {
                            $result=$wpdb->get_results('SELECT count(*) as count FROM '.$sola_nl_subs_list_tbl.'  WHERE sub_id="'.$sub_id.'" AND list_id="'.$list_id.'" ; ');
                            $count=(integer)$result[0]->count;

                            if($count===0)
                            {
                                $query='INSERT INTO '.$sola_nl_subs_list_tbl.' (sub_id,list_id) VALUES ('.$sub_id.','.$list_id.')';
                                $result = $wpdb->query($query);
                            }
                        }
                    }
                }
                else 
                {
                    $default_lists_set=unserialize(get_option('sola_nl_sign_up_lists'));
                    if(is_array($default_lists_set))
                    {
                        foreach($default_lists_set as $list_id)
                        {
                            $result=$wpdb->get_results('SELECT count(*) as count FROM '.$sola_nl_subs_list_tbl.'  WHERE sub_id="'.$sub_id.'" AND list_id="'.$list_id.'" ; ');
                            $count=(integer)$result[0]->count;

                            if($count===0)
                            {
                                $query='INSERT INTO '.$sola_nl_subs_list_tbl.' (sub_id,list_id) VALUES ('.$sub_id.','.$list_id.')';
                                $result = $wpdb->query($query);
                            }
                        }
                    }
                }
               


                $page_url = get_permalink( get_option("sola_nl_confirm_page"));

                $body = do_shortcode(nl2br(get_option("sola_nl_confirm_mail")));
                $subject = get_option('sola_nl_confirm_subject');
                sola_mail("", sanitize_text_field($_POST['sub_email']), $subject, $body);
                echo get_option("sola_nl_confirm_thank_you");

            }
        }


        if($_POST['action'] == "test_mail_2"){
            sola_nl_test_mail_2();
        }
        if($_POST['action'] == "send_mail"){
            sola_nl_ajax_send(sanitize_text_field($_POST['subscribers']), intval($_POST['camp_id']));
            //sola_nl_send_mail();
        }
        if($_POST['action'] == "done_sending"){
            sola_nl_done_sending_camp(intval($_POST['camp_id']));
        }
        if($_POST['action'] == "sola_get_next_subs"){
            extract($_POST);
            $limit = sola_get_camp_limit($camp_id);
            if($limit){
                $subscribers = sola_nl_camp_subs($camp_id, $limit);
                echo json_encode($subscribers);
            } else {
                echo false;
            }
        }
    }
    die(); // this is required to return a proper result
}


function sola_nl_admin_menu() {
    $sola_nl_mainpage = add_menu_page(__('Nifty Newsletters','sola'), __('Newsletters','sola_nl'), 'manage_options', 'sola-nl-menu', 'sola_nl_admin_menu_layout', 'dashicons-email');
    add_submenu_page('sola-nl-menu', __('Subscribers','sola'), __('Subscribers','sola'), 'manage_options' , 'sola-nl-menu-subscribers', 'sola_nl_subscribers_page');
    add_submenu_page('sola-nl-menu', __('Lists','sola'), __('Lists','sola'), 'manage_options' , 'sola-nl-menu-lists', 'sola_nl_lists_page');
    add_submenu_page('sola-nl-menu', __('Settings','sola'), __('Settings','sola'), 'manage_options' , 'sola-nl-menu-settings', 'sola_nl_admin_settings_layout');
    add_submenu_page('sola-nl-menu', __('Error Log','sola'), __('Error Log','sola'), 'manage_options' , 'sola-nl-menu-error-log', 'sola_nl_admin_error_log_layout');
    add_submenu_page('sola-nl-menu', __('Feedback','sola'), __('Feedback','sola'), 'manage_options' , 'sola-nl-menu-feedback-page', 'sola_nl_admin_feedback_layout');
    add_submenu_page('sola-nl-menu', __('Extensions','sola'), __('Extensions','sola'), 'manage_options' , 'sola-nl-extensions', 'sola_nl_admin_extensions');
}

function sola_nl_wp_head() {
    @session_start();
    // post data handling

   global $sola_nl_success;
   global $sola_nl_error;


     // check for apc-object-cache.php (godaddy)

//    $checker = get_dropins();

    /* albert 22 jan 2015 */

//    if (isset($checker['object-cache.php'])) {
//	echo "<div id=\"message\" class=\"error\"><p>".__("Please note: <strong>Nifty Newsletters will not function correctly while using APC Object Cache.</strong> We have found that GoDaddy hosting packages automatically include this with their WordPress hosting packages. Please email GoDaddy and ask them to remove the object-cache.php from your wp-content/ directory.","sola")."</p></div>";
//    }


   /* theme upload handling */
   if (isset($_POST['sola_upload_theme_btn'])) {
       if (is_array($_FILES['sola_theme_file'])) {
            // You should also check filesize here.
            if ($_FILES['sola_theme_file']['size'] > 1000000) {
                echo "File upload size too large";
                return;
            }

            WP_Filesystem();
            $destination = wp_upload_dir();
            $destination_path = $destination['basedir']."/sola/themes/";
            $unzipfile = unzip_file( $_FILES['sola_theme_file']['tmp_name'], $destination_path);

            if ( $unzipfile ) {
               echo "<div class='updated'><p>".__('Theme uploaded successfully','sola')."<p></div>";
            } else {
               echo __('Cannot upload the theme. Please ensure WordPress has write permission to the Uploads folder','sola');
            }


       } else {

       }



   }



    if (isset($_POST['sola_nl_send_feedback'])) {
        $content = "Name: ".sanitize_text_field($_POST['sola_nl_feedback_name'])."\n\r"."Email: ".sanitize_email($_POST['sola_nl_feedback_email'])."\n\r"."Website: ".sanitize_text_field($_POST['sola_nl_feedback_website'])."\n\r"."Feedback:".sanitize_text_field($_POST['sola_nl_feedback_feedback']);
        
        $headers = array();
        // $headers[] = 'Reply-To: '.sanitize_text_field($_POST['sola_nl_feedback_name']).' <'.sanitize_email($_POST['sola_nl_feedback_email']).'>';
        $headers[] = 'From: '.sanitize_text_field($_POST['sola_nl_feedback_name']).' <'.sanitize_email($_POST['sola_nl_feedback_email']).'>';
        if(wp_mail("support@solaplugins.com", "Plugin Feedback", $content, $headers )){
            echo "<div id=\"message\" class=\"updated\"><p>".__("Thank you for your feedback. We will be in touch soon","sola")."</p></div>";
        } else {

            if (function_exists('curl_version')) {
                $request_url = "http://www.solaplugins.com/apif/rec_feedback.php";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $request_url);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST);
                curl_setopt($ch, CURLOPT_REFERER, $_SERVER['HTTP_HOST']);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $output = curl_exec($ch);
                curl_close($ch);
                echo "<div id=\"message\" class=\"updated\"><p>".__("Thank you for your feedback. We will be in touch soon","sola")."</p></div>";
            }
            else {
                echo "<div id=\"message\" class=\"error\">";
                echo "<p>".__("There was a problem sending your feedback. Please log your feedback on ","sola")."<a href='http://solaplugins.com/support-desk' target='_BLANK'>http://solaplugins.com/support-desk</a></p>";
                echo "</div>";
            }
        }

    }

   if (isset($_POST['sola_nl_edit_subscriber'])) {
      $sola_nl_check = sola_nl_update_subscriber();

      if ( is_wp_error($sola_nl_check) ) sola_return_error($sola_nl_check);
      else echo "<div id=\"message\" class=\"updated\"><p>".__("Subscribers Updated","sola")."</p></div>";
   }
   if (isset($_POST['sola_nl_import_subscribers'])) {
      if (is_uploaded_file($_FILES['sub_import_file']['tmp_name'])) {
           /* check if correct file type */
           if (strpos($_FILES['sub_import_file']['type'], ".csv" !== false) ) { sola_return_error(new WP_Error( 'sola_error', __( 'Upload error','sola'), __("Please ensure you upload a CSV file. The file you are trying to upload is a ",'sola').$_FILES['sub_import_file']['type'].__(' type file','sola') )); }
           else {
                if( isset( $_POST['sub_list'] ) ){
                    $arm_nl_check = sola_import_file_subscribers($_POST['sub_list']);
                    if ( is_wp_error($arm_nl_check) ) sola_return_error($arm_nl_check);
                    else {
                        $_SESSION['arm_nl_success'] = __("Subscribers Imported Successfully","sola");
                        wp_redirect(admin_url('admin.php?page=sola-nl-menu-subscribers'));
                        exit('Cannot redirect');
                    }
                } else {
                    echo "<div id=\"message\" class=\"error\"><p><strong>Please select a list to import to.</strong></p></div>";
                    // sola_return_error($arm_nl_check);
                }
           }
       } else {
            if( isset( $_POST['sub_import_excel'] ) && isset( $_POST['sub_list'] ) ){
                $arm_nl_check = sola_import_subscribers(sanitize_text_field($_POST['sub_import_excel']),sanitize_text_field($_POST['sub_list']));
                if ( is_wp_error($arm_nl_check) ) sola_return_error($arm_nl_check);
                else {
                    $_SESSION['arm_nl_success'] = __("Subscribers Imported Successfully","sola");
                    wp_redirect(admin_url('admin.php?page=sola-nl-menu-subscribers'));
                    exit('Cannot redirect');
                }
            } else {
                echo "<div id=\"message\" class=\"error\"><p><strong>Please select a file to import and a list to import to.</strong></p></div>";
                // sola_return_error($arm_nl_check);
            }
       }

   }
   if(isset($_POST['sola_nl_new_subscriber'])){
        if(isset($_POST['sub_list'])){
            $check = sola_nl_add_single_subscriber();
            if($check == true){?>
               <div class="updated">
                  <p><?php _e("Subscriber Added","sola"); ?></p>
               </div>
               <?php
            } else {
                echo $check;
            }
        } else { ?>
            <div class="error">
                <p><?php _e("Please Select a List when adding the subscriber","sola"); ?></p>
            </div>
            <?php
        }
   }
   if(isset($_GET['action']) && $_GET['action'] == "delete_subscriber"){
      $sola_nl_check = sola_nl_delete_subscriber();
      if ( is_wp_error($sola_nl_check) ) sola_return_error($sola_nl_check);
         else echo "<div id=\"message\" class=\"updated\"><p>".__("Subscribers Deleted","sola")."</p></div>";
   }
   if(isset($_GET['action']) && $_GET['action'] == "delete_camp"){
    check_admin_referer('sola_nl_delete_camp');
    if(!current_user_can("manage_options")){ } else {
      //Has permission to delete
      $sola_nl_check = sola_nl_delete_camp();
      if ( is_wp_error($sola_nl_check) ) sola_return_error($sola_nl_check);
      else echo "<div id=\"message\" class=\"updated\"><p>".__("Campaign Deleted","sola")."</p></div>";

    }

   }
   if(isset($_GET['action']) && $_GET['action'] == "pause_sending"){
      $sola_nl_check = sola_nl_pause_camp();
      if ( is_wp_error($sola_nl_check) ) { sola_return_error($sola_nl_check); }
      else {
        $newurl = admin_url("admin.php?page=sola-nl-menu");
        ob_end_clean();
        header("location:".$newurl);
      }
   }
   if(isset($_GET['action']) && $_GET['action'] == "resume_sending"){
      $sola_nl_check = sola_nl_resume_camp();
      if ( is_wp_error($sola_nl_check) ) { sola_return_error($sola_nl_check); }
      else {
        $newurl = admin_url("admin.php?page=sola-nl-menu");
        ob_end_clean();
        header("location:".$newurl);
      }


   }
   if(isset($_POST['sola_nl_new_list'])){
      sola_nl_add_list();
   }
   if(isset($_POST['sola_nl_edit_list'])){
      $sola_nl_check = sola_nl_update_list();
      if ( is_wp_error($sola_nl_check) ) sola_return_error($sola_nl_check);
      else echo "<div id=\"message\" class=\"updated\"><p>".__("List Updated","sola")."</p></div>";
   }
   if(isset($_GET['action']) && $_GET['action'] == "delete_list"){
      $sola_nl_check = sola_nl_delete_list();
      if ( is_wp_error($sola_nl_check) ) sola_return_error($sola_nl_check);
      else echo "<div id=\"message\" class=\"updated\"><p>".__("List Deleted","sola")."d</p></div>";

   }
   if(isset($_POST["sola_nl_save_settings"])){
      if(sola_nl_update_settings()) {
          echo "<div id=\"message\" class=\"updated\"><p>".__("Settings Saved","sola")."</p></div>";
      }
   }
   if(isset($_POST['sola_nl_new_camp'])){

      $sola_nl_check = sola_nl_add_camp();
      if ( is_wp_error($sola_nl_check) ) { sola_return_error($sola_nl_check); }
      else  {
        check_admin_referer('sola_nl_create_camp');
          if(isset($_POST['campaign_type']) && intval($_POST['campaign_type']) == 3){
            $template_page = admin_url("admin.php?page=sola-nl-menu&action=custom_template&camp_id=$sola_nl_check");
          } else {
            $template_page = admin_url("admin.php?page=sola-nl-menu&action=theme&camp_id=$sola_nl_check");
          }
         ob_end_clean();
         header("location:".$template_page);
         exit();
      }
   }
   if(isset($_POST["sola_nl_edit_camp"])){
       $sola_nl_check = sola_nl_update_camp();
      if ( is_wp_error($sola_nl_check) ) { sola_return_error($sola_nl_check); }
        else {
         $new_camp_page = admin_url("admin.php?page=sola-nl-menu&action=editor&camp_id=".intval($_POST["camp_id"]) );
         ob_end_clean();
         header("location:".$new_camp_page);
         exit();
      }
   }
//   if($_POST["sola_nl_finish_campaign"]){
//
//       $sola_nl_check = sola_nl_finish_camp();
//      if ( is_wp_error($sola_nl_check) ) { sola_return_error($sola_nl_check); }
//      else {
//           echo "<div id=\"message\" class=\"updated\"><p>".__("Campaign Ready to Send","sola")."</p></div>";
//       }
//   }
    if(isset($_POST['action']) && $_POST["action"] == "sola-delete-subs" && isset($_POST['sola_check_subs']) && isset($_POST['sola_check_subs'])){
        foreach($_POST['sola_check_subs'] as $sub_id){
            $sola_nl_check = sola_nl_delete_subscriber($sub_id);
            if ( is_wp_error($sola_nl_check) ) {
                sola_return_error($sola_nl_check);
                $check = false;
                break;
            } else {
                $check = true;
            }
        }
        if($check == true){
            echo "<div id=\"message\" class=\"updated\"><p>".__("Subscribers Deleted","sola")."</p></div>";
        }
    }

    if(isset($_POST['action']) && $_POST["action"] == "delete_multi_camps" && isset($_POST["sola_camp_checkbox"]) && $_POST["sola_camp_checkbox"]){
        foreach($_POST["sola_camp_checkbox"] as $camp_id){
            $sola_nl_check = sola_nl_delete_camp($camp_id);
            if ( is_wp_error($sola_nl_check) ) {
                sola_return_error($sola_nl_check);
                $check = false;
                break;
            }
            else {
                $check = true;
            }
        }
        if($check == true){
                echo "<div id=\"message\" class=\"updated\"><p>".__("Campaigns Deleted","sola")."</p></div>";
            }
    }
    if(isset($_POST['sola_set_theme'])){



//        if (isset($_POST['sola_nl_theme_data']) && $_POST['sola_nl_theme_data'] != '') {
//            /* theyre using a free or purchased theme and are inserting the data */
//            var_dump($_POST['sola_nl_theme_data']);
//            $jsondata = json_decode(stripslashes($_POST['sola_nl_theme_data']));
//            var_dump($jsondata);
//            echo $jsondata[2];
//
//
//            exit();
//        }
//        else {

            /*albert*/
        
        if(isset($_POST['theme_id']))
        {
            $theme_array = explode(",",$_POST['theme_id']);


            $sola_nl_check = sola_set_theme($theme_array, intval($_POST['camp_id']));
            if(is_wp_error($sola_nl_check)){
                sola_return_error($sola_nl_check);
            } else {
                $editor = admin_url("admin.php?page=sola-nl-menu&action=editor&camp_id=".intval($_POST["camp_id"]) );
                header('location:'.$editor);
                exit();
            }
        }
        else
        {
            $error_data=new WP_Error( 'sola_error', __( 'Please select a theme before continuing', 'sola'), '' );
            sola_return_error($error_data);
        }
        
            
//        }

    }
    if (isset($_POST['action']) && $_POST['action'] == 'sola_submit_find_us') {
        sola_nl_feedback_head();
        echo "<div class=\"updated\"><p>". __("Thank You for your feedback!","sola")."</p></div>";
    }

//    if(function_exists('sola_nl_register_pro_version')){
//        global $sola_nl_pro_version;
//        if($sola_nl_pro_version <= 2.2){
//            echo "<div class='error'><p>".__("You are using an outdated version of Nifty Newsletters Premium. Please update Nifty Newsletters Premium using your Plugins panel", "sola")."</p></div>";
//        }
//    }
}

function sola_nl_admin_javascript() {
    // any additional JS goes here
}



function sola_nl_admin_menu_layout() {
    global $sola_nl_success;
    global $sola_nl_error;

    if ($_GET['page'] == "sola-nl-menu" && !isset($_GET['action'])) {
        if(get_option('solag_nl_first_time')){
            update_option('solag_nl_first_time', false);
            if (class_exists("APC_Object_Cache")) {
                /* do nothing here as this caches the "first time" option and the welcome page just loads over and over again. quite annoying really... */
                include('includes/admin-page.php');
            }  else {
                include('includes/welcome_page.php');
            }
        } else {
            include('includes/admin-page.php');
        }
    } else if($_GET['page'] == "sola-nl-menu" && $_GET['action'] == "delete_camp"){
        include('includes/admin-page.php');
    } else if ($_GET['page'] == "sola-nl-menu" && $_GET['action'] == "new_campaign") {
        include('includes/new_campaign.php');
    } else if ($_GET['page'] == "sola-nl-menu" && $_GET['action'] == "duplicate_campaign") {
        include('includes/duplicate_campaign.php');
    }else if ($_GET['page'] == "sola-nl-menu" && $_GET['action'] == "new_subscriber" || $_GET['action'] == "edit_subscriber") {
        include('includes/new_subscriber.php');
    }else if ($_GET['page'] == "sola-nl-menu" && $_GET['action'] == "import") {
        include('includes/import_subscribers.php');
    }else if ($_GET['page'] == "sola-nl-menu" && $_GET['action'] == "new_list") {
        include('includes/new_list.php');
    }else if ($_GET['page'] == "sola-nl-menu" && $_GET['action'] == "editor"){
       include('includes/editor.php');
       //Jarryd
    }else if ($_GET['page'] == "sola-nl-menu" && $_GET['action'] == "welcome"){
        include('includes/welcome_page.php');
    //Jarryd
    }else if ($_GET['page'] == "sola-nl-menu" && $_GET['action'] == "preview"){
       include('includes/preview.php');
       //
    } else if($_GET['page'] == "sola-nl-menu" && $_GET['action'] == "confirm_camp"){
        include('includes/confirm_campaign.php');
    } else if($_GET['page'] == "sola-nl-menu" && $_GET['action'] == "send_campaign"){
        include ('includes/send_campaign.php');
    } else if($_GET['page'] == "sola-nl-menu" && $_GET['action'] == "camp_stats"){
        include ('includes/campaign_stats.php');
    } else if($_GET['page'] == "sola-nl-menu" && $_GET['action'] == "single_sub_stats"){
        if(function_exists('sola_nl_register_pro_version')){
            include (PLUGIN_URL_PRO.'/includes/single_stats_pro.php');
        } else {
            include ('/includes/single_stats.php');
        }
    } else if ($_GET['page'] == "sola-nl-menu" && $_GET['action'] == "theme"){
        if(function_exists('sola_nl_regstier_pro_version')){
            include (PLUGIN_URL_PRO.'/includes/campaign_theme_pro.php');
        } else {
            include('includes/campaign_theme.php');
        }
    } else if ($_GET['page'] == 'sola-nl-menu' && $_GET['action'] == 'custom_template'){
        if(function_exists('sola_nl_register_pro_version')){
            include (PLUGIN_URL_PRO.'/includes/custom_template_pro.php');
        } else {
//            include('includes/campaign_theme.php');
        }
    }


}

function sola_nl_admin_menu_layout_display() {

}

/*------------------- MOVED ACTVATION FUNCTIONS TO module_activation.php --------------------------------- */

function sola_nl_add_admin_shared_stylesheet() {
    wp_register_style( 'sola_nl_admin_shared_styles', plugins_url('/css/admin.css', __FILE__), array(), '1.1' );
    wp_enqueue_style( 'sola_nl_admin_shared_styles' );

}

function sola_nl_add_user_stylesheet() {
    wp_register_style( 'sola_nl_styles', plugins_url('/css/style.css', __FILE__), array(), '1.1' );
    wp_enqueue_style( 'sola_nl_styles' );

}
function sola_nl_add_admin_stylesheet() {
    global $sola_nl_version;
    if(isset($_GET['page']) && isset($_GET['action'])){
        if($_GET['page'] == "sola-nl-menu" && ($_GET['action'] == "camp_stats" || $_GET['action'] == 'single_sub_stats')) {
            wp_register_style( 'sola_nl_bootstrap_css', PLUGIN_DIR.'/css/bootstrap.min.css' );
            wp_enqueue_style( 'sola_nl_bootstrap_css' );
            wp_register_style( 'sola_nl_bootstrap_theme_css', PLUGIN_DIR.'/css/bootstrap-theme.min.css' );
            wp_enqueue_style( 'sola_nl_bootstrap_theme_css' );
            //wp_register_style( 'sola_nl_datatables_css', PLUGIN_DIR.'/css/data_table.css' );
            //wp_enqueue_style( 'sola_nl_datatables_css' );
            wp_register_style('sola_nl_jqplot_css', PLUGIN_DIR.'/css/jquery.jqplot.min.css');
            wp_enqueue_style('sola_nl_jqplot_css');
            wp_register_style( 'sola_nl_datatables_css_custom', PLUGIN_DIR.'/css/data_table_custom.css' );
            wp_enqueue_style( 'sola_nl_datatables_css_custom' );
        }
    }
    if(isset($_GET['page'])){
       if(($_GET['page'] == "sola-nl-menu" || $_GET['page'] != "sola-nl-menu-settings") && isset($_GET['action']) && $_GET['action'] != 'preview' || isset($_GET['action']) && isset($_GET['custom_template'])){
            wp_register_style( 'sola_nl_jquery_css_theme', plugins_url('/css/jquery-ui.theme.css', __FILE__) );
            wp_enqueue_style( 'sola_nl_jquery_css_theme' );
            wp_register_style( 'sola_nl_jquery_css', plugins_url('/css/jquery-ui.css', __FILE__) );
            wp_enqueue_style( 'sola_nl_jquery_css' );

        }
    }
    if (is_rtl()) {
        wp_register_style( 'sola_nl_styles', plugins_url('/css/style_rtl.css', __FILE__) );
        wp_enqueue_style( 'sola_nl_styles' );
    } else {
        if( isset( $_GET['page'] ) && ( $_GET['page'] == 'sola-nl-menu-settings' || $_GET['page'] == 'sola-nl-menu' || $_GET['page'] == 'sola-nl-extensions' ) ) {
            wp_register_style( 'sola_nl_styles', plugins_url('/css/style.css', __FILE__), array(), $sola_nl_version);
            wp_enqueue_style( 'sola_nl_styles' );
        }
    }

}

add_action('admin_print_scripts', 'sola_nl_admin_scripts_basic');

function sola_nl_admin_scripts_basic() {
    wp_enqueue_script('jquery');

    if(isset($_GET['page']) && isset($_GET['action']) && $_GET['page'] == "sola-nl-menu" && ($_GET['action'] == "camp_stats" || $_GET['action'] == "single_sub_stats")){
        wp_register_script('sola_nl_bootstrap_js', PLUGIN_DIR."/js/bootstrap.min.js", false);
        wp_enqueue_script( 'sola_nl_bootstrap_js' );

        

        
        if ($_GET['action'] == "camp_stats") {
            wp_register_script('sola_nl_googlecharts_js', "//www.google.com/jsapi", false);
            wp_enqueue_script( 'sola_nl_googlecharts_js' );
            if(function_exists('sola_nl_register_pro_version')){
                wp_register_script('sola_nl_google_charts_custom_js', PLUGIN_DIR_PRO.'/js/sola_nl_pro.js');
                wp_enqueue_script('sola_nl_google_charts_custom_js');
            }
        }
        wp_register_script('sola_nl_datatables_js', PLUGIN_DIR."/js/jquery.dataTables.js", false);
        wp_enqueue_script( 'sola_nl_datatables_js' );
    }

    if (isset($_GET['page']) && ($_GET['page'] == "sola-nl-menu-settings" || $_GET['page'] == "sola-nl-menu" || $_GET['page'] == "sola-nl-menu-subscribers" || (isset($_GET['action']) && $_GET['action'] == "preview") || (isset($_GET['action']) && $_GET['action'] == "confirm_camp") || (isset($_GET['action']) && $_GET['action'] == 'new_campaign') || isset($_GET['action']) && isset($_GET['custom_template']))){
        wp_enqueue_script('jquery-ui-core');
        wp_enqueue_script( 'jquery-ui-tabs');
        wp_enqueue_script('jquery-ui-datepicker');
        wp_enqueue_script( 'jquery-ui-dialog');
        wp_register_script('sola-nl-tabs', plugins_url('js/sola_nl_tabs.js',__FILE__), array('jquery-ui-core'), '', true);
        wp_enqueue_script('sola-nl-tabs');
        wp_register_script('sola-nl-js', plugins_url('js/sola_nl.js',__FILE__), array('jquery'), '', false);
        wp_enqueue_script('sola-nl-js');


        wp_register_script('ace', plugins_url('js/ace/ace.js',__FILE__));
        wp_enqueue_script('ace');
        wp_register_script('ace-theme-twilight', plugins_url('js/ace/theme-twilight.js',__FILE__));
        wp_enqueue_script('ace-theme-twilight');
        wp_register_script('ace-mode-html', plugins_url('js/ace/mode-html.js',__FILE__));
        wp_enqueue_script('ace-mode-html');
        wp_register_script('jquery-ace', plugins_url('js/jquery-ace.js',__FILE__), array('jquery'), '', false);
        wp_enqueue_script('jquery-ace');


    }
}


function sola_nl_admin_settings_layout() {
    sola_nl_settings_page_basic();
}
function sola_nl_admin_error_log_layout() {
    include('includes/error-log-page.php');
}
function sola_nl_admin_feedback_layout() {
    sola_nl_add_admin_shared_stylesheet();
    include('includes/feedback-page.php');
}

function sola_nl_settings_page_basic() {
    wp_register_style( 'sola_nl_admin_setting_styles', plugins_url('/css/settings_style.css', __FILE__), array(), '1.0' );
    wp_enqueue_style( 'sola_nl_admin_setting_styles' );
    include('includes/settings-page.php');
}
function sola_nl_subscribers_page(){
   include('includes/subscribers-page.php');
}
function sola_nl_lists_page (){
   include 'includes/lists-page.php';
}

function sola_nl_get_subscribers($list_id = false, $limit = false, $page = false, $order = false, $orderBy = false, $name = false){

    global $wpdb;
    global $sola_nl_subs_tbl;
    global $sola_nl_subs_list_tbl;

    $where = "";
    $limit_sql = "";
    $order_sql = "";
    if($list_id){
        $where = "WHERE `$sola_nl_subs_list_tbl`.`list_id` = '$list_id'";
    }
    if($name && $list_id){
        $where = "WHERE (`$sola_nl_subs_tbl`.`sub_name` LIKE '%$name%' OR `$sola_nl_subs_tbl`.`sub_email` LIKE '%$name%') AND `$sola_nl_subs_list_tbl`.`list_id` = '$list_id'";
    } else if ($name) {
        $where = "WHERE (`$sola_nl_subs_tbl`.`sub_name` LIKE '%$name%' OR `$sola_nl_subs_tbl`.`sub_email` LIKE '%$name%')";
    }
    if($limit){
        if(!$page){
            $page = 1;
        }
        $from = ($page - 1)*$limit;
        $limit_sql = "LIMIT $from , $limit";
    }
    if($orderBy != false){
        if(!$order){
            $order = "ASC";
        }
        $order_sql = "ORDER BY `$sola_nl_subs_tbl`.`$orderBy` $order";
    }
    $sql = "SELECT  `$sola_nl_subs_tbl`.*
             FROM  `$sola_nl_subs_tbl`
             LEFT JOIN  `$sola_nl_subs_list_tbl` ON  `$sola_nl_subs_tbl`.`sub_id` =  `$sola_nl_subs_list_tbl`.`sub_id`
            ".$where."
             GROUP BY `$sola_nl_subs_tbl`.`sub_id`
             ".$order_sql." ".$limit_sql;
    return $wpdb->get_results($sql);
}
function sola_nl_get_total_subs(){
    global $wpdb;
    global $sola_nl_subs_tbl;
    $sql = "SELECT * FROM `$sola_nl_subs_tbl`";
    $wpdb->query($sql);
    return $wpdb->num_rows;
}
function sola_nl_subscriber_status($status){
   if($status == 1){
        _e('Subscribed', 'sola');
   } else if($status == 2){
        _e('Pending Confirmation', 'sola');
   } else {
        _e('Unsubscribed', 'sola');
   }
}



/* - albert - */

function sola_nl_add_single_subscriber($status = 1){
    global $wpdb;
    global $sola_nl_subs_tbl;
    $sola_nl_sub_check='';
    
    // if(sola_cts()){
    if($wpdb){
        extract($_POST);
        if($sub_email){

           $sub_key = wp_hash_password( $sub_email );
           
           $result = $wpdb->get_results('SELECT count(*) as count FROM '.$sola_nl_subs_tbl.'  WHERE sub_email="'.$sub_email.'" ; ');

           if( $result ){

               $count = $result[0]->count;

               if( $count > 0 ){
                    echo "<p>".__('You are already subscribed to this list', 'sola' )."</p>";
               } else {

                    $sola_nl_sub_check = $wpdb->insert( $sola_nl_subs_tbl, array( 'sub_id' => '', 'sub_name' => $sub_name, 'sub_email' => $sub_email, 'sub_key' => $sub_key , "status" => $status ) ) ;

                    if( isset($sub_list ) ) {
                        sola_nl_add_sub_list($sub_list, $wpdb->insert_id);
                    }

                    if($sola_nl_sub_check == false){
                        
                        return new WP_Error( 'db_query_error',
                        __( 'Could not add subscriber', 'sola' ), $wpdb->last_error );

                    } else{

                       return true;

                    }

               }

           }
           
        } else { ?>
           <div class="error">
              <p><?php _e("Please enter an E-mail Address","sola"); ?></p>
           </div>
           <?php
        }
    } else {
        echo sola_se();
    }
}

// adds subscriber to lists
function sola_nl_add_sub_list($list_ids, $sub_id){
   global $wpdb;
   global $sola_nl_subs_list_tbl;
   $wpdb->delete( $sola_nl_subs_list_tbl, array( 'sub_id' => $sub_id )); // Delete all assciated to this subscriber

   if($list_ids!==null && !is_string($list_ids))
   {
       foreach($list_ids as $list_id){
        $wpdb->insert( $sola_nl_subs_list_tbl, array( 'id' => '', 'list_id' => $list_id, 'sub_id' => $sub_id)); // add each one again
       }
   }

}
function sola_nl_add_list(){
   global $wpdb;
   global $sola_nl_list_tbl;
   extract($_POST);
   if($list_name){
      if($wpdb->insert( $sola_nl_list_tbl, array( 'list_id' => '', 'list_name' => $list_name, 'list_description' => $list_description) ) == false){ ?>
         <div class="error">
            <p><?php _e("There was an error while trying to add the list","sola"); ?></p>
         </div>
         <?php
      } else{?>
         <div class="updated">
            <p><?php _e("List added","sola"); ?></p>
         </div>
         <?php
      }
   } else {?>
      <div class="error">
         <p><?php _e("Please enter a list name","sola"); ?></p>
      </div>
      <?php
   }
}
function sola_nl_get_lists(){
   global $wpdb;
   global $sola_nl_list_tbl;
   $sql = "SELECT * FROM `$sola_nl_list_tbl`";
   return $wpdb->get_results($sql);
}
function sola_nl_total_active_list_subscribers($list_id){
   global $wpdb;
   global $sola_nl_subs_list_tbl;
   global $sola_nl_subs_tbl;
   $sql = "SELECT  `$sola_nl_subs_list_tbl`.*, COUNT(`list_id`) AS `total`
            FROM  `$sola_nl_subs_list_tbl`
            LEFT JOIN  `$sola_nl_subs_tbl` ON  `$sola_nl_subs_list_tbl`.`sub_id` =  `$sola_nl_subs_tbl`.`sub_id`
            WHERE `$sola_nl_subs_list_tbl`.`list_id` = '$list_id' AND `$sola_nl_subs_tbl`.`status` = '1'";
   //$sql = "SELECT *, COUNT(`list_id`) AS `total` FROM `$sola_nl_subs_list_tbl` WHERE `list_id` = '$list_id' AND `status` = '1'";
   //echo $sql; //debug
   $result = $wpdb->get_row($sql);
   $total = $result->total;

   return $total;
}
function sola_nl_total_pending_list_subscribers($list_id){
    global $wpdb;
    global $sola_nl_subs_list_tbl;
    global $sola_nl_subs_tbl;
    $sql = "SELECT  `$sola_nl_subs_list_tbl`.*, COUNT(`list_id`) AS `total`
             FROM  `$sola_nl_subs_list_tbl`
             LEFT JOIN  `$sola_nl_subs_tbl` ON  `$sola_nl_subs_list_tbl`.`sub_id` =  `$sola_nl_subs_tbl`.`sub_id`
             WHERE `$sola_nl_subs_list_tbl`.`list_id` = '$list_id' AND `$sola_nl_subs_tbl`.`status` = '2'";
    //$sql = "SELECT *, COUNT(`list_id`) AS `total` FROM `$sola_nl_subs_list_tbl` WHERE `list_id` = '$list_id' AND `status` = '1'";
    //echo $sql; //debug
    $result = $wpdb->get_row($sql);
    $total = $result->total;
 
    return $total;
 }
function sola_nl_get_subscriber($sub_id){
   global $wpdb;
   global $sola_nl_subs_tbl;
   $sql = "SELECT * FROM `$sola_nl_subs_tbl` WHERE `sub_id` = '$sub_id'";
   return $wpdb->get_row($sql);
}

function sola_nl_update_subscriber(){
   global $wpdb;
   global $sola_nl_subs_tbl;
   /**
    * sanitize_text_field removed from $_POST['sub_list'] as an array is parsed through here
    */
   sola_nl_add_sub_list($_POST['sub_list'], intval($_POST['sub_id']));
   if ($wpdb->update(
      $sola_nl_subs_tbl,
      array(
         'sub_email' => sanitize_email($_POST['sub_email']),
         'sub_name' => sanitize_text_field($_POST['sub_name'])
      ),
      array( 'sub_id' => intval($_POST['sub_id']) ),
      array(
         '%s',
         '%s'
      ),
      array( '%d' )
   ) === FALSE) {
      return new WP_Error( 'db_query_error',
			__( 'Could not execute query', 'sola' ), $wpdb->last_error );
   } else {
      return true;
   }

}
function sola_nl_delete_subscriber($sub_id = null) {
   global $wpdb;
   global $sola_nl_subs_tbl;
   global $sola_nl_subs_list_tbl;
   global $sola_nl_camp_subs_tbl;
   if(!$sub_id){
       extract($_GET);
   }
   if(($wpdb->delete( $sola_nl_subs_tbl, array( 'sub_id' => $sub_id )))){
      $wpdb->delete( $sola_nl_subs_list_tbl, array( 'sub_id' => $sub_id ));
      return true;
   } else {
      return new WP_Error( 'db_query_error',
			__( 'Could not execute query', 'sola'), $wpdb->last_error );
   }
}
function sola_nl_get_list($list_id){
   global $wpdb;
   global $sola_nl_list_tbl;
   $sql = "SELECT * FROM `$sola_nl_list_tbl` WHERE `list_id` = '$list_id'";
   return $wpdb->get_row($sql);
}
function sola_nl_update_list(){
   global $wpdb;
   global $sola_nl_list_tbl;

   if ($wpdb->update(
      $sola_nl_list_tbl,
      array(
         'list_name' => sanitize_text_field($_POST['list_name']),
         'list_description' => sanitize_text_field($_POST['list_description'])
      ),
      array( 'list_id' => intval($_POST['list_id']) ),
      array(
         '%s',
         '%s'
      ),
      array( '%d' )
   ) === FALSE) {
      return new WP_Error( 'db_query_error',
			__( 'Could not execute query', 'sola'), $wpdb->last_error );
   } else {
      return true;
   }

}
function sola_nl_delete_list(){
   global $wpdb;
   global $sola_nl_list_tbl;
   extract($_GET);
   if($wpdb->delete( $sola_nl_list_tbl, array( 'list_id' => $list_id ) )){
      return true;
   } else {
      return new WP_Error( 'db_query_error',
			__( 'Could not execute query', 'sola'), $wpdb->last_error );
   }
}
function sola_nl_check_if_selected_list_sub($list_id, $sub_id){
   global $wpdb;
   global $sola_nl_subs_list_tbl;
   if($wpdb->get_row("SELECT * FROM `$sola_nl_subs_list_tbl` WHERE `list_id` = '$list_id' AND `sub_id` = '$sub_id'")){
      return true;
   } else {
      return false;
   }
}
function sola_nl_get_subscriber_list($sub_id){
   global $wpdb;
   global $sola_nl_list_tbl;
   global $sola_nl_subs_list_tbl;
   $sql = "SELECT `$sola_nl_list_tbl`.`list_name`, `$sola_nl_list_tbl`.`list_id`
            FROM  `$sola_nl_list_tbl`
            LEFT JOIN  `$sola_nl_subs_list_tbl` ON  `$sola_nl_list_tbl`.`list_id` =  `$sola_nl_subs_list_tbl`.`list_id`
            WHERE `$sola_nl_subs_list_tbl`.`sub_id` = '$sub_id'";
   return $wpdb->get_results($sql);
}
function sola_nl_update_settings(){

   extract($_POST);
   //var_dump($_POST);
   if(!$sola_nl_unsubscribe){
       $sola_nl_unsubscribe = __("Unsubscribe", "sola");
   }
   if(!$sola_nl_browser_text){
       $sola_nl_browser_text = __("Not Displaying? View In Browser", "sola");
   }
   if (isset($_POST['sola_nl_api'])) { update_option("sola_nl_api",sanitize_text_field($_POST['sola_nl_api'])); }
   update_option("sola_nl_email_note", $sola_nl_email_note);
   update_option("sola_nl_notifications", $sola_nl_notifications);
   //Signiture needs to be added
   //update_option("sola_nl_sig",$sola_nl_sig);
   update_option("sola_nl_unsubscribe",$sola_nl_unsubscribe);
   update_option("sola_nl_sent_from", $sola_nl_sent_from);
   update_option("sola_nl_sent_from_name",$sola_nl_sent_from_name);
   update_option("sola_nl_reply_to",$sola_nl_reply_to);
   update_option("sola_nl_reply_to_name",$sola_nl_reply_to_name);
   update_option("sola_nl_send_method", $sola_nl_send_method);
   update_option("sola_nl_host",$sola_nl_host);
   update_option("sola_nl_username",$sola_nl_username);
   update_option("sola_nl_password",$sola_nl_password);
   update_option("sola_nl_port",$sola_nl_port);
   update_option("sola_nl_sign_up_title", $sola_nl_sign_up_title);
   update_option("sola_nl_sign_up_btn","$sola_nl_sign_up_btn");
   if (isset($sola_nl_utm_source)) { update_option("sola_nl_utm_source",$sola_nl_utm_source); }
   if (isset($sola_nl_utm_medium)) { update_option("sola_nl_utm_medium",$sola_nl_utm_medium); }
   //var_dump($_POST['sola_nl_sign_up_sub_list']);

    if(isset($_POST['sola_nl_sign_up_sub_list']))
    {
       update_option("sola_nl_sign_up_lists", maybe_serialize($_POST['sola_nl_sign_up_sub_list']));
    }

    
    
    
   update_option("sola_nl_social_links", $social_links);
   update_option("sola_nl_encryption", $encryption);
   update_option("sola_nl_confirm_subject",$sola_nl_confirm_subject);
   update_option("sola_nl_confirm_mail",  stripslashes($sola_nl_confirm_mail));
   update_option("sola_nl_confirm_thank_you", stripslashes($sola_nl_confirm_thank_you));
   update_option("sola_nl_hosting_provider", $sola_nl_hosting_provider);
   update_option("sola_nl_send_limit_qty", $sola_nl_send_limit_qty);
   update_option("sola_nl_send_delay", $sola_nl_send_delay);
   update_option("sola_nl_send_limit_time", $sola_nl_send_limit_time);
   update_option("sola_nl_browser_text", $sola_nl_browser_text);
   update_option("sola_nl_enable_link_tracking", $sola_nl_enable_link_tracking);

   if(isset($sola_nl_use_list) && $sola_nl_use_list == 1){
       update_option('sola_nl_use_list', 1);
   } else {
       update_option('sola_nl_use_list', 0);
   }

   return true;
}
function sola_nl_add_camp_list($list_ids, $camp_id){
   global $wpdb;
   global $sola_nl_camp_list_tbl;
   $wpdb->delete( $sola_nl_camp_list_tbl, array( 'camp_id' => $camp_id )); // Delete all assciated to this campaign
   foreach($list_ids as $list_id){
      $insert = $wpdb->insert( $sola_nl_camp_list_tbl, array( 'id' => '', 'list_id' => $list_id, 'camp_id' => $camp_id)); // add each one again
   }
//   var_dump($insert);
}

//function sola_nl_add_camp_list_automated($list_ids, $camp_id){
////function sola_nl_add_camp_list_automated($list_ids, $camp_id, $camp_type, $camp_data, $action = 0){
//    var_dump('running sola_nl_add_camp_list_automated');
//    global $wpdb;
//   global $sola_nl_camp_list_tbl;
//   $wpdb->delete( $sola_nl_camp_list_tbl, array( 'camp_id' => $camp_id )); // Delete all assciated to this campaign
//   foreach($list_ids as $list_id){
//      $wpdb->insert( $sola_nl_camp_list_tbl, array(
//          'id' => '',
//          'list_id' => $list_id,
//          'camp_id' => $camp_id
//       )); // add each one again
//   }
//}

function sola_nl_add_camp(){
   global $wpdb;
   global $sola_nl_camp_tbl;
   extract($_POST);
   if(isset($subject) && $subject){
      if((isset($sub_list) && $sub_list) || $campaign_type == 2){

        $custom_time = sanitize_text_field($_POST['sola_nl_time']);
        $day = intval($_POST['sola_nl_days']);
        $type =  intval($_POST['sola_nl_time_slot']);
        $the_current_time = current_time('timestamp');

        if($type == 1){
            //Daily
            if (strtotime(date("Y-m-d",$the_current_time)." ".$custom_time.":00") > $the_current_time) {
                $time = date('Y-m-d H:i:s', strtotime(date("Y-m-d",$the_current_time)." ".$custom_time.":00"));
            } else {
                $time = date('Y-m-d H:i:s', strtotime('+1 day '.$custom_time.':00', $the_current_time));
            }
        } else if ($type == 2){
            //Weekly
            if($day == 1) { $chosen_day = 'Monday'; }
            else if ($day == 2) { $chosen_day = 'Tuesday'; }
            else if ($day == 3) { $chosen_day = 'Wednesday'; }
            else if ($day == 4) { $chosen_day = 'Thursday'; }
            else if ($day == 5) { $chosen_day = 'Friday'; }
            else if ($day == 6) { $chosen_day = 'Saturday'; }
            else if ($day == 7) { $chosen_day = 'Sunday'; }

            $time = date('Y-m-d H:i:s', strtotime($chosen_day.' '.$custom_time.':00', $the_current_time));
        } else {
            $time = date('Y-m-d H:i:s', current_time('timestamp'));
        }

        $automated = array(
            'type' => $_POST['sola_nl_time_slot'],
            'action' => $_POST['sola_nl_action'],
            'data' => array(
                'day' => $_POST['sola_nl_days'],
                'time' => $_POST['sola_nl_time'],
                'daynum' => $_POST['sola_nl_monthly_day'],
                'timeafter' => $_POST['sola_nl_time_after'],
                'timeqty' => $_POST['sola_nl_custom_time'],
                'role' => $_POST['sola_nl_roles']
            ),
            'automatic_layout' => 'layout-1',
            'automatic_options_posts' => '1',
            'automatic_options_columns' => '1',
            'automatic_image' => '1',
            'automatic_author' => '1',
            'automatic_title' => '1',
            'automatic_content' => '1',
            'automatic_readmore' => '1',
            'automatic_scheduled_date' => $time
        );
        if($campaign_type == '1'){
            $checker = $wpdb->insert( $sola_nl_camp_tbl, array(
                    'camp_id' => '',
                    'subject' => $subject,
                    'type' => $campaign_type,
                    'automatic_data' => '',
                    'styles' => sola_nl_default_styles_array(),
                    'action' => 0
            ));
        } else if ($campaign_type == '2'){
            $checker = $wpdb->insert( $sola_nl_camp_tbl, array(
                    'camp_id' => '',
                    'subject' => $subject,
                    'type' => $campaign_type,
                    'automatic_data' => maybe_serialize($automated),
                    'styles' => sola_nl_default_styles_array(),
                    'action' => $sola_nl_action
            ));
        } else if ($campaign_type == '3'){
            $checker = $wpdb->insert( $sola_nl_camp_tbl, array(
                    'camp_id' => '',
                    'subject' => $subject,
                    'type' => $campaign_type,
                    'automatic_data' => '',
                    'styles' => '',
                    'action' => 0
                ));
        }
        if($checker){
            $camp_id = $wpdb->insert_id;
            if($campaign_type == '1' || $campaign_type == '3'){
                sola_nl_add_camp_list($sub_list, $camp_id);
            } else if ($campaign_type == '2' && $sola_nl_action == '3'){
                sola_nl_add_camp_list($sub_list, $camp_id);
            }
            return $camp_id;
         } else {
            return new WP_Error( 'db_query_error',
               __( 'Could not execute query', 'sola'), $wpdb->last_error );
         }
      } else {
        $url_list = admin_url( 'admin.php?page=sola-nl-menu-lists');
        $error = __('Please Select at least one list to send to. If you have not created a list, could you please create one - ', 'sola');
        $btn = __('Create a list', 'sola');
        $html = $error . '<a href=' . $url_list . ' class="button button-secondary">' . $btn . '</a>';
        return new WP_Error( 'Subject Error', $html);
      }
   } else {
      return new WP_Error( 'Subject Error',
      __( 'Please Enter a Subject', 'sola') );
   }
}

function add_my_error() {
    global $wp;
    $wp->add_query_var('my_error');
}

function sola_nl_get_camps($limit, $page, $order = "DESC", $orderBy = "date_created", $camp_name){
    $from = ($page - 1)*$limit;
    global $wpdb;
    global $sola_nl_camp_tbl;
    if((isset($camp_name)) && ($camp_name != "")){
        $sql = "SELECT * FROM `$sola_nl_camp_tbl` WHERE `subject` LIKE '%$camp_name%' ORDER BY `$orderBy` $order LIMIT $from , $limit";
    } else {
        $sql = "SELECT * FROM `$sola_nl_camp_tbl` ORDER BY `$orderBy` $order LIMIT $from , $limit";
    }
    return $wpdb->get_results($sql);
}
function sola_nl_total_camps(){
    global $wpdb;
    global $sola_nl_camp_tbl;
    $sql = "SELECT * FROM `$sola_nl_camp_tbl`";
    $wpdb->query($sql);
    return $wpdb->num_rows;
}
function sola_nl_get_camp_lists($camp_id){
   global $wpdb;
   global $sola_nl_list_tbl;
   global $sola_nl_camp_list_tbl;
    $sql = "SELECT `$sola_nl_list_tbl`.`list_name`, `$sola_nl_list_tbl`.`list_id`
            FROM  `$sola_nl_list_tbl`
            LEFT JOIN  `$sola_nl_camp_list_tbl` ON  `$sola_nl_list_tbl`.`list_id` =  `$sola_nl_camp_list_tbl`.`list_id`
            WHERE `$sola_nl_camp_list_tbl`.`camp_id` = '$camp_id'";
   return $wpdb->get_results($sql);
}
function sola_nl_delete_camp($camp_id = false){
    global $wpdb;
    global $sola_nl_camp_tbl;
    global $sola_nl_camp_list_tbl;
    if(!$camp_id){
        extract($_GET);
    }
    $wpdb->delete( $sola_nl_camp_list_tbl, array( 'camp_id' => $camp_id ));
    if($wpdb->delete( $sola_nl_camp_tbl, array( 'camp_id' => $camp_id ))){
       return true;
    } else {
       return new WP_Error( 'db_query_error',
                         __( 'Could not execute query', 'sola' ), $wpdb->last_error );
    }
}
function sola_nl_pause_camp($camp_id = false){
    global $wpdb;
    global $sola_nl_camp_tbl;
    if(!$camp_id){
        extract($_GET);
    }
    if ($wpdb->query(
        $wpdb->prepare(
            "UPDATE `$sola_nl_camp_tbl` SET `status` = %d WHERE `camp_id` = %d LIMIT 1",
            9, $camp_id
        )
    )) {
        return true;
    } else {
       return new WP_Error( 'db_query_error', __( 'Could not execute query', 'sola' ), $wpdb->last_error );
    }
}
function sola_nl_resume_camp($camp_id = false){
    global $wpdb;
    global $sola_nl_camp_tbl;
    if(!$camp_id){
        extract($_GET);
    }
    if ($wpdb->query(
        $wpdb->prepare(
            "UPDATE `$sola_nl_camp_tbl` SET `status` = %d WHERE `camp_id` = %d LIMIT 1",
            3, $camp_id
        )
    )) {
        return true;
    } else {
       return new WP_Error( 'db_query_error', __( 'Could not execute query', 'sola'), $wpdb->last_error );
    }
}
function sola_nl_get_camp_details($camp_id){
    global $wpdb;
    global $sola_nl_camp_tbl;
    $sql = "SELECT * FROM `$sola_nl_camp_tbl` WHERE `camp_id` = '$camp_id'";
    return $wpdb->get_row($sql);
}
function sola_nl_check_if_selected_list_camp($list_id, $camp_id){
   global $wpdb;
   global $sola_nl_camp_list_tbl;
   $sql = "SELECT * FROM `$sola_nl_camp_list_tbl` WHERE `list_id` = '$list_id' AND `camp_id` = '$camp_id'";
   if($wpdb->get_row($sql)){
      return true;
   } else {
      return false;
   }
}
function sola_nl_update_camp(){
   global $wpdb;
   global $sola_nl_camp_tbl;
   extract($_POST);
   if($subject){
      if($sub_list){

         if ($wpdb->update(
            $sola_nl_camp_tbl,
            array(
               'subject' => sanitize_text_field($_POST['subject'])
            ),
            array( 'camp_id' => intval($_POST['camp_id']) ),
            array(
               '%s'
            ),
            array( '%d' )
         ) === FALSE) {
            return new WP_Error( 'db_query_error',
                              __( 'Could not execute query', 'sola' ), $wpdb->last_error );
         } else {
            sola_nl_add_camp_list($sub_list, $camp_id);
            return true;
         }
      } else {
         return new WP_Error( 'Subject Error',
         __( 'Please Select at least one list to send to', 'sola' ) );
      }
   } else {
      return new WP_Error( 'Subject Error',
      __( 'Please Enter a Subject', 'sola' ) );
   }
}
function sola_nl_get_letter($camp_id, $theme_id = null){
    global $wpdb;
    global $sola_nl_camp_tbl;
    global $sola_nl_themes_table;

    $sql = "SELECT * FROM `$sola_nl_camp_tbl` WHERE `camp_id` = '$camp_id'";
    $result = $wpdb->get_row($sql);

    if ($result->action == 3 && ($result->email == "" || !$result->email)) {
        /* if automatic post notification, and its a new campaign (blank email template), put in standard template for automatic post notifications */
        if ($theme_id == 2) {
            $letter = sola_nl_automatic_post_default_template(2);
        } else {
            $letter = sola_nl_automatic_post_default_template(1);
        }

    } else if ($result->action == 4 && ($result->email == "" || !$result->email)){

        if ($theme_id == 2) {
            $letter = sola_nl_automatic_subscriber_default_template(2);
        } else {
            $letter = sola_nl_automatic_subscriber_default_template(1);
        }

    } else if ($result->action == 5 && ($result->email == "" || !$result->email)){

        if ($theme_id == 2) {
            $letter = sola_nl_automatic_user_default_template(2);
        } else {
            $letter = sola_nl_automatic_user_default_template(1);
        }

    } else {

        if($result->email){
            $letter = stripslashes($result->email);
        } else {
            if( $theme_id == '0' ){ $theme_id = '1'; }

            $sql = "SELECT * FROM `$sola_nl_themes_table` WHERE `theme_id` = '1'";
            
            $result = $wpdb->get_row($sql);

            $letter = stripslashes($result->theme_html);
        }
    }

    return $letter;
}

function sola_nl_finish_camp($type, $date, $from = false, $from_name = false, $reply_to = false, $reply_name = false, $camp_id = false, $sub_list = false, $auto = false){
    global $wpdb;
    global $sola_nl_camp_tbl;

    if (isset($_POST['sent_from'])) { $from = esc_attr($_POST['sent_from']); }
    if (isset($_POST['sent_from_name'])) { $from_name = esc_attr($_POST['sent_from_name']); }
    if (isset($_POST['reply_to'])) { $reply_to = esc_attr($_POST['reply_to']); }
    if (isset($_POST['reply_to_name'])) { $reply_name = esc_attr($_POST['reply_to_name']); }
    if (isset($_POST['camp_id'])) { $camp_id = esc_attr($_POST['camp_id']); }
    if (isset($_POST['sub_list'])) {
        $sub_list = $_POST['sub_list']; }
    else if($auto){
        $sub_list = $sub_list;
    } else {
        $sub_list = $camp_id;
    }

    if (!$type || !$date || !$from || !$from_name || !$reply_to || !$reply_name || !$camp_id || !$sub_list) {
        return new WP_Error( 'Campaign Error',
			__( 'Cannot finish campaign in database','sola' ), __( 'Missing variable','sola' ) );
    }

    $limit = get_option('sola_nl_send_limit_qty');
    if($wpdb->update(
            $sola_nl_camp_tbl,
            array(
               'sent_from' => $from,
               'sent_from_name' => $from_name,
               'reply_to' => $reply_to,
               'reply_to_name' => $reply_name,
               'status' => $type,
               'time_frame_qty' => $limit,
               'schedule_date' => $date
            ),
            array( 'camp_id' => $camp_id ),
            array(
                '%s',
                '%s',
                '%s',
                '%s',
                '%d',
                '%d',
            ),
            array( '%d' )
         )=== FALSE) {
      return new WP_Error( 'db_query_error',
			__( 'Could not execute query', 'sola'), $wpdb->last_error );
   } else {
      sola_nl_add_camp_list($sub_list,$camp_id );
      return true;
   }
}

function sola_nl_add_subs_to_camp($camp_id){
//    var_dump('running sola_nl_add_subs_to_camp');
    global $wpdb;
    global $sola_nl_camp_subs_tbl;
    global $sola_nl_camp_list_tbl;
    global $sola_nl_subs_list_tbl;
    global $sola_nl_subs_tbl;
    $sql = "SELECT * FROM `$sola_nl_camp_subs_tbl` WHERE `camp_id` = '$camp_id'";
    $wpdb->query($sql);
    $check = $wpdb->num_rows;
    $values = "";
    if($check == false){
        $limit = sola_nl_ml();
        $sql = "SELECT `$sola_nl_subs_list_tbl`.`sub_id`
                FROM `$sola_nl_camp_list_tbl`
                LEFT JOIN `$sola_nl_subs_list_tbl`
                ON `$sola_nl_camp_list_tbl`.`list_id`= `$sola_nl_subs_list_tbl`.`list_id`
                    LEFT JOIN `$sola_nl_subs_tbl`
                    ON `$sola_nl_subs_tbl`.`sub_id` = `$sola_nl_subs_list_tbl`.`sub_id`
                WHERE `camp_id` = '$camp_id' AND `status` = 1

                GROUP BY `sub_id`
                LIMIT $limit";

        $sub_ids = $wpdb->get_results($sql);
//        echo $sql;
//        var_dump($sub_ids);

        $insertsql = "INSERT INTO `$sola_nl_camp_subs_tbl` (`id`, `camp_id`,`sub_id`, `status`) VALUES ";
        $i = 1;
        foreach($sub_ids as $sub_id){
            if($i != 1){
                $values .= ",";
            }
            $values .= " ('', '$camp_id', '$sub_id->sub_id','0')";
            $i++;
        }
        $wpdb->query($insertsql.$values);

//        var_dump($wpdb);
//    exit();
    }
}

function sola_nl_total_camp_subs($camp_id){
    global $wpdb;
    global $sola_nl_camp_subs_tbl;

    $sql = "SELECT COUNT(*) as `total`
        FROM `$sola_nl_camp_subs_tbl`
        WHERE `camp_id` = '$camp_id'";
    $result = $wpdb->get_row($sql);
    return $result->total;
}

//GET ALL EMAILS TO SEND LINKED TO CAMPAIGN
function sola_nl_camp_sub_emails($camp_id, $limit = false){
    global $wpdb;
    global $sola_nl_camp_subs_tbl;
    global $sola_nl_subs_tbl;
    $sql = "SELECT `$sola_nl_subs_tbl`.`sub_email`
            FROM `$sola_nl_camp_subs_tbl`
            LEFT JOIN `$sola_nl_subs_tbl`
            ON `$sola_nl_subs_tbl`.`sub_id` = `$sola_nl_camp_subs_tbl`.`sub_id`
            WHERE `$sola_nl_subs_tbl`.`status` = 1
                AND `$sola_nl_camp_subs_tbl`.`camp_id` = '$camp_id'
                AND `$sola_nl_camp_subs_tbl`.`status` = 0
                ";
    if($limit){
        $sql.= $limit;
    }
    $results = $wpdb->get_results($sql);
    $emails = array();
    foreach($results as $result){
        $emails[] .= $result->sub_email;
    }
    return $emails;
}
// get all subscribers info linked to campaign
function sola_nl_camp_subs($camp_id, $limit = false){
    global $wpdb;
    global $sola_nl_camp_subs_tbl;
    global $sola_nl_subs_tbl;
    $sql = "SELECT `$sola_nl_subs_tbl`.`sub_email`, `$sola_nl_subs_tbl`.`sub_id`, `$sola_nl_subs_tbl`.`sub_key`, `$sola_nl_subs_tbl`.`sub_name`
            FROM `$sola_nl_camp_subs_tbl`
            LEFT JOIN `$sola_nl_subs_tbl`
            ON `$sola_nl_subs_tbl`.`sub_id` = `$sola_nl_camp_subs_tbl`.`sub_id`
            WHERE `$sola_nl_subs_tbl`.`status` = 1
                AND `$sola_nl_camp_subs_tbl`.`camp_id` = '$camp_id'
                AND `$sola_nl_camp_subs_tbl`.`status` = 0
                ";
    if($limit){
        $sql.= " LIMIT ".$limit;
    }
    $results = $wpdb->get_results($sql);
    if($results){
        return $results;
    } else {
        return false;
    }
}

function sola_nl_send_notification($subject, $body){
    if(get_option("sola_nl_notifications") == 1){
        $to = get_option("sola_nl_email_note");
        wp_mail($to , $subject, $body );
    }
}
function sola_nl_get_camp_stats($camp_id, $status, $sent = false){
    global $wpdb;
    global $sola_nl_camp_subs_tbl;
    if($status) $status = "status = '$status' AND";
    $sql = "SELECT COUNT(*) as `total` FROM `$sola_nl_camp_subs_tbl` WHERE $status camp_id = '$camp_id'";
    if($sent) {
        $sql.= " AND `status` <> 0";
    }
    $result = $wpdb->get_row($sql);
    return $result->total;
}
function sola_nl_get_camp_subs($camp_id, $sent = false){
    global $wpdb;
    global $sola_nl_camp_subs_tbl;
    $sql = "SELECT * FROM `$sola_nl_camp_subs_tbl` WHERE `camp_id` = '$camp_id'";
    if($sent){
        $sql.= " AND `status` <> 0";
    }
    return $wpdb->get_results($sql);
}
function sola_nl_get_camp_subs_errors($camp_id){
    global $wpdb;
    global $sola_nl_camp_subs_tbl;
    $sql = "SELECT * FROM `$sola_nl_camp_subs_tbl` WHERE `camp_id` = '$camp_id' AND `status` = 9";
    return $wpdb->get_results($sql);
}
function sola_nl_create_page($slug , $title, $content){
    // Initialize the post ID to -1. This indicates no action has been taken.
    $post_id = -1;

    // Setup the author, slug, and title for the post
    $author_id = 1;

    $post_type = "page";

    // If the page doesn't already exist, then create it
    $sola_check_page = get_page_by_title( $title ,'',$post_type);
    if( $sola_check_page == null ) {

            // Set the page ID so that we know the page was created successfully
            $post_id = wp_insert_post(
                array(
                    'comment_status'	=>	'closed',
                    'ping_status'	=>	'closed',
                    'post_author'	=>	$author_id,
                    'post_name'		=>	$slug,
                    'post_title'	=>	$title,
                    'post_status'	=>	'publish',
                    'post_type'		=>	$post_type,
                    'post_content'      =>      $content
                )
            );
            return $post_id;

    // Otherwise, we'll stop and set a flag
    } else {

        // Arbitrarily use -2 to indicate that the page with the title already exists

        return $sola_check_page->ID;


        //$post_id = -2;

    } // end if
}
// getting link to page to approve account
function sola_nl_wp_post_data(){

    global $wpdb;
    global $sola_nl_subs_tbl;
    global $sola_nl_camp_tbl;

    if(isset($_GET["action"]) && isset($_GET["sub_key"]) && $_GET["action"] == "sola_nl_confirmation" && $_GET["sub_key"]){

        $sql = "SELECT * FROM `$sola_nl_camp_tbl` WHERE `type` = 2 AND `action` = 4";

        $auto_campaign = $wpdb->get_results($sql);

        if($auto_campaign){
            foreach($auto_campaign as $result){

                $auto_camp_id = $result->camp_id;

                $auto_data = $result->automatic_data;
                $raw_auto_data = maybe_unserialize($auto_data);

                $time_frame = intval($raw_auto_data['data']['timeafter']);
                $amount_of_time = intval($raw_auto_data['data']['timeqty']);

                $the_current_time = current_time('timestamp');

                if($time_frame == 1){
                    //Minutes
                    $time = date('Y-m-d H:i:s', strtotime('+'.$amount_of_time.' Minutes', $the_current_time));
                } else if ($time_frame == 2){
                    //Hours
                    $time = date('Y-m-d H:i:s', strtotime('+'.$amount_of_time.' Hours', $the_current_time));
                } else if ($time_frame == 3){
                    //Days
                    $time = date('Y-m-d H:i:s', strtotime('+'.$amount_of_time.' Days', $the_current_time));
                } else if ($time_frame == 4){
                    //Weeks
                    $time = date('Y-m-d H:i:s', strtotime('+'.$amount_of_time.' Weeks', $the_current_time));
                } else {
                    //Immediately
                    $time = date("Y-m-d H:i:s",current_time('timestamp'));
                }
                $wpdb->update($sola_nl_subs_tbl, array("status" => 1, "sola_nl_mail_sending_time" => $time) , array( "sub_key" => $_GET["sub_key"]));
            }
        } else {
            $wpdb->update($sola_nl_subs_tbl, array("status" => 1, "sola_nl_mail_sent" => 1) , array( "sub_key" => $_GET["sub_key"]));
        }
    }

    if(isset($_GET["action"]) && isset($_GET["sub_key"]) &&$_GET["action"] == "sola_nl_unsubscribe" && $_GET["sub_key"]){
        $wpdb->update( $sola_nl_subs_tbl, array("status" => 0) , array( "sub_key" => $_GET["sub_key"]));
    }

    if(isset($_GET["action"]) && $_GET["action"] == "sola_nl_redirect"){

        global $sola_nl_link_tracking_table;
        global $sola_nl_advanced_link_tracking_table;

        $link_id = $_GET["sola_link_id"];

        $row = $wpdb->get_row(
            $wpdb->prepare("
		SELECT * FROM `$sola_nl_link_tracking_table` WHERE `id` = %d ",
                $link_id
            )
        );


        $clicked = $row->clicked + 1;
        $wpdb->update( $sola_nl_link_tracking_table,
                array('clicked'=>$clicked, "id"=>$link_id),
                array('id'=>$link_id),
                array('%d', '%d'));

//        $sub_id = $row->sub_id;
//        $camp_id = $row->camp_id;
//        $link_name = $row->link_name;
//
//        $ip_address = $_SERVER['REMOTE_ADDR'];
//        $user_agent = $_SERVER['HTTP_USER_AGENT'];
//        $current_date = date("Y-m-d H:i:s",current_time('timestamp'));
//        $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip_address));
//
//            if($query && $query['status'] == 'success') {
//
//                $country = $query['country'];
//                $region_name = $query['regionName'];
//                $time_zone = $query['timezone'];
//                $isp = $query['isp'];
//                $lat = $query['lat'];
//                $lon = $query['lon'];
//            }
//
//        $sql = "INSERT INTO `$sola_nl_advanced_link_tracking_table` SET
//                `sub_id` = '$sub_id',
//                `camp_id` = '$camp_id',
//                `link_name` = '$link_name',
//                `user_agent` = '$user_agent',
//                `ip_address` = '$ip_address',
//                `country` = '$country',
//                `region_name` = '$region_name',
//                `timezone` = '$time_zone',
//                `isp` = '$isp',
//                `lat` = '$lat',
//                `lon` = '$lon',
//                `date_clicked` = '$current_date'";
//        $wpdb->Query($sql);

        $link = $row->link;

        header('Location: '.$link);
        exit();
    }
}

function sola_nl_save_style($styles, $camp_id) {
    global $wpdb;
    global $sola_nl_style_table;
    $style_array = array();
    $sql = "";
    //var_dump($styles);
    foreach($styles as $style){
        if(stripos($style["css"], "color") || $style["css"] == "color"){
           $value = $style['value'];
        } else {
         $value = $style['the_value'];
        }
        $style_array[$style['array_name']][$style['css']] = $value;

//       $style_1 = $style['style'];
//       if(stripos($style["css"], "color") || $style["css"] == "color"){
//           $value = $style['value'];
//       } else {
//        $value = $style['the_value'];
//       }
//
//
//       $id = $style['id'];
//       $sql = "UPDATE `$sola_nl_style_table` SET `style` = '$style_1', `value` = '$value' WHERE `id` = '$id'; ";
//       if($wpdb->query($sql)){
//            echo true;
//        } else {
//            echo "There is a problem";
//        }
    }
    return $style_array;

}
function sola_nl_get_font_family_id($font_family){
    global $wpdb;
    global $sola_nl_fonts_table;
    $sql = "SELECT * FROM `$sola_nl_fonts_table` WHERE `font_family` = '$font_family'";
    $result = $wpdb->get_row($sql);
    return $result->id;
}

//short code function confirm mail link
function sola_nl_confirm_link($atr , $text = null){
    global $wpdb;
    global $sola_nl_subs_tbl;
    $sub_email = sanitize_email($_POST["sub_email"]);
    $sql = "SELECT * FROM `$sola_nl_subs_tbl` WHERE `sub_email` = '$sub_email'";
    $result = $wpdb->get_row($sql);
    $sub_key =  $result->sub_key;
    $page_url = get_permalink( get_option("sola_nl_confirm_page"));

    if (stristr($page_url,"?") === FALSE) {
        return "<a href='$page_url?action=sola_nl_confirmation&sub_key=$sub_key'>$text</a>";
    } else {
        return "<a href='$page_url&action=sola_nl_confirmation&sub_key=$sub_key'>$text</a>";
    }
}

function sola_nl_get_first_name() {
    global $sola_global_subid;
    
    if (isset($sola_global_subid)) {
        global $wpdb;
        global $sola_nl_subs_tbl;
        $result = $wpdb->get_row(
        $wpdb->prepare(
                " SELECT `sub_name` FROM `$sola_nl_subs_tbl`  WHERE `sub_id` = %d  LIMIT 1",
                $sola_global_subid
            )
        );
        return $result->sub_name;
    }
}
function sola_nl_get_last_name() {
    global $sola_global_subid;
    
    if (isset($sola_global_subid)) {
        global $wpdb;
        global $sola_nl_subs_tbl;
        $result = $wpdb->get_row(
        $wpdb->prepare(
                " SELECT `sub_last_name` FROM `$sola_nl_subs_tbl`  WHERE `sub_id` = %d  LIMIT 1",
                $sola_global_subid
            )
        );
        return $result->sub_last_name;
    }
}

//short code function to show name in confirm mail
function sola_nl_sub_name(){
    return $_POST['sub_name'];
}
//short code function - unsubscribe href
function sola_nl_unsubscribe_href(){
    global $sola_global_subid;
//    var_dump($sola_global_subid);
//    $sola_global_subid = 12;
//    $sub_key = 12;
    if(isset($_POST['subscriber'])){
        extract($_POST['subscriber']);
    }
    else if( isset($_GET['sub_id']) ) {
        if ($_GET['sub_id'] == "0") { /* came from "preview" link in admin */ return ""; }
        else {
            $subscriber = sola_nl_get_subscriber(intval($_GET['sub_id']));
            $sub_key = $subscriber->sub_key;
        }
    }
    else {
        $subscriber = sola_nl_get_subscriber($sola_global_subid);
//        var_dump($subscriber);
        if (isset($subscriber->sub_key)) { $sub_key = $subscriber->sub_key; } else { $sub_key = ""; }
    }
    $page_url = get_permalink( get_option("sola_nl_unsubscribe_page"));

    if (stristr($page_url,"?") === FALSE) {
        return $page_url."?sub_key=".$sub_key."&action=sola_nl_unsubscribe";
    } else {
        return $page_url."&sub_key=".$sub_key."&action=sola_nl_unsubscribe";
    }



}
function sola_nl_unsubscribe_text(){
    return get_option('sola_nl_unsubscribe');
}
function sola_nl_view_browser_text(){
    return get_option('sola_nl_browser_text');
}
//Short Code to view in browser
function sola_nl_view_browser(){
    global $sola_global_subid;
    global $sola_global_campid;

    if(isset($_POST['subscriber'])){
        extract($_POST['subscriber']);
        return site_url("?action=sola_nl_browser&camp_id=".intval($_POST['camp_id'])."&sub_id=".$sub_id);
    } else if (isset($sola_global_subid)) {
        return site_url("?action=sola_nl_browser&camp_id=".$sola_global_campid."&sub_id=".$sola_global_subid);
    } else if (isset($_GET['camp_id']) && (isset($_GET['sub_id']) && intval($_GET['sub_id']) == 0)) {
        return site_url("?action=sola_nl_browser&camp_id=".intval($_GET['camp_id'])."&sub_id=".intval($_GET['sub_id']));
    } else {
        return site_url("?action=sola_nl_browser&camp_id=".$sola_global_campid);
    }
}
function sola_return_error($data, $echo = true ) {
    if( $echo ){
        echo "<div id=\"message\" class=\"error\"><p><strong>".$data->get_error_message()."</strong><blockquote>".$data->get_error_data()."</blockquote></p></div>";
    }
    sola_write_to_error_log($data);
}
function sola_write_to_error_log($data) {
    $upload_dir = wp_upload_dir();
    if (sola_nl_error_directory()) {
        $content = "\r\n".date("Y-m-d H:i:s").": ".$data->get_error_message() . " -> ". $data->get_error_data();
        $fp = fopen($upload_dir['basedir'].'/sola'."/sola_error_log.txt","a+");
        fwrite($fp,$content);
    }

    error_log(date("Y-m-d H:i:s"). ": ".SOLA_PLUGIN_NAME . ": " . $data->get_error_message() . "->" . $data->get_error_data());

}
function sola_nl_error_directory() {
    $upload_dir = wp_upload_dir();

    if (!file_exists($upload_dir['basedir'].'/sola')) {
        wp_mkdir_p($upload_dir['basedir'].'/sola');
        $content = "Error log created";
        $fp = fopen($upload_dir['basedir'].'/sola'."/sola_error_log.txt","w+");
        fwrite($fp,$content);
    }

    return true;

}

function sola_nl_return_error_log() {
    $upload_dir = wp_upload_dir();

    $fh = @fopen($upload_dir['basedir'] . '/sola'."/sola_error_log.txt","r");
    $filesize = @filesize($upload_dir['basedir'] + '/sola'."/sola_error_log.txt");
    if (!$filesize || $filesize == 0 || $filesize > 16384) { $filesize = 16384; }
    $ret = "";
    if ($fh) {
        for ($i=0;$i<10;$i++) {
            $visits = fread($fh,$filesize);
            $ret .= $visits;
        }
    } else {
            $ret .= __("No errors to report on","sola");
    }
    return $ret;

}
function sola_nl_camp_links($camp_id){
    global $wpdb;
    global $sola_nl_link_tracking_table;
    $results = $wpdb->get_results(
	$wpdb->prepare(
            " SELECT * FROM `$sola_nl_link_tracking_table`  WHERE `camp_id` = %d  GROUP BY `link_name` ORDER BY SUM(clicked) DESC",
            $camp_id
        )
    );
    return $results;
}


function sola_nl_ml(){

    $a = 16;
    $b = 19;
    return round(sqrt(pow($a,2)+pow($b, 2)))*100;

}


function sola_sending_mails_tool_bar( $wp_admin_bar ) {
    $args = array(
        'id'    => 'sola_progress_bar',
        'meta'  => array( 'class' => 'sending_mails_toolbar_progress' )
    );
    $wp_admin_bar->add_node( $args );
}
function sola_sending_mails_tool_bar_name($wp_admin_bar){
    $args = array(
        'id'    => 'sola_toolbar_label',
        'meta'  => array( 'class' => 'sola_progress_label' )
    );
    $wp_admin_bar->add_node( $args );
}
function sola_sending_mails_tool_bar_pending($wp_admin_bar){
    $args = array(
        'id'    => 'sola_toolbar_pending',
        'meta'  => array( 'class' => 'sola_progress_pending' )
    );
    $wp_admin_bar->add_node( $args );
}

function sola_cts(){
    if(function_exists('sola_nl_register_pro_version')){
        return true;
    }
    global $wpdb;
    global $sola_nl_subs_tbl;
    $sql = "SELECT * FROM `$sola_nl_subs_tbl`";
    $wpdb->query($sql);
    if($wpdb->num_rows >= sola_nl_ml()){
        return false;
    } else {
        return true;
    }
}
function sola_se(){
    //$data = "WW91IGNhbiBvbmx5IGhhdmUgYSBtYXhpbXVtIG9mIDI1MDAgc3Vic2NyaWJlcnMhIElmIHlvdSBwdXJjaGFzZSB0aGUgcHJvIHlvdSBjYW4gaGF2ZSB1bmxpbWl0dGVkIHN1YnNjcmliZXJzLiA= ";
    //return base64_decode($data);
    return __('You can only have a maximum of '.sola_nl_ml().'subscribers! Go','sola')."<a target='_BLANK' href='http://solaplugins.com/plugins/sola-newsletters/?utm_source=plugin&utm_medium=link&utm_campaign=subscriber_limit' style='color:#EC6851;'>".__('Premium','sola')."</a>".__(' to get unlimited subscribers.','sola');
    //return "You can only have a maximum of ".sola_nl_ml()." subscribers! Go Premium to get unlimited subscribers.";
}
function sola_get_theme_basic(){
    global $sola_nl_themes_table;
    global $wpdb;
    $sql = "SELECT * FROM `$sola_nl_themes_table` WHERE `theme_id` = 1";
    $results = $wpdb->get_results($sql);
    return $results;
}
//function sola_set_theme($theme_id, $camp_id){
//    global $sola_nl_camp_tbl;
//    echo $sola_nl_camp_tbl;
//    global $wpdb;
//    $check = $wpdb->query(
//	$wpdb->prepare(
//            "UPDATE `$sola_nl_camp_tbl` SET `theme_id` = %d WHERE `camp_id` = %d LIMIT 1",
//            $theme_id, $camp_id
//        )
//    );
//    if($check === false){
//        return new WP_Error( 'db_query_error', __( 'Could not execute query', 'sola'), $wpdb->last_error );
//    } else {
//        return true;
//    }
//}
function sola_set_theme($theme_array, $camp_id) {
    global $sola_nl_camp_tbl;
    global $wpdb;


    if (!$theme_array[0] || $theme_array[0] == "") {
        return new WP_Error( 'sola_error', __( 'Please select a theme before continuing', 'sola'), '' );
    }

    $theme_dir = $theme_array[0];
    $theme_url = $theme_array[1];

    $site_url = get_site_url();
    /* check for trailing forward slash */
    if (substr($site_url, -1) != "/") { $site_url = $site_url."/"; }


    $theme_name = basename($theme_dir);
    $theme_data = sola_nl_get_theme_data($theme_dir);


    $serialized_styles = maybe_serialize(sola_nl_save_style($theme_data['styles'],null));

    /* change reference of ../ and ./ to the actual URL of the theme */
    $theme_html = $theme_data['html'];

    sola_nl_register_template_shortcode("sola_nl_theme_url", $theme_url); //Replace the default url with the themes url
    
    $theme_html = apply_filters("sola_nl_filter_theme_html_before_insert", $theme_html);

    $theme_html = str_replace("../", $site_url, $theme_html);
    $theme_html = str_replace("./", $site_url, $theme_html);

    $check = $wpdb->query(
	$wpdb->prepare(
            "UPDATE `$sola_nl_camp_tbl` SET `theme_data` = %s, `email` = %s, `styles` = %s WHERE `camp_id` = %d LIMIT 1",
            json_encode($theme_array), $theme_html,$serialized_styles, $camp_id
        )
    );
    if($check === false){
        return new WP_Error( 'db_query_error', __( 'Could not execute query', 'sola'), $wpdb->last_error );
    } else {
        return true;
    }

    exit();


}

function sola_get_camp_theme_id($camp_id){
    global $wpdb;
    global $sola_nl_camp_tbl;
    $sql = "SELECT * FROM `$sola_nl_camp_tbl` WHERE `camp_id` = $camp_id";
    $row = $wpdb->get_row($sql);
    if($row){
        return $row->theme_id;
    } else {
        return 1;
    }
}
function sola_nl_feedback_head() {
    if (function_exists('curl_version')) {

        $request_url = "http://www.solaplugins.com/apif/rec.php";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $request_url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST);
        curl_setopt($ch, CURLOPT_REFERER, $_SERVER['HTTP_HOST']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);

        curl_close($ch);

    }
    return;
}
function sola_nl_init_post_processing(){
    if(isset($_GET['action'])){
        if ($_GET['action'] == "sola_csv_export") {
            global $wpdb;
            $fileName = $wpdb->prefix.'sola_nl_subscribers.csv';

            header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
            header('Content-Description: File Transfer');
            header("Content-type: text/csv");
            header("Content-Disposition: attachment; filename={$fileName}");
            header("Expires: 0");
            header("Pragma: public");
            $fh = @fopen( 'php://output', 'w' );

            $sola_nl_subscribers_table = $wpdb->prefix.'sola_nl_subscribers';
            $sola_nl_subscribers_list_table = $wpdb->prefix.'sola_nl_subscribers_list';

            if( isset( $_GET['list_id'] ) && $_GET['list_id'] != "" ){
                $query = "SELECT * FROM $sola_nl_subscribers_table LEFT JOIN $sola_nl_subscribers_list_table ON $sola_nl_subscribers_table.sub_id = $sola_nl_subscribers_list_table.sub_id WHERE $sola_nl_subscribers_list_table.list_id = ".intval( $_GET['list_id'] );
            } else {
                $query = "SELECT * FROM $sola_nl_subscribers_table";    
            }

            $results = $wpdb->get_results( $query, ARRAY_A );

            $headerDisplayed = true;
            foreach ( $results as $data ) {
                // Add a header row if it hasn't been added yet
                if ( !$headerDisplayed ) {
                    // Use the keys from $data as the titles
                    fputcsv($fh, array_keys($data));
                    $headerDisplayed = true;
                }
                // Put the data into the stream
                fputcsv($fh, $data);
            }
            // Close the file
            fclose($fh);
            // Make sure nothing else is sent, our file is done
            die();
        }
        if ($_GET['action'] == 'sola_nl_tracker') {
            sola_nl_tracker(intval($_GET['camp_id']), intval($_GET['sub_id']));
        }
        if ($_GET['action'] == 'sola_nl_browser') {
            $camp = sola_nl_get_camp_details(intval($_GET['camp_id']));
            if($camp->action == 3){

                global $sola_global_campid;
                $sola_global_campid = $camp->camp_id;

                $letter = sola_nl_get_letter($camp->camp_id);

                $inserted_data = sola_nl_build_automatic_content($camp->camp_id,false);

                $table = preg_replace('/<table id="sola_nl_automatic_container"(.*?)<\/table>/is', $inserted_data, $letter);

                if($table == ''){
                    echo trim(do_shortcode($letter));
                } else {
                    echo trim(do_shortcode($table));
                }

                die();
            } else {
                $letter = sola_nl_get_letter(intval($_GET['camp_id']));
                if (isset($_GET['sub_id'])) { $sub_id = intval($_GET['sub_id']); } else { $sub_id = 0; }
                echo do_shortcode(sola_nl_mail_body($letter, $sub_id, intval($_GET['camp_id'])));
                die();
            }
        }
    }
}
function sola_nl_tracker($camp_id, $sub_id){
    global $wpdb;
    global $sola_nl_camp_subs_tbl;
    $results = $wpdb->get_row(
	$wpdb->prepare(
            " SELECT * FROM `$sola_nl_camp_subs_tbl` WHERE `camp_id` = %d AND `sub_id` = %d",
            $camp_id, $sub_id, 0
        )
    );
    $opens = $results->opens + 1;
    $now = date("Y-m-d H:i:s");
    $wpdb->update(
        $sola_nl_camp_subs_tbl,
        array(
            'status' => 2,
            'date_open' => $now,
            'opens'=>$opens
        ),
        array(
            'camp_id' => $camp_id,
            'sub_id' => $sub_id
            ),
        array(
            '%d',
            '%s',
            '%d'
        ),
        array( '%d', '%d' )
    );

    header('Content-Type: image/png');
    //returns 1x1px image

    echo base64_decode('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAAApJREFUCNdjYAAAAAIAAeIhvDMAAAAASUVORK5CYII=');
    die();
}

function ordinal($i){
    $l = substr($i,-1);
    $s = substr($i,-2,-1);

    return (($l==1&&$s==1)||($l==2&&$s==1)||($l==3&&$s==1)||$l>3||$l==0?'th':($l==3?'rd':($l==2?'nd':'st')));
}

function sola_nl_on_registration($user_id) {

    global $wpdb;
    global $sola_nl_camp_tbl;

    $user_meta = get_user_meta($user_id);
    $user_data = get_userdata($user_id);

    $user_role = $user_data->roles[0];

    $sql = "SELECT * FROM $sola_nl_camp_tbl WHERE `type` = 2 AND `action` = 5";

    $results = $wpdb->get_results($sql);

    foreach($results as $result){

        $auto_camp_id = $result->camp_id;

        $auto_data = $result->automatic_data;
        $raw_auto_data = maybe_unserialize($auto_data);

        $role = intval($raw_auto_data['data']['role']);
        if($role == 1 || $role == 2 && $user_role == 'administrator' || $role == 3 && $user_role == 'editor' || $role == 4 && $user_role == 'author' || $role == 5  && $user_role == 'contributor' || $role == 6 && $user_role == 'subscriber'){

            $time_frame = intval($raw_auto_data['data']['timeafter']);
            $amount_of_time = intval($raw_auto_data['data']['timeqty']);

            $the_current_time = current_time('timestamp');
            if($time_frame == 1){
                //Minutes
                $time = date('Y-m-d H:i:s', strtotime('+'.$amount_of_time.' Minutes', $the_current_time));
            } else if ($time_frame == 2){
                //Hours
                $time = date('Y-m-d H:i:s', strtotime('+'.$amount_of_time.' Hours', $the_current_time));
            } else if ($time_frame == 3){
                //Days
                $time = date('Y-m-d H:i:s', strtotime('+'.$amount_of_time.' Days', $the_current_time));
            } else if ($time_frame == 4){
                //Weeks
                $time = date('Y-m-d H:i:s', strtotime('+'.$amount_of_time.' Weeks', $the_current_time));
            } else {
                //Immediately
                $time = date("Y-m-d H:i:s",current_time('timestamp'));
            }

            add_user_meta($user_id, '_sola_nl_mail_sent', 0);
            add_user_meta($user_id, '_sola_nl_mail_sending_time', $time);

        }
    }
}

function sola_nl_on_publish_post( $post_id ){

    global $wpdb;
    global $sola_nl_camp_tbl;
    global $post;

    $termid = get_post_meta($post_id, '_termid', true);
    if ($termid == '') {
        // it's a new record carry on..
        $termid = 'update';
        update_post_meta($post_id, '_termid', $termid);
    } else {
        /* this is an update, do not continue as we will duplicate campaigns */
        update_post_meta($post_id, '_termid', $termid);
        return;
    }

    $sql = "SELECT * FROM $sola_nl_camp_tbl WHERE `type` = 2 AND `action` = 3";

    $results = $wpdb->get_results($sql);

    foreach($results as $result){

        $auto_camp_id = $result->camp_id;



//        var_dump("AUTOMATIC CAMPAIGN ID: ". $auto_camp_id);

        $auto_data = $result->automatic_data;
        $raw_auto_data = maybe_unserialize($auto_data);

        $type = $raw_auto_data['type'];

//        var_dump("TYPE: ".$type);
        if ($type == 5){

            $camp = sola_nl_get_camp_details($auto_camp_id);

            $lists = sola_nl_get_camp_lists($auto_camp_id);

            foreach ($lists as $list) {
                $list_id = $list->list_id;
                $new_lists[] = $list_id;
            }
            $type = 1; /* insert it as a normal campaign */

            $letter = sola_nl_get_letter($auto_camp_id);
//            var_dump("PREVIOUS LETTER: ".$letter);
//            echo $letter;

            $inserted_data = sola_nl_build_automatic_content($auto_camp_id,true);
//            var_dump("INSERTED DATA ".$inserted_data);
//            echo $inserted_data;

            $table = preg_replace('/<table id="sola_nl_automatic_container"(.*?)<\/table>/is', $inserted_data, $letter);

//            var_dump("NEW TABLE".$table);
//            echo $table;
//            exit();

            $subject = do_shortcode($camp->subject);
            $wpdb->insert($sola_nl_camp_tbl, array('camp_id'=>'', 'subject'=> $subject, 'theme_id' => $camp->theme_id, 'email' => $table, 'styles' => $camp->styles, 'type' => $type ));
            $camp_id = $wpdb->insert_id;

            $time = date("Y-m-d H:i:s",current_time('timestamp'));

            $checker = sola_nl_finish_camp(3, $time, $camp->sent_from, $camp->sent_from_name, $camp->reply_to, $camp->reply_to_name, $camp_id, $new_lists, $auto=true);
            if ( is_wp_error($checker) ) { sola_return_error($checker); }

            if (function_exists('sola_nl_add_subs_to_camp_pro')) {
                sola_nl_add_subs_to_camp_pro($camp_id);
            } else {
                sola_nl_add_subs_to_camp($camp_id);
            }
        }
    }
}

add_action ( 'publish_page', 'sola_nl_on_publish_page' );

function sola_nl_on_publish_page(){

}

//function add_sola_nl_meta_box(){
//    add_meta_box(
//        'sola_nl_meta_box',
//        __('Nifty Newsletters', 'sola'),
//        'sola_nl_meta_contents',
//        'post',
//        'side',
//        'high'
//    );
//}
//
//function sola_nl_meta_contents(){
//    global $post_id;
//    $is_include = get_post_meta($post_id, 'sola_nl_post_included');
//    if($is_include[0] == 1 || $is_include == false){
//        $checked = 'checked';
//    } else {
//        $checked = '';
//    }
//
//    echo '<form method="post" action="">
//            <p>
//                <input type="checkbox" name="sola_nl_include_this_post" '.$checked.'/>
//                <label for="sola_nl_include_this_post">'.__('Include This Post', 'sola').'</label>
//            </p>
//            <p><small>'.__("You can choose if you want this post to be included in an automated post campaign","sola").'</small></p>
//        </form>';
//}
//
//function sola_nl_save_meta_data($post_id){
//    if(isset($_REQUEST['sola_nl_include_this_post'])){
//        update_post_meta($post_id, 'sola_nl_post_included', 1);
//    } else {
//        update_post_meta($post_id, 'sola_nl_post_included', 0);
//    }
//}


function sola_nl_check_if_new_posts_exist($camp_id,$num_posts,$schedule_date) {

    global $wpdb;
    /*
    $args = array(
        'numberposts' => $num_posts,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_type' => 'post',

        'meta_query' => array(
            array(
              'key' => 'sola_nl_auto_sent_'.$camp_id,
              'compare' => 'NOT EXISTS'
            )
          ),
        'date_query' => array(
            array(
                'after' => $schedule_date
            )
        ),
    );
    */
    $args = array(
        'posts_per_page' => $num_posts,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_type' => 'post'
    );


    //$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
    $recent_posts = query_posts($args);
    //var_dump($recent_posts);
    $cnt = 0;
    foreach ($recent_posts as $post_data) {
        $key_value = get_post_meta( $post_data->ID, 'sola_nl_auto_sent_'.$camp_id );
        if (isset($key_value[0])) {
            unset($recent_posts[$cnt]);
        } else {
            /* leave in */
        }
        unset($key_value);
        $cnt++;


    }
    return $recent_posts;




}

function custom_auto_mail_send(){
    global $wpdb;
    global $sola_nl_camp_tbl;
    global $sola_nl_subs_tbl;
    global $sola_global_campid;
    global $sola_global_subid;
//    echo 'Running';
    /*
     * Check to see if there are any auto posts available
     */
    $sql = "SELECT * FROM $sola_nl_camp_tbl WHERE `type` = 2 AND `action` = 3";

    $results = $wpdb->get_results($sql);


    if($results){
        foreach($results as $result){

            $auto_camp_id = $result->camp_id;
//            echo "<h1>$auto_camp_id</h1>";

            $auto_data = $result->automatic_data;
            $raw_auto_data = maybe_unserialize($auto_data);

            // if not immediate but automatic post, create new campaign
            if ($raw_auto_data['type'] != 5 && $raw_auto_data['action'] == 3) {


//                    var_dump("type != 5 action = 3");

                    $current_time = date('Y-m-d H:i:s', current_time('timestamp'));

                    $scheduled_time = $raw_auto_data['automatic_scheduled_date'];
                    if($current_time >= $scheduled_time && $scheduled_time != '0000-00-00 00:00:00'){
                        echo 'Running Because Time Is Less Than Current';

                        $are_there_new_posts_to_email = sola_nl_check_if_new_posts_exist($auto_camp_id,$raw_auto_data['automatic_options_posts'],$raw_auto_data['automatic_scheduled_date']);
                        if ($are_there_new_posts_to_email != null) {
                            $auto_camp_id = $result->camp_id;
                            $auto_data = $result->automatic_data;
                            $raw_auto_data = maybe_unserialize($auto_data);

        //                    var_dump($raw_auto_data);

                            $camp = sola_nl_get_camp_details($auto_camp_id);

                            $lists = sola_nl_get_camp_lists($auto_camp_id);
//                            var_dump($lists);
                            foreach ($lists as $list) {
                                $list_id = $list->list_id;
                                $new_lists[] = $list_id;

        //                        var_dump($new_lists);
                            }



                            $type = 1; /* insert it as a normal campaign */

                            $letter = sola_nl_get_letter($auto_camp_id);


        //                    echo $letter;
        //                    exit();



                            $inserted_data = sola_nl_build_automatic_content($auto_camp_id,true);
        //                    echo $inserted_data;



        //                    $sola_global_campid = $auto_camp_id;

//                            var_dump("CAMP ID ". $auto_camp_id);
        //                    exit();
                            $table = preg_replace('/<table id="sola_nl_automatic_container"(.*?)<\/table>/is', $inserted_data, $letter);
        //                    $table = do_shortcode($table);

                            echo $table;

                            $subject = do_shortcode($camp->subject);

                            $wpdb->insert($sola_nl_camp_tbl, array('camp_id'=>'', 'subject'=> $subject, 'theme_id' => $camp->theme_id, 'email' => $table, 'styles' => $camp->styles, 'type' => $type ));
                            $camp_id = $wpdb->insert_id;
//                            var_dump("NEW CAMP ID = ".$camp_id);

                            global $sola_global_campid;
                            $sola_global_campid = $camp_id;



                            //$working_table = do_shortcode($table);
                            //echo $working_table;
        //                    echo 'Doing Update Below This';
                            //$wpdb->update($sola_nl_camp_tbl, array('email' => $working_table), array('camp_id' => $camp_id));





                            $checker = sola_nl_finish_camp(3, $current_time, $camp->sent_from, $camp->sent_from_name, $camp->reply_to, $camp->reply_to_name, $camp_id, $new_lists, $auto=true);

//                            print_r($new_lists);
                            var_dump('This will be the new campaign id '.$camp_id);
        //                    exit();

                            if ( is_wp_error($checker) ) { sola_return_error($checker); }

                            /* we need to have a check here to see if this works or not */
                            if (function_exists('sola_nl_add_subs_to_camp_pro')) {
                                sola_nl_add_subs_to_camp_pro($camp_id);
                            } else {
                                sola_nl_add_subs_to_camp($camp_id);
                            }
                        } else {
                            /* there are no new posts during this scheduled run */
                            var_dump("there are no new posts to send in this scheduled run");
                        }

                    }



                /* set the next scheduled run */
                $the_current_time = current_time('timestamp');
                var_dump("current time: ".date("Y-m-d H:i:s",$the_current_time));
                $type = $raw_auto_data['type'];
                $day = $raw_auto_data['data']['day'];
                var_dump($day);
                $custom_time = $raw_auto_data['data']['time'];
                var_dump($custom_time);


//                echo 'The time here';
//                $the_current_time = strtotime('2014-10-08 08:30:00');

                if($type == 1){
                //Daily
                if (strtotime(date("Y-m-d",$the_current_time)." ".$custom_time.":00") > $the_current_time) {
                    var_dump("current time less than time. set it for today");
                    $time = date('Y-m-d H:i:s', strtotime(date("Y-m-d",$the_current_time)." ".$custom_time.":00"));
                } else {
                    var_dump("current time greater than time, set it for next time");
                    $time = date('Y-m-d H:i:s', strtotime('+1 day '.$custom_time.':00', $the_current_time));
                }

                } else if ($type == 2){
                    //Weekly
                    if($day == 1) { $chosen_day = 'Monday'; }
                    else if ($day == 2) { $chosen_day = 'Tuesday'; }
                    else if ($day == 3) { $chosen_day = 'Wednesday'; }
                    else if ($day == 4) { $chosen_day = 'Thursday'; }
                    else if ($day == 5) { $chosen_day = 'Friday'; }
                    else if ($day == 6) { $chosen_day = 'Saturday'; }
                    else if ($day == 7) { $chosen_day = 'Sunday'; }

                    $time = date('Y-m-d H:i:s', strtotime("+1 Week " . $chosen_day.' '.$custom_time.':00', $the_current_time));
                } else {
                    $time = date('Y-m-d H:i:s', current_time('timestamp'));
                }
//                echo $time;
                $new_automatic_data = array(
                    'type' => $raw_auto_data['type'],
                    'action' => $raw_auto_data['action'],
                    'data' => array (
                        'day' => $raw_auto_data['data']['day'],
                        'time' => $raw_auto_data['data']['time'],
                        'daynum' => $raw_auto_data['data']['daynum'],
                        'timeafter' => $raw_auto_data['data']['timeafter'],
                        'timeqty' => $raw_auto_data['data']['timeqty'],
                        'role' => $raw_auto_data['data']['role']
                    ),
                    'automatic_layout' => $raw_auto_data['automatic_layout'],
                    'automatic_options_posts' => $raw_auto_data['automatic_options_posts'],
                    'automatic_options_columns' => $raw_auto_data['automatic_options_columns'],
                    'automatic_image' => $raw_auto_data['automatic_image'],
                    'automatic_author' => $raw_auto_data['automatic_author'],
                    'automatic_title' => $raw_auto_data['automatic_title'],
                    'automatic_content' => $raw_auto_data['automatic_content'],
                    'automatic_readmore' => $raw_auto_data['automatic_readmore'],

                    'automatic_scheduled_date' => $time,

                    'automatic_post_date' => $raw_auto_data['automatic_post_date'],
                    'automatic_post_length' => $raw_auto_data['automatic_post_length']
                );

                $serialized_auto_data = maybe_serialize($new_automatic_data);
                $wpdb->update($sola_nl_camp_tbl, array('automatic_data' => $serialized_auto_data), array('camp_id' => $auto_camp_id));

                var_dump("Next scheduled date set to ".$time);

            }
        }
    }

    /*
     * Check to see if there are any subscribers that need to be emailed.
     */
    $sql = "SELECT * FROM $sola_nl_subs_tbl WHERE `status` = 1 AND `sola_nl_mail_sent` = 0";
    $sub_results = $wpdb->get_results($sql);
//    var_dump($sub_results);
    if($sub_results){
        foreach($sub_results as $sub){
            $sub_id = $sub->sub_id;
            $user_email = $sub->sub_email;

            if($sub->sub_name == ''){
                $user_name = $sub->sub_email;
            } else {
                $user_name = $sub->sub_name;
            }

            $user_mail_sent = $sub->sola_nl_mail_sent;
            $user_mail_send_time = $sub->sola_nl_mail_sending_time;

            if($user_mail_sent != '' && $user_mail_send_time != '' && $user_mail_send_time != '0000-00-00 00:00:00'){

                $current_time = date('Y-m-d H:i:s', current_time('timestamp'));

                $sql = "SELECT * FROM $sola_nl_camp_tbl WHERE `type` = 2 AND `action` = 4";

                $results = $wpdb->get_results($sql);
//                var_dump($results);

                if($results){
                    foreach($results as $result){
                        if(isset($result->camp_id)) { $camp_id = $result->camp_id; } else { $camp_id = ''; }
                        $sola_global_campid = $camp_id;

                        $sql = "SELECT * FROM $sola_nl_subs_tbl WHERE `sub_email` = '$user_email'";
                        $subscriber_details = $wpdb->get_row($sql);

                        $sub_id = $subscriber_details->sub_id;

                        $sola_global_subid = $sub_id;

                        if(isset($user_email)){ $to = $user_email; } else { $to = ''; }
                        if(isset($result->subject)){ $subject = stripslashes(do_shortcode($result->subject)); } else { $subject = ''; }
                        if(isset($result->email)){$body_contents = stripslashes(do_shortcode(trim($result->email))); } else { $body_contents = ''; }
//                        var_dump($result->email);
//                        echo SITE_URL;
//                        echo $body_contents;
//                        exit();

                        $body = sola_nl_mail_body($body_contents, $camp_id, $camp_id);
                        if(isset($result->styles)){$styles = $result->styles; } else { $styles = ''; }
                    }
                    if(($current_time >= $user_mail_send_time) && $user_mail_sent == 0){
                        $mail_sent = sola_mail($camp_id, $to, $subject, $body);
                        if($mail_sent){
                            $wpdb->update($sola_nl_subs_tbl, array('sola_nl_mail_sent' => 1), array('sub_id' => $sub_id));
                        }
                    }
                }
            }
        }
    }

    /*
     * Check to see if there are any users that need to be emailed.
     */
    $args = array(
        'meta_key'     => '_sola_nl_mail_sent',
        'meta_value'   => '0'
    );
    $users = get_users($args);

    foreach($users as $user){

        $user_id = $user->ID;
        $user_email = $user->data->user_email;
        $user_name = $user->data->display_name;
        $user_role = $user->roles[0];

        $sql = "SELECT * FROM $sola_nl_camp_tbl WHERE `type` = 2 AND `action` = 5";

        $results = $wpdb->get_results($sql);
//        var_dump("USERS");
//        var_dump($results);
        foreach($results as $result){

            $auto_camp_id = $result->camp_id;

            $auto_data = $result->automatic_data;
            $raw_auto_data = maybe_unserialize($auto_data);
            $role = intval($raw_auto_data['data']['role']);

            if($role == 1 || $role == 2 && $user_role == 'administrator' || $role == 3 && $user_role == 'editor' || $role == 4 && $user_role == 'author' || $role == 5  && $user_role == 'contributor' || $role == 6 && $user_role == 'subscriber'){

                $user_mail_sent = get_user_meta($user_id, '_sola_nl_mail_sent', true);
                $user_mail_send_time = get_user_meta($user_id, '_sola_nl_mail_sending_time', true);

                if($user_mail_sent != '' && $user_mail_send_time != ''){

                    $current_time = date('Y-m-d H:i:s', current_time('timestamp'));

                    $user_meta = get_user_meta($user_id);
                    $user_data = get_userdata($user_id);

                    $user_role = $user_data->roles[0];

                    $sql = "SELECT * FROM $sola_nl_camp_tbl WHERE `type` = 2 AND `action` = 5";

                    $results = $wpdb->get_results($sql);

                    if($results){
                        foreach($results as $result){
                            $camp_id = $result->camp_id;

//                            echo $camp_id;
//                            global $sola_global_campid;
                            $sola_global_campid = $camp_id;
                            $to = $user_email;
                            $subject = do_shortcode($result->subject);
                            $body_contents = stripslashes(do_shortcode(trim($result->email)));

//                            echo $body_contents;
                            $body = sola_nl_mail_body($body_contents, $user_id, $camp_id);
                            $styles = $result->styles;
                        }
                        if(($current_time >= $user_mail_send_time) && $user_mail_sent == 0){
                            $mail_sent = sola_mail($camp_id, $to, $subject, $body);

                            if($mail_sent){
                                update_user_meta($user_id, '_sola_nl_mail_sent', 1);
                            }
                        }
                    }
                }
            }
        }
    }
}

function sola_nl_theme_selection() {
    /* added in 3.1.0 by Nick */
    /* first scan plugin folder */
    $theme_dir = plugin_dir_path( __FILE__ )."themes/";
    $theme_url = plugin_dir_url( __FILE__ )."themes/";
    $files2 = @scandir($theme_dir, 1);
    foreach ($files2 as $sola_theme) {


          if ($sola_theme == "." || $sola_theme == "..") { } else {


              $sola_current_directory = $theme_dir.$sola_theme;
              $sola_current_url = $theme_url.$sola_theme;
              $theme_data = @scandir($sola_current_directory, 1);
              //var_dump($theme_data);
              $theme_html_file = $sola_current_directory."/".$sola_theme.".html";
              $theme_style_file = $sola_current_directory."/".$sola_theme."-style.json";
              $theme_thumbnail_file = $sola_current_url."/thumbnail.png";
              $theme_data_file = $sola_current_directory."/theme_data.json";

              $theme_data = @trim(@stripslashes(@file_get_contents($theme_data_file)));
              //var_dump($theme_data);
              $json_decoded_themn_data = json_decode($theme_data, true);
              //var_dump($json_decoded_themn_data);

              $theme_html = @trim(@stripslashes(@file_get_contents($theme_html_file)));
              //var_dump($theme_html);

              $style_data = @trim(@stripslashes(@file_get_contents($theme_style_file)));
              //var_dump($style_data);
              $json_decode = json_decode($style_data, true);
              //var_dump($json_decode);

              //var_dump($theme_thumbnail_file);




    $is_active = 'basic-layout-1' === $sola_theme ? 'active' : ''; 

    ?>
      <div class="theme_div_wrapper <?php echo $is_active; ?>">
          <label>
              <h3><?php echo ucfirst($json_decoded_themn_data['theme_data']['title']) ?></h3>
              <p>
                  <em><?php _e("Author: ","sola"); ?><?php echo $json_decoded_themn_data['theme_data']['author']; ?></em><br />
                  <em><?php _e("Version: ","sola"); ?><?php echo $json_decoded_themn_data['theme_data']['version']; ?></em>
              </p>
              <input type="radio" name="theme_id" <?php checked( 'basic-layout-1', $sola_theme ); ?> value="<?php echo $sola_current_directory.",".$sola_current_url; ?>">

              <img src="<?php echo $theme_thumbnail_file; ?>" width="170px">
          </label>
      </div>
    <?php

          }
    }



    /* scan uploads folder (downloaded themes) */

    $upload_dir = wp_upload_dir();
    $theme_dir = $upload_dir['basedir']."/sola/themes/";
    $theme_url = $upload_dir['baseurl']."/sola/themes/";
    $files2 = @scandir($theme_dir, 1);

    if (is_array($files2)) { foreach ($files2 as $sola_theme) {


          if ($sola_theme == "." || $sola_theme == "..") { } else {


              $sola_current_directory = $theme_dir.$sola_theme;
              $sola_current_url = $theme_url.$sola_theme;
              $theme_data = @scandir($sola_current_directory, 1);
              //var_dump($theme_data);

              $theme_html_file = $sola_current_directory."/".$sola_theme.".html";
              $theme_style_file = $sola_current_directory."/".$sola_theme."-style.json";
              $theme_thumbnail_file = $sola_current_url."/thumbnail.png";
              $theme_data_file = $sola_current_directory."/theme_data.json";

              $theme_data = @trim(@stripslashes(@file_get_contents($theme_data_file)));
              //var_dump($theme_data);
              $json_decoded_themn_data = json_decode($theme_data, true);
              //var_dump($json_decoded_themn_data);

              $theme_html = @trim(@stripslashes(@file_get_contents($theme_html_file)));
              //var_dump($theme_html);

              $style_data = @trim(@stripslashes(@file_get_contents($theme_style_file)));
              //var_dump($style_data);
              $json_decode = json_decode($style_data, true);
              //var_dump($json_decode);

              //var_dump($theme_thumbnail_file);




    ?>
      <div class="theme_div_wrapper">
          <label>
              <h3><?php echo ucfirst($json_decoded_themn_data['theme_data']['title']) ?></h3>
              <p>
                  <em><?php _e("Author: ","sola"); ?><?php echo $json_decoded_themn_data['theme_data']['author']; ?></em><br />
                  <em><?php _e("Version: ","sola"); ?><?php echo $json_decoded_themn_data['theme_data']['version']; ?></em>
              </p>
               <input type="radio" name="theme_id" value="<?php echo $sola_current_directory.",".$sola_current_url; ?>">

              <img src="<?php echo $theme_thumbnail_file; ?>" width="170px">
          </label>
      </div>
    <?php

          }
    } }
}

function sola_nl_theme_selection_available() {

?>
    <div class="theme_div_wrapper">
          <label>
              <h3><a href='http://solaplugins.com/product/valentines-day-newsletter-theme-1/?utm_source=plugin&utm_medium=link&utm_campaign=nl_theme_1' target='_BLANK'><?php _e("Valentine's Day","sola"); ?></a></h3>
              <p>
                  <em><?php _e("Price: ","sola"); ?> $2.00</em><br />
                  <em><?php _e("Author: ","sola"); ?> Sola Plugins</em><br />
                  <em><?php _e("Version: ","sola"); ?>1.0</em>
              </p>
              <a href='http://solaplugins.com/product/valentines-day-newsletter-theme-1/?utm_source=plugin&utm_medium=link&utm_campaign=nl_theme_1' target='_BLANK'><img src="<?php echo PLUGIN_DIR; ?>/images/themes/theme_1_valentines.png" width="170px" style='cursor: pointer; border: 1px solid #ccc; border-radius: 10px; padding: 4px;'></a>
          </label>
      </div>
<?php
}


function sola_nl_get_theme_data($theme) {


                $sola_theme = basename ($theme);
                $sola_current_directory = $theme;
                //var_dump($sola_theme);

              $theme_data = @scandir($theme, 1);
              //var_dump($theme_data);
              $theme_data_file = $theme."/theme_data.json";
              $theme_data = @trim(@stripslashes(@file_get_contents($theme_data_file)));
              $json_decoded_themn_data = json_decode($theme_data, true);




              $theme_html_file = $theme."/".$sola_theme.".html";

              $theme_html_file = $sola_current_directory."/".$sola_theme.".html";
              $theme_style_file = $sola_current_directory."/".$sola_theme."-style.json";
             //var_dump($theme_style_file);


              //var_dump($theme_data);

              //var_dump($json_decoded_themn_data);

              $theme_html = @trim(@stripslashes(@file_get_contents($theme_html_file)));
              //var_dump($theme_html);

              $style_data = @trim(@file_get_contents($theme_style_file));
//              var_dump($style_data);
              $json_decoded_themn_style = json_decode($style_data, true);
              //var_dump($json_decoded_themn_style);

              $theme_array = array();
              $theme_array['theme_data'] = $json_decoded_themn_data;
              $theme_array['styles'] = $json_decoded_themn_style;
              $theme_array['html'] = $theme_html;
              return $theme_array;

}

function sola_nl_admin_extensions(){


    if (isset($_GET['type']) && $_GET['type'] == "additional") {
        $additional = "nav-tab-active";
        $normal = "";
    } else {
        $normal = "nav-tab-active";
        $additional = "";
    }

    ?>
    <h2 class="nav-tab-wrapper">
        <a href="<?php echo admin_url('admin.php?page=sola-nl-extensions'); ?>" title="<?php _e("Add-ons","sola"); ?>" class="nav-tab <?php echo $normal; ?>"><?php _e("Add-ons","sola"); ?></a>
        <a href="<?php echo admin_url('admin.php?page=sola-nl-extensions&type=additional'); ?>" title="<?php _e("Suggested Plugins","sola"); ?>" class="nav-tab  <?php echo $additional; ?>"><?php _e("Suggested Plugins","sola"); ?></a>
        <span style='float: right; bottom:-5px; position: relative;'><img src='<?php echo plugins_url('/images/codecabin.png', __FILE__); ?>' style="height:15px;" /></span>
    </h2> 
    <div id="tab_container">

    <?php if (isset($_GET['type']) && $_GET['type'] == "additional") { ?>

        <div class="sola-extension sola-plugin">
            <h3 class="sola-extension-title"><?php _e("Sola Support Tickets","sola"); ?></h3>
            <a href="https://wordpress.org/plugins/sola-support-tickets/" title="<?php _e("Sola Support Tickets","sola"); ?>" target="_BLANK">
                <img width="320" src="<?php echo plugins_url('/images/sst.jpg', __FILE__); ?>" class="attachment-showcase wp-post-image" alt="<?php _e("Sola Support Tickets","sola"); ?>" title="<?php _e("Sola Support Tickets","sola"); ?>">
            </a>
            <p></p>
            <p><?php _e("The easiest to use Help Desk & Support Ticket plugin. Create a support help desk quickly and easily with Sola Support Tickets.","sola"); ?></p>
            <p></p>
            <a href="https://wordpress.org/plugins/sola-support-tickets/" title="<?php _e("Sola Support Tickets","sola"); ?>" class="button-secondary" target="_BLANK"><?php _e("Get this Plugin","sola"); ?></a>
        </div>

        <div class="sola-extension sola-plugin">
            <h3 class="sola-extension-title"><?php _e("Sola Testimonials","sola"); ?></h3>
            <a href="https://wordpress.org/plugins/sola-testimonials/" title="<?php _e("Sola Testimonials","sola"); ?>" target="_BLANK">
                <img width="320" src="<?php echo plugins_url('/images/st.jpg', __FILE__); ?>" class="attachment-showcase wp-post-image" alt="<?php _e("Sola Testimonials","sola"); ?>" title="<?php _e("Sola Testimonials","sola"); ?>">
            </a>
            <p></p>
            <p><?php _e("The easiest to use Testimonial plugin! Showcase your testimonials in a beautiful and modern way with Sola Testimonials.","sola"); ?></p>
            <p></p>
            <a href="https://wordpress.org/plugins/sola-testimonials/" title="<?php _e("Sola Testimonials","sola"); ?>" class="button-secondary" target="_BLANK"><?php _e("Get this Plugin","sola"); ?></a>
        </div>


    <?php } else { 

        $filter1 = "all";
        $filter2 = "all";

        if (isset($_GET['filter1'])) { $filter1 = $_GET['filter1']; }
        if (isset($_GET['filter2'])) { $filter2 = $_GET['filter2']; }

        $style_strong = 'style="font-weight:bold;"';
        $style_normal = 'style="font-weight:normal;"';

        $filter1_all_style = $style_normal;
        $filter1_free_style = $style_normal;
        $filter1_paid_style = $style_normal;
        $filter2_both_style = $style_normal;
        $filter2_free_style = $style_normal;
        $filter2_pro_style = $style_normal;

        if ($filter1 == "all") { $filter1_all_style = $style_strong; }
        else if ($filter1 == "free") { $filter1_free_style = $style_strong; }
        else if ($filter1 == "paid") { $filter1_paid_style = $style_strong; }
        else { $filter1_all_style = $style_strong; }
        if ($filter2 == "all") { $filter2_both_style = $style_strong; }
        else if ($filter2 == "free") { $filter2_free_style = $style_strong; }
        else if ($filter2 == "pro") { $filter2_pro_style = $style_strong; }
        else { $filter2_both_style = $style_strong; }


        echo "<p><div style='display:block; overflow:auto; clear:both;'>";
        echo "<strong>".__("Price:","sola")."</strong> ";
        echo "<a href='" . admin_url("admin.php?page=sola-nl-extensions&filter1=all&filter2=".$filter2) ."' $filter1_all_style>".__("All","sola")."</a> |";
        echo "<a href='" . admin_url("admin.php?page=sola-nl-extensions&filter1=free&filter2=".$filter2) ."' $filter1_free_style>".__("Free","sola")."</a> |";
        echo "<a href='" . admin_url("admin.php?page=sola-nl-extensions&filter1=paid&filter2=".$filter2) ."' $filter1_paid_style>".__("Paid","sola")."</a>";
        echo "</div></p>";
        echo "<p><div style='display:block; overflow:auto; clear:both;'>";
        echo "<strong>".__("For:","sola")."</strong> ";
        echo "<a href='" . admin_url("admin.php?page=sola-nl-extensions&filter2=all&filter1=".$filter1) ."' $filter2_both_style>".__("Both","sola")."</a> |";
        echo "<a href='" . admin_url("admin.php?page=sola-nl-extensions&filter2=free&filter1=".$filter1) ."' $filter2_free_style>".__("Free version","sola")."</a> |";
        echo "<a href='" . admin_url("admin.php?page=sola-nl-extensions&filter2=pro&filter1=".$filter1) ."' $filter2_pro_style>".__("Pro version","sola")."</a>";
        echo "</div></p>";


        $response = wp_remote_post( "http://ccplugins.co/api-sola-newsletters-extensions", array(
                'method' => 'POST',
                'body' => array( 
                    'action' => 'extensions',
                    'filter1' => $filter1,
                    'filter2' => $filter2
                )            
            )
        );

        $data = json_decode($response['body']);

        if ($data) {
            $output = "";
            foreach ($data as $extension) {
                $output .= '<div class="sola-extension">';
                $output .= '<h3 class="sola-extension-title">'.$extension->title.'</h3>';
                $output .= '<a href="'.$extension->link.'" title="'.$extension->title.'" target="_BLANK">';
                $output .= '<img width="320" height="200" src="'.$extension->image.'" class="attachment-showcase wp-post-image" alt="'.$extension->title.'" title="'.$extension->title.'">';
                $output .= '</a>';
                $output .= '<p></p>';
                $output .= '<p><div class="sola-extension-label-box">';
                $output .= '</div></p>';
                $output .= '<p>'.$extension->description.'</p>';
                if ($extension->slug != false && is_plugin_active($extension->slug."/".$extension->slug.".php")) {
                    $button = '<a href="javascriot:void(0);" title="" disabled class="button-secondary">'.__("Already installed","sola").'</a>';
                } else {
                    $button = '<a href="'.$extension->link.'" title="'.$extension->title.'" class="button-secondary" target="_BLANK">'.$extension->button_text.'</a>';
                }
                $output .= $button;
                $output .= '</div>';
            }
            echo $output;
        }
    ?>

    

    <?php } ?>






    </div>
    <?php
}


/*
 * Handles deletion of personal data(subscribers) when requested by the WordPress GDPR hooks.
*/
function sola_nl_personal_data_eraser($email, $page = 1){
    global $wpdb;
    global $sola_nl_subs_tbl;
    global $sola_nl_subs_list_tbl;

    $items_removed = false;

    $subscriber_data = $wpdb->get_row( "SELECT * FROM `$sola_nl_subs_tbl` WHERE `sub_email` = '$email'" );
    
    if ($subscriber_data != NULL) {
        $subscriber_id = $subscriber_data->sub_id;
        if ($wpdb->delete($sola_nl_subs_tbl, array( 'sub_id' => $subscriber_id ))) {
            $wpdb->delete( $sola_nl_subs_list_tbl, array( 'sub_id' => $subsriber_id ));
            $items_removed = true;
        }
    }

    return array( 
        'items_removed' => $items_removed,
        'items_retained' => false, 
        'messages' => array(), 
        'done' => true,
    );
}

/*
 * Registers eraser callback using WordPress filters.
*/
function sola_nl_register_personal_data_eraser($erasers){
    $erasers['sola-newsletters'] = array(
        'eraser_friendly_name' => __( 'Sola Newsletters Subscriber Data', 'sola'),
        'callback'             => 'sola_nl_personal_data_eraser',
    );
    return $erasers;
}
add_filter('wp_privacy_personal_data_erasers','sola_nl_register_personal_data_eraser',10);





/*
 * Handles exporting of personal data(subscribers) when requested.
 */
function sola_nl_data_exporter($email, $page = 1){
    global $wpdb;
    global $sola_nl_subs_tbl;
    global $sola_nl_subs_list_tbl;

    $export_items = array();

    $subscriber_data = $wpdb->get_row( "SELECT * FROM `$sola_nl_subs_tbl` WHERE `sub_email` = '$email'" );
    if ($subscriber_data != NULL) {
        $subscriber_id = $subscriber_data->sub_id;
        $subscriber_name = $subscriber_data->sub_name;
        $subscriber_last_name = $subscriber_data->sub_last_name;


        $data = array(
            array(
                'name' => __('Subscriber Email', 'sola'),
                'value' => $email
            ),
            array(
                'name' => __('Subscriber Name', 'sola'),
                'value' => $subscriber_name
            ),
            array(
                'name' => __('Subscriber Last Name', 'sola'),
                'value' => $subscriber_last_name
            ),
        );


        $export_items[] = array(
            'group_id' => 'sola-nl-subscribers',
            'group_label' => __('Newsletter Subscription','sola'),
            'item_id' => 'sola-nl-sub-id-'.$subscriber_id,
            'data' => $data,
        );    
    }    

    return array(
        'data' => $export_items,
        'done' => true,
    );


}


/*
 * Registers exporter callback using WordPress filters
 * Adds html and query to allow for blog post search
*/
function sola_nl_register_personal_data_exporter( $exporters ) {
  $exporters['my-plugin-slug'] = array(
    'exporter_friendly_name' => __( 'Sola Newsletters Subscriber Data','sola'),
    'callback'               => 'sola_nl_data_exporter',
  );
  return $exporters;
}
 
add_filter('wp_privacy_personal_data_exporters','sola_nl_register_personal_data_exporter',10);

// the ajax function
add_action('wp_ajax_sola_blog_search' , 'sola_blog_search_ajax');


function sola_blog_search_ajax(){

    $the_query = new WP_Query( 
        array( 
            'posts_per_page' => 10, 
            's' => esc_attr( $_POST['keyword'] ), 
            'post_type' => 'post' 
        ) 
    );

    if( $the_query->have_posts() ) {
        while( $the_query->have_posts() ): $the_query->the_post(); ?>

             <div class="sola_newsletter_addableitems" data-toggle="tooltip" data-placement="top" title="Click and Drag">
                                    
                <div class="sola_addable_item sola_sub_addable_item" type="blog_post" 
                     value="<?php echo get_the_excerpt(); ?>" 
                     feat_image="<?php echo $sola_feat_image_url ?>" 
                     title="<?php the_title(); ?>"
                     post_url="<?php echo get_permalink(); ?>">
                         <?php the_title(); ?>
                </div>
                
            </div>
        <?php endwhile;
        wp_reset_postdata();  
    } else { 
        echo '<h4 style="text-align: center;">No Results Found</h4>';
    }
    die();
}     

