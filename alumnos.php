<?php 

    class Alumnos {
    
        protected string $name;
        protected string $subname;
        protected int $age;
        //constructor
        public function __construct(string $name, string $subname, int $age ) {
            $this -> name = $name;
            $this -> subname = $subname;
            $this -> age = $age;
        }
        //getter and setter
        public function getName() {
            return $this -> name;
        }

        public function setName(string $name) {
            $this -> name = $name;
        }

        public function getSubname() {
            return $this -> subname;
        }

        public function setSubname(string $subname) {
            $this -> subname = $subname;
        }

        public function getAge() {
            return $this -> age;
        }

        public function setAge(int $age) {
            $this -> age = $age;
        }
}

?>