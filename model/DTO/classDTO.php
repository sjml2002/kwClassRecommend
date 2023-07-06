<?php
    class classDTO{
        private $number;
        private $name;
        private $mode;
		private $professor;
		private $period;
		private $grades;
		private $note;
		private $divide;

        function __construct($nb, $na, $mo, $pf, $pr, $gd, $nt, $di){
			$this->setterNumber($nb);
			$this->setterName($na);
			$this->setterMode($mo);
			$this->setterProfessor($pf);
			$this->setterPeriod($pr);
			$this->setterGrades($gd);
			$this->setterNote($nt);
			$this->setterDivide($nb);
        }
		
		public function setterNumber($number) { $this->number = $number; }
		public function setterName($name) { $this->name = $name; }
		public function setterMode($mode) { $this->mode = $mode; }
		public function setterProfessor($professor) { $this->professor = $professor; }
		public function setterPeriod($period) { $this->period = $period; }
		public function setterGrades($grades) { $this->grades = $grades; }
		public function setterNote($note) { $this->note = $note; }
		public function setterDivide($divide) { $this->divide = $divide; }

		public function getterNumber () { return ($this->number); }
		public function getterName () { return ($this->name); }
		public function getterMode() { return ($this->mode); }
		public function getterProfessor () { return ($this->professor); }
		public function getterPeriod () { return ($this->period); }
		public function getterGrades () { return ($this->grades); }
		public function getterNote () { return ($this->note); }
		public function getterDivide () { return ($this->divide); }
    }
?>