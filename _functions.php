<?php
function calcularPorcentaje($valor, $porcentaje) {
    return ($valor * $porcentaje) / 100;
}

$nem = $_POST['nem'];
$ranking = $_POST['ranking'];
$clectora = $_POST['clectora'];
$cmatematica1 = $_POST['cmatematica1'];
$chistoria = $_POST['chistoria'];
$cciencias = $_POST['cciencias'];
$cmatematica2 = $_POST['cmatematica2'];

// Calcula los porcentajes
$porcentaje_nem40 = calcularPorcentaje($nem, 40);
$porcentaje_nem35 = calcularPorcentaje($nem, 35);
$porcentaje_nem30 = calcularPorcentaje($nem, 30);
$porcentaje_nem25 = calcularPorcentaje($nem, 25);
$porcentaje_nem20 = calcularPorcentaje($nem, 20);
$porcentaje_nem15 = calcularPorcentaje($nem, 15);
$porcentaje_nem10 = calcularPorcentaje($nem, 10);
$porcentaje_ranking60 = calcularPorcentaje($ranking, 60);
$porcentaje_ranking50 = calcularPorcentaje($ranking, 50);
$porcentaje_ranking45 = calcularPorcentaje($ranking, 45);
$porcentaje_ranking40 = calcularPorcentaje($ranking, 40);
$porcentaje_ranking35 = calcularPorcentaje($ranking, 35);
$porcentaje_ranking30 = calcularPorcentaje($ranking, 30);
$porcentaje_ranking25 = calcularPorcentaje($ranking, 25);
$porcentaje_ranking15 = calcularPorcentaje($ranking, 15);
$porcentaje_clectora20 = calcularPorcentaje($clectora, 20);
$porcentaje_clectora15 = calcularPorcentaje($clectora, 15);
$porcentaje_clectora10 = calcularPorcentaje($clectora, 10);
$porcentaje_cmatematica25 = calcularPorcentaje($cmatematica1, 25);
$porcentaje_cmatematica20 = calcularPorcentaje($cmatematica1, 20);
$porcentaje_cmatematica15 = calcularPorcentaje($cmatematica1, 15);
$porcentaje_cmatematica10 = calcularPorcentaje($cmatematica1, 10);
$porcentaje_chistoria20 = calcularPorcentaje($chistoria, 20);
$porcentaje_chistoria10 = calcularPorcentaje($chistoria, 10);
$porcentaje_cciencias20 = calcularPorcentaje($cciencias, 20);
$porcentaje_cciencias15 = calcularPorcentaje($cciencias, 15);
$porcentaje_cciencias10 = calcularPorcentaje($cciencias, 10);
$porcentaje_historia_ciencias15 = calcularPorcentaje(max($chistoria, $cciencias), 15);
$porcentaje_historia_ciencias10 = calcularPorcentaje(max($chistoria, $cciencias), 10);
$porcentaje_cmatematica5 = calcularPorcentaje($cmatematica2, 5);

// Puedes sumar los porcentajes para obtener el total
$agronomia = $porcentaje_nem25 + $porcentaje_ranking40 + $porcentaje_clectora10 + $porcentaje_cmatematica15 + $porcentaje_historia_ciencias10;
$arquitectura = $porcentaje_nem35 + $porcentaje_ranking35 + $porcentaje_clectora10 + $porcentaje_cmatematica10 + $porcentaje_historia_ciencias10;
$auditoria = $porcentaje_nem10 + $porcentaje_ranking60 + $porcentaje_clectora10 + $porcentaje_cmatematica10 + $porcentaje_historia_ciencias10;
$biologia_marina = $porcentaje_nem20 + $porcentaje_ranking40 + $porcentaje_clectora10 + $porcentaje_cmatematica15 + $porcentaje_historia_ciencias15;
$derecho = $porcentaje_nem35 + $porcentaje_ranking15 + $porcentaje_clectora20 + $porcentaje_cmatematica10 + $porcentaje_chistoria20;
$enfermeria = $porcentaje_nem20 + $porcentaje_ranking25 + $porcentaje_clectora15 + $porcentaje_cmatematica20 + $porcentaje_cciencias20;
$fonoaudiologia = $porcentaje_nem35 + $porcentaje_ranking35 + $porcentaje_clectora10 + $porcentaje_cmatematica10 + $porcentaje_cciencias10;
$ingenieria_plancomun = $porcentaje_nem10 + $porcentaje_ranking50 + $porcentaje_clectora10 + $porcentaje_cmatematica20 + $porcentaje_historia_ciencias10;
$ingenieria_civilplancomun = $porcentaje_nem10 + $porcentaje_ranking45 + $porcentaje_clectora10 + $porcentaje_cmatematica20 + $porcentaje_historia_ciencias10 + $porcentaje_cmatematica5;
$ingenieria_comercial = $porcentaje_nem10 + $porcentaje_ranking60 + $porcentaje_clectora10 + $porcentaje_cmatematica10 + $porcentaje_historia_ciencias10;
$ingenieria_construccion = $porcentaje_nem15 + $porcentaje_ranking40 + $porcentaje_clectora10 + $porcentaje_cmatematica20 + $porcentaje_historia_ciencias10 + $porcentaje_cmatematica5;
$kinesiologia = $porcentaje_nem30 + $porcentaje_ranking40 + $porcentaje_clectora10 + $porcentaje_cmatematica10 + $porcentaje_cciencias10;
$medicina = $porcentaje_nem20 + $porcentaje_ranking25 + $porcentaje_clectora15 + $porcentaje_cmatematica25 + $porcentaje_historia_ciencias15;
$nutricion_dietetica = $porcentaje_nem35 + $porcentaje_ranking35 + $porcentaje_clectora10 + $porcentaje_cmatematica10 + $porcentaje_cciencias10;
$pedagogia_castellano = $porcentaje_nem35 + $porcentaje_ranking35 + $porcentaje_clectora10 + $porcentaje_cmatematica10 + $porcentaje_historia_ciencias10;
$pedagogia_basica = $porcentaje_nem35 + $porcentaje_ranking35 + $porcentaje_clectora10 + $porcentaje_cmatematica10 + $porcentaje_historia_ciencias10;
$pedagogia_diferencial = $porcentaje_nem35 + $porcentaje_ranking35 + $porcentaje_clectora10 + $porcentaje_cmatematica10 + $porcentaje_historia_ciencias10;
$pedagogia_fisica = $porcentaje_nem35 + $porcentaje_ranking35 + $porcentaje_clectora10 + $porcentaje_cmatematica10 + $porcentaje_historia_ciencias10;
$pedagogia_parvularia = $porcentaje_nem35 + $porcentaje_ranking35 + $porcentaje_clectora10 + $porcentaje_cmatematica10 + $porcentaje_historia_ciencias10;
$pedagogia_historia = $porcentaje_nem35 + $porcentaje_ranking35 + $porcentaje_clectora10 + $porcentaje_cmatematica10 + $porcentaje_historia_ciencias10;
$pedagogia_ingles = $porcentaje_nem35 + $porcentaje_ranking35 + $porcentaje_clectora10 + $porcentaje_cmatematica10 + $porcentaje_historia_ciencias10;
$pedagogia_musica = $porcentaje_nem35 + $porcentaje_ranking35 + $porcentaje_clectora10 + $porcentaje_cmatematica10 + $porcentaje_historia_ciencias10;
$pedagogia_matematicas = $porcentaje_nem30 + $porcentaje_ranking35 + $porcentaje_clectora10 + $porcentaje_cmatematica10 + $porcentaje_historia_ciencias10 + $porcentaje_cmatematica5;
$psicologia = $porcentaje_nem35 + $porcentaje_ranking35 + $porcentaje_clectora10 + $porcentaje_cmatematica10 + $porcentaje_historia_ciencias10;
$terapia_ocupacional = $porcentaje_nem40 + $porcentaje_ranking30 + $porcentaje_clectora10 + $porcentaje_cmatematica10 + $porcentaje_cciencias10;
$trabajo_social = $porcentaje_nem35 + $porcentaje_ranking35 + $porcentaje_clectora10 + $porcentaje_cmatematica10 + $porcentaje_chistoria10;

?>