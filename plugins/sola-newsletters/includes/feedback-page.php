<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Removed as WP3.2 doesn't like this
 */
// check_admin_referer();
if(!current_user_can("manage_options")){
    exit;
}

$current_user = wp_get_current_user();

?><div class="wrap">
   
    
    <div id="icon-options-general" class="icon32 icon32-posts-post"><br></div><h2><?php _e("Sola Newsletters Feedback","sola") ?></h2>
    <form name="sola_feedback" action="" method="POST" class="sola_nl_shadows">
     <h3><?php _e("We'd love to hear your comments and/or suggestions","sola"); ?></h3>
     <table width='100%'>
        <tr>
            <td width="250px" >
                <label><?php _e("Your Name","sola"); ?></label>
            </td>
            <td>
                <input type="text" class='sola-input' name="sola_nl_feedback_name" value="<?php echo $current_user->user_firstname; ?>"/>
           </td>
        </tr>
        <tr>
            <td width="250px" >
                <label><?php _e("Your Email","sola"); ?></label>
            </td>
            <td>
                <input type="text" class='sola-input' name="sola_nl_feedback_email" value="<?php echo $current_user->user_email; ?>"/>
           </td>
        </tr>
        <tr>
            <td width="250px" >
                <label><?php _e("Your Website","sola"); ?></label>
            </td>
            <td>
                <input type="text" class='sola-input' name="sola_nl_feedback_website" value="<?php echo get_site_url(); ?>"/>
           </td>
        </tr>
        <tr>
            <td width="250px" valign='top' >
                <label><?php _e("Feedback","sola"); ?></label>
            </td>
            <td>
                <textarea name="sola_nl_feedback_feedback" style="width: 100%; height: 200px;"></textarea>
           </td>
        </tr>
        <tr>
            <td width="250px" valign='top' >
                
            </td>
            <td>
                <input type='submit' name='sola_nl_send_feedback' class='button-primary' value='<?php _e("Send Feedback","sola") ?>' />
           </td>
        </tr>
     </table>
    
    </form>
    
<?php include 'footer.php'; ?>