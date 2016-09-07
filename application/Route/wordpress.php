<?php
class wordpress extends Name{
    public function nameParse() {
        $_name[] = $this->nameCont['wordpress'];
        $_name[] = $this->nameAction['previews'];
        return $_name;
    }
}

