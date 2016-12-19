<?php
    namespace SamBenne\LaravelSass;

    use Leafo\ScssPhp\Compiler;

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

        public function Compile($sass)
        {
            $scss = new Compiler();

            return $scss->compile($sass);
        }

        public function Store($fromFile, $toFile)
        {
            $contents = $this->Compile(file_get_contents($fromFile));
            $bytes_written = \File::put($toFile, $contents);
            if ($bytes_written === false) {
                die("Error writing to file");
            }

            return true;
        }
    }