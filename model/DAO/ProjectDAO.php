<?php
    class ProjectSQL {
        private $writer;
        private $category;
        private $age;
        private $region;
        private $ooc; //one_or_company
        private $content;
        private $img;
    
        function __construct($ProjectDTO){
            $this->writer = $ProjectDTO->getterWriter();
            $this->category = $ProjectDTO->getterCategory();
            $this->age = $ProjectDTO->getterAge();
            $this->region = $ProjectDTO->getterRegion();
            $this->ooc = $ProjectDTO->getterOOC();
            $this->content = $ProjectDTO->getterContent();
            $this->img = $ProjectDTO->getterImg();
        }
    
        function QueryProject(){
            try{
                require_once("../model/DBconnect.php");
                //DB연동 후 id 똑같은거 있는지 검사 후 없으면 로그인 성공
                $hitValue = 0;
                $ProjectInsert = $db_conn->prepare("
                    insert into projectTable(writer, hit, content, img_name, category, one_or_company, age, region)
                    values(?, ?, ?, ?, ?, ?, ?, ?);
                ");
                $ProjectInsert->bind_param("sissiiis", 
                    $this->writer, $hitValue, $this->content, $this->img, $this->category, $this->ooc, $this->age, $this->region
                );
                $result = $ProjectInsert->execute();
                return $result;
            } catch (exception $e){
                return false;
            }
        }
    }
?>