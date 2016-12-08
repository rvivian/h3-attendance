<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://northof66.com
 * @since      1.0.0
 *
 * @package    H3_Attendance
 * @subpackage H3_Attendance/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">
  <h2>Add User</h2>
  
  <form method="post" name="add_user">
    
    <!-- remove some meta and generators from the <head> -->
    <fieldset>
      <legend class="screen-reader-text"><span>First Name</span></legend>
      <label for="<?php echo $this->plugin_name ?>-first_name">
        <span><?php esc_attr_e('First Name', $this->plugin_name); ?></span>
        <input type="textbox" id="<?php echo $this->plugin_name; ?>-first_name" name="<?php echo $this->plugin_name; ?> [first_name]" />
      </label>
    </fieldset>
    
    <fieldset>
      <legend class="screen-reader-text"><span>Last Name</span></legend>
      <label for="<?php echo $this->plugin_name ?>-last_name">
        <span><?php esc_attr_e('Last Name', $this->plugin_name); ?></span>
        <input type="textbox" id="<?php echo $this->plugin_name; ?>-last_name" name="<?php echo $this->plugin_name; ?> [last_name]" />
      </label>
    </fieldset>
    
    <fieldset>
      <legend class="screen-reader-text"><span>Email</span></legend>
      <label for="<?php echo $this->plugin_name ?>-email">
        <span><?php esc_attr_e('Email', $this->plugin_name); ?></span>
        <input type="textbox" id="<?php echo $this->plugin_name; ?>-email" name="<?php echo $this->plugin_name; ?> [email]" />
      </label>
    </fieldset>
    
    <fieldset>
      <legend class="screen-reader-text"><span>Hashaversary</span></legend>
      <label for="<?php echo $this->plugin_name ?>-hashaversary">
        <span><?php esc_attr_e('Hashaversary', $this->plugin_name); ?></span>
        <input type="date" id="<?php echo $this->plugin_name; ?>-hashaversary" name="<?php echo $this->plugin_name; ?> [hashaversary]" />
      </label>
    </fieldset>
    
    <fieldset>
      <legend class="screen-reader-text"><span>Home Kennel</span></legend>
      <label for="<?php echo $this->plugin_name ?>-home_kennel">
        <span><?php esc_attr_e('Home Kennel', $this->plugin_name); ?></span>
        <input type="textbox" id="<?php echo $this->plugin_name; ?>-home_kennel" name="<?php echo $this->plugin_name; ?> [home_kennel]" />
      </label>
    </fieldset>
    
    <fieldset>
      <legend class="screen-reader-text"><span>Mother Kennel</span></legend>
      <label for="<?php echo $this->plugin_name ?>-mother_kennel">
        <span><?php esc_attr_e('Mother Kennel', $this->plugin_name); ?></span>
        <input type="textbox" id="<?php echo $this->plugin_name; ?>-mother_kennel" name="<?php echo $this->plugin_name; ?> [mother_kennel]" />
      </label>
    </fieldset>
    
    <fieldset>
      <legend class="screen-reader-text"><span>Dog</span></legend>
      <label for="<?php echo $this->plugin_name ?>-is_dog">
        <span><?php esc_attr_e('Dog', $this->plugin_name); ?></span>
        <input type="checkbox" id="<?php echo $this->plugin_name; ?>-is_dog" name="<?php echo $this->plugin_name; ?> [is_dog]" />
      </label>
    </fieldset>
    
    <?php submit_button( 'Add User', 'primary', 'submit', TRUE); ?>
  </form>
</div>