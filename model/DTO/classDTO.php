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
			if (!isset($nb))
				$nb = null;
			$this->setterNumber($nb);
			if (!isset($na))
				$na = null;
			$this->setterName($na);
			if (!isset($mo))
				$mo = null;
			$this->setterMode($mo);
			if (!isset($pf))
				$pf = null;
			$this->setterProfessor($pf);
			if (!isset($pr))
				$pr = null;
			$this->setterPeriod($pr);
			if (!isset($gd))
				$gd = null;
			$this->setterGrades($gd);
			if (!isset($nt))
				$nt = null;
			$this->setterNote($nt);
			if (!isset($di))
				$di = null;
			$this->setterDivide($di);
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