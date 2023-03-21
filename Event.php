<?php
class Event {

    public $id;
    public $name;
    public $description;
    public $presenter;
    public $date;
    public $time;

    function set_id($id) {
        $this->id = $id;
    }
    function set_name($name) {
        $this->name = $name;
    }
    function set_description($description) {
        $this->description = $description;
    }

    function set_presenter($presenter) {
        $this->presenter = $presenter;
    }

    function set_date($date) {
        $this->date = $date;
    }

    function set_time($time) {
        $this->time = $time;
    }

}
?>