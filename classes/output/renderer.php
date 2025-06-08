<?php

namespace local_testhook01\output;

defined('MOODLE_INTERNAL') || die();

use plugin_renderer_base;

class renderer extends plugin_renderer_base {
    public function render_hello_message(): string {
        return $this->output->box(
            get_string('hellomessage', 'local_testhook01'),
            'generalbox alert alert-success',
            'hello-hook-box'
        );
    }
}
