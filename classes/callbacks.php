<?php

namespace local_testhook01;

use core\hook\output\after_standard_main_region_html_generation;


class callbacks {
    public static function inject_hello_message_new(after_standard_main_region_html_generation $hook): void {
        
        global $PAGE, $USER;

        // Don't show if not logged in.
        if (!isloggedin() || isguestuser()) {
            return;
        }

        // Only show on activity pages (optional).
        if (!$PAGE->cm) {
            return;
        }

         // Get renderer for our plugin.
        //$output = $PAGE->get_renderer('local_hellohook');
        
        // Get renderer and render the message.
        $output = $PAGE->get_renderer('local_testhook01');
        $html = $output->render_hello_message();

        $hook->add_html($html);
        
        //$hook->add_html('<div class="container-fluid" style="color:green !important;font-weight:bold;padding:1em;">Hello from hook!</div>');
    }


}