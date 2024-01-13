<?php

namespace App\Core;

 class Form {

  public $fields = [];

    public function addField($type, $name, $value) {
    $field = new Field($type, $name, $value);
    $this->fields[] = $field;
  }

  public function begin() {
    echo "<form>";
  }

  public function end() {
    echo "</form>";
  }

  public function render() {
    $this->begin();
    foreach($this->fields as $field) {
      $field->render();
    }
    $this->end();
  }

}