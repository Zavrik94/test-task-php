<?php
    class Cal {
        public $result = '';

        public function add($var){
            $this->result = strval(intval($this->result) + intval($var));
        }

        public function min($var){
            $this->result = strval(intval($this->result) - intval($var));
        }

        public function division($digit){
            $this->result = $this->round(intval($this->result) / $digit);
        }

        public function mult($var){
            $this->result = strval(intval($this->result) * intval($var));
        }

        private function round($var){
            return strval(round($var));
        }
    }