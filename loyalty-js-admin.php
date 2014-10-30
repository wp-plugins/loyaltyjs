<?php
    if(isset($_POST['loyalty_js_submission_check']) && $_POST['loyalty_js_submission_check'] == 'Y') {
        //Form data sent

        $loyalty_debug = $_POST['loyalty_debug'];
        update_option('loyalty_debug', $loyalty_debug);

        $loyalty_antiflicker = $_POST['loyalty_antiflicker'];
        update_option('loyalty_antiflicker', $loyalty_antiflicker);

        $loyalty_delay = $_POST['loyalty_delay'];
        update_option('loyalty_delay', $loyalty_delay);

        ?>
        <div class="updated"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>
        <?php

    } else {
        //Normal page display
        $loyalty_debug = get_option('loyalty_debug');
        $loyalty_antiflicker = get_option('loyalty_antiflicker');
        $loyalty_delay = get_option('loyalty_delay');
    }
?>

<div class="wrap">
    <?php echo "<h2>" . __( 'Summits Sitewide Alert Message', 'loyalty_js' ) . "</h2>"; ?>
    
    <style>
    .meta-info {
        font-size: 85%;
        font-style: italic;
        margin: 0;
        padding: 0;
    }
    .lead {
        font-size: 120%;
    }
    label {
        font-weight: 700;
        font-size: 110%;
        display: block;
    }
    li {
        margin-bottom: 25px;
    }

    </style>

    <p class="lead">Use the options below to customize Loyalty.js. To really dig deep into the Loyalty.js plugin please visit the <a target="_blank" href="https://github.com/eisenivan/loyalty">Loyalty.js Github Page.</a> If you like this plugin please don't hesitate to take a moment and <a target="_blank" href="https://wordpress.org/plugins/loyaltyjs/">write a review, I would really appreciate it.</a> Thanks!</p>

    <hr>

    <form name="loyalty_js_admin_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
        <input type="hidden" name="loyalty_js_submission_check" value="Y">
        
        <ul>
            <li>
                <label for="loyalty_delay"><?php _e("Delay", 'loyalty_js' ); ?></label>
                <p class="meta-info">The time, in minutes, between valid loyalty.js visits. This value defaults to 30.</p>
                <input type="text" name="loyalty_delay" value="<?php echo ($loyalty_delay == '') ? '30' : $loyalty_delay;?>" />
            </li>
            <li>
              <label for="loyalty_debug"><?php _e("Debug Mode", 'loyalty_js' ); ?></label>
              <p class="meta-info">When set to true loyalty.js will print helpful information to your browser's javascript console.</p>
              <select name="loyalty_debug">
                  <option <?php echo ($loyalty_debug == 'false') ? 'selected': '' ;?> value="false">False</option>
                  <option <?php echo ($loyalty_debug == 'true') ? 'selected': '' ;?> value="true">True</option>
              </select>   
            </li>
            <li>
                <label for="loyalty_antiflicker"><?php _e("Anitflicker CSS", 'loyalty_js' ); ?></label>
                <p class="meta-info">When enabled loyalty.js will append CSS to your <head> tag to prevent loyalty items from displaying for a moment before being hidden.</p>
                <select name="loyalty_antiflicker">
                    <option <?php echo ($loyalty_antiflicker == 'true') ? 'selected': '' ;?> value="true">True</option>
                    <option <?php echo ($loyalty_antiflicker == 'false') ? 'selected': '' ;?> value="false">False</option>
                </select>  
            </li>
        </ul>

        <p class="submit">
            <input class="button-primary" type="submit" name="Submit" value="<?php _e('Update Options', 'loyalty_js' ) ?>" />
        </p>
    </form>
</div>