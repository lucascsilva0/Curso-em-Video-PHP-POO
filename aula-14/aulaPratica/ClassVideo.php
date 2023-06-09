
<?php
    include("InterfaceVideo.php");

    class Video implements InterfaceVideoActions{
        // -----------------------------------
        private $title;
        private $assessment;
        private $views;
        private $likes;
        private $reproducing;
        // -----------------------------------
        public function __construct($title){
            $this->setTitle($title);
            $this->setAssessment(1);
            $this->setViews(0);
            $this->setLikes(0);
            $this->setReproducing(false);
        }
        // -----------------------------------
        public function play(){
            $this->setReproducing(true);
        }
        public function pause(){
            $this->setReproducing(false);
        }
        public function like(){
            $this->setLikes($this->getLikes() + 1);
        }
        // -------------------------------------
        // -------- Getters and Setters --------
        // -------------------------------------
        public function getTitle(){
            return $this->title;
        }
        public function setTitle($title){
            $this->title = $title;
        }
        // -----------------------------------
        public function getAssessment(){
            return $this->assessment;
        }
        public function setAssessment($assessment){
            $this->assessment = $assessment;
        }
        // -----------------------------------
        public function getViews(){
            return $this->views;
        }
        public function setViews($views){
            $this->views = $views;
        }
        // -----------------------------------
        public function getLikes(){
            return $this->likes;
        }
        public function setLikes($likes){
            $this->likes = $likes;
        }
        // -----------------------------------
        public function getReproducing(){
            return $this->reproducing;
        }
        public function setReproducing($reproducing){
            $this->reproducing = $reproducing;
        }
        // -----------------------------------
    }
?>
