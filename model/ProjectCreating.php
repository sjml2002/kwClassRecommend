<?php
    //root function
    function ProjectCreating($category, $writer, $age, $region, $ooc, $content, $img) {
        //DTO
        require_once("../model/DTO/ProjectDTO.php");
        $project = new ProjectDTO($category, $writer, $age, $region, $ooc, $content, $img);
        return ProjectDBinsert($project);
    }

    function ProjectDBinsert($project) {
        require_once("../model/DAO/ProjectDAO.php");
        $projectDAO = new ProjectSQL($project);
        return $projectDAO->QueryProject();
    }
?>