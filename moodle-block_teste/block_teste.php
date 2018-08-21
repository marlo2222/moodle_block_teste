<?php


defined('MOODLE_INTERNAL') || die();

class block_teste extends block_base {

    function init() {
        $this->title = get_string('pluginname', 'block_teste');
    }

    function get_content() {

            if (empty($this->content)) {
             $this->content = new stdClass();
            }
            if(is_null($this->config)){
              $this->conten->text = get_string('setting','block_teste');
                return $this->conten;
            }
            if($this->config->title){
              $this->title = $this->config->title;
            }
            $this->page->requires->main();
                  $this->page->requires->main("/moodle-block_teste/js/main.js");


           return $this->content;
    }

    public function instance_allow_multiple() {
          return true;
    }

    function has_config() {return true;}


}
