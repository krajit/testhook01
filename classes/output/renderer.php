<?php

namespace local_testhook01\output;

defined('MOODLE_INTERNAL') || die();

use plugin_renderer_base;

class renderer extends plugin_renderer_base {
    public function render_hello_message(): string {

        $data = [
            'message' => get_string('hellomessage', 'local_testhook01')
        ];
        return $this->render_from_template('local_testhook01/hello_message', $data);
    }
}
