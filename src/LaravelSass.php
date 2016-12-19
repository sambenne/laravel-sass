<?php
    namespace SamBenne\LaravelSass;

    class LaravelSass
    {
        /**
         * @var array
         */
        private $options;

        public function __construct(array $options = [])
        {
            $this->options = $options;
        }

        public function getOptions() {
            return $this->options;
        }
    }