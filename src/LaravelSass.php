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
            echo "<pre>" . print_r($options, true) . "</pre>";
            $this->options = $options;
        }
    }