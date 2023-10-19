<?php
    class classListSQL {
        private $number;
        private $name;
        private $mode;
		private $professor;
		private $period;
		private $grades;
		private $note;
		private $divide;

        function __construct($classDTO){
			$this->number = $classDTO->getterNumber();
			$this->name = $classDTO->getterName();
			$this->mode = $classDTO->getterMode();
			$this->professor = $classDTO->getterProfessor();
			$this->period = $classDTO->getterPeriod();
			$this->grades = $classDTO->getterGrades();
			$this->note = $classDTO->getterNote();
			$this->divide = $classDTO->getterDivide();
        }

		function queryInsert() {
			return false;
		}
		function querySelect() {
			return false;
		}
        function querySelectAll(){
            try{
                require_once("../model/DBconnect.php");
				$classSelect = $db_conn->prepare("select name, professor, period from classList");
				$classSelect->execute();
				$result = $classSelect->get_result();
				$resultData = array();
				while ($row = $result->fetch_assoc()) {
					if (!in_array($row["name"], $resultData))
						array_push($resultData, $row["name"]);
				}
				return ($resultData);
            } catch (exception $e){
				var_dump($e);
                return false;
            }
        }
		
		function queryUpdate() {
			return false;
		}
		
		function queryDelete() {
			return false;
		}
    }
?>