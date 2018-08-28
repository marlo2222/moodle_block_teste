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
      if (is_null($this->config)) {
        $this->content->text .= '<div class = "teste"><div class = "titulo">';
        return $this->content;
      }
      /*  global $CFG;
          if ($this->content !== null) {
            return $this->content;
          }
          $this->content = new stdClass;

          if (!empty($this->config->text)) {
            $this->content->text = $this->config->text;
          }else {
              $this->content->text = '';
          }
          $this->content->text .= '<div class = "teste"><div id = "testes">';
          if($this->config->title){
            $this->title = $this->config->title;
          }
          $this->page->requires->main();
            $this->page->requires->main("/moodle-block_teste/js/main.js");

          //tentando obter o conteudo
          $fs = get_file_storage();]
          $files = $fs->get_area_files($this->context->id,'block_teste','content');*/

           return $this->content;
    }

    public function instance_allow_multiple() {
          return true;
    }

    function has_config() {return true;}


}
