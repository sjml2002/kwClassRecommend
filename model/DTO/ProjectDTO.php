<?php
    class ProjectDTO{
        private $writer;
        private $category;
        private $age;
        private $region;
        private $ooc; //one_or_company
        private $content;
        private $img;

        function __construct($category, $writer, $age, $region, $ooc, $content, $img){
            $this->setterWriter($writer);
            $this->setterCategory($category);
            $this->setterAge($age);
            $this->setterRegion($region);
            $this->setterOOC($ooc);
            $this->setterContent($content);
            $this->setterImg($img);
        }

        public function setterWriter($writer) {
            $this->writer = $writer;
        }
        public function setterCategory($category) {
            $this->category = $category;
        }
        public function setterAge($age) {
            $this->age = $age;
        }
        public function setterRegion($region) {
            $this->region = $region;
        }
        public function setterOOC($ooc) {
            $this->ooc = $ooc;
        }
        public function setterContent($content) {
            $this->content = $content;
        }
        public function setterImg($img) {
            $this->img = $img;
        }


        public function getterWriter() {
            return $this->writer;
        }
        public function getterCategory() {
            return $this->category;
        }
        public function getterAge() {
            return $this->age;
        }
        public function getterRegion() {
            return $this->region;
        }
        public function getterOOC() {
            return $this->ooc;
        }
        public function getterContent() {
            return $this->content;
        }
        public function getterImg() {
            return $this->img;
        }
    }
?>