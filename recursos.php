<?php
const ALUNO = "Emillye";
define("ESCOLA", "Senac penha");
$curso = "Técnico em informatica para internet";
$tecnologias = ["PHP", "SQL", "HTML", "CSS", "JavaScript"];
function verificarIdade(int $idade):string{
    return $idade >=18 ? "maior" : "menor";
}