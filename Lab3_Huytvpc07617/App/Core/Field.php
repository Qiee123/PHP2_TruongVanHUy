<?php

namespace App\Core;

// Lớp trừu tượng AbstractField
abstract class AbstractField {

    protected $type;
    protected $name;
    protected $value;

    public function __construct($type, $name, $value) {
        $this->type = $type;
        $this->name = $name; 
        $this->value = $value;
    }

    // Phương thức trừu tượng render
    abstract public function render();
}

// Lớp Field kế thừa từ AbstractField
class Field extends AbstractField {

    public function render() {
        echo "<div class='form-group'>";
        echo "<label for='$this->name'>$this->name</label>";
        echo "<input type='$this->type' name='$this->name' value='$this->value' class='form-control'>";
        echo "</div>";
    }
}




?>
