<?php
    class Extrasen
    {
        private $name;
        private $guess; // догадка
        private $lvl; // значение достоверности

        public function __construct($name, $guess, $lvl)
        {
            $this->name=$name;
            $this->guess=$guess;
            $this->lvl=$lvl;
        }

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @return mixed
         */
        public function getGuess()
        {
            return $this->guess;
        }
        public function setGuess($guess)
        {    
            $this->guess = $guess;
        }

        /**
         * @param mixed $guess
         */
        public function getLvl()
        {
            return $this->lvl;
        }
        public function addLvl()
        {
            return $this->lvl++;
        }
        public function minusLvl()
        {
            return $this->lvl--;
        }
    }
    