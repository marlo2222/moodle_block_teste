  <?php


defined('MOODLE_INTERNAL') || die();

class block_teste extends block_base {

    function init() {
        $this->title = get_string('pluginname', 'block_teste');
    }

    function get_content() {

      if ($this->content !== null) {
        return $this->content;
      }
   
      $this->content         =  new stdClass;
      $this->content->text   = 'O conteudo do bloco';
      $this->content->footer = 'o rodape do nosso bloco';
   
      return $this->content;
           return $this->content;
    }

    public function instance_allow_multiple() {
          return true;
    }

    function has_config() {return true;}


}
