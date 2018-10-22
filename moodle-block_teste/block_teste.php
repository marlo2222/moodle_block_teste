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
    / if (is_null($this->config)) {
        $this->content->text = get_string('nome','block_teste');
        return $this->content;
      }
        global $CFG;
          if ($this->content !== null) {
            return $this->content;
          }
          $this->content = new stdClass;

          if (!empty($this->config->text)) {
            $this->content->text = $this->config->text;
          }else {
              $this->content->text = 'hello wold';
          }
      $this->page->requires->jquery();
      this->page->requires->js("/moodle_block_teste/moodle-block_teste/js/main.js");

           return $this->content;
    }

    public function instance_allow_multiple() {
          return true;
    }

    function has_config() {return true;}


}
