<?php

require_once("DB.php");
$sliders = getWhere('sliders', "status='Y'");
$clients = getWhere("clients", "status='Y'");
$portfolios = getWhere("portfolios", "status='y'");
$getProjects = getJoin("portfolios","projects","portfolios.id AS Portfoli_id,
portfolios.name AS portfolio_name,
portfolios.status AS portfolio_status,
projects.id AS project_id,
projects.img AS img,
projects.name AS project_name,
projects.status AS project_status", "id", "portfolio_id");
$services = getWhere('services', "status='y'");
$contact = getOnes("contacts", "status='y'");
$socialMedias = getWhere('socialMedias', "status='y'");
$abouts = getOnes("abouts");
$listString = $abouts["list"];
$listStringToArray = explode(",", $listString);



?>