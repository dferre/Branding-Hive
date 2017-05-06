<?php
session_start();
include 'dbconnect.php';

//var_dump($_POST['profilePicture']);


$un = $_POST['username'];
$pw = $_POST['password'];

$pp = $_POST['profilePicture'];
$fn = $_POST['FirstName'];
$ln = $_POST['LastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pBio = $_POST['personalBio'];

$clegal = $_POST['CompanyLegalName'];
$bname = $_POST['BrandName'];
$address = $_POST['Address'];
$city = $_POST['City'];
$st = $_POST['State'];
$zip = $_POST['ZIP'];
$web = $_POST['Website'];
$facebook = $_POST['Facebook'];
$twitter = $_POST['Twitter'];
$instagram = $_POST['Instagram'];
$linkedin = $_POST['LinkedIn'];


$history = $_POST['BrandHistory'];
$industry = $_POST['Industry'];
$target = $_POST['TargetMarket'];
$m1 = $_POST['Word1'];
$m2 = $_POST['Word2'];
$m3 = $_POST['Word3'];
$m4 = $_POST['Word4'];
$imagine = $_POST['ImaginationStatement'];
$g1 = $_POST['Goal1'];
$g2 = $_POST['Goal2'];
$g3 = $_POST['Goal3'];
$g4 = $_POST['Goal4'];
$g5 = $_POST['Goal5'];
$g6 = $_POST['Goal6'];

$clogo = $_POST['CompanyLogo'];
$bstandards = $_POST['BrandStandards'];
$assets = $_POST['OtherAssets'];
$color1 = $_POST['Color1'];
$color2 = $_POST['Color2'];
$color3 = $_POST['Color3'];
$color4 = $_POST['Color4'];
$font1 = $_POST['Font1'];
$font2 = $_POST['Font2'];

$kw = $_POST['KeyWords'];
$pt = $_POST['PeopleThink'];
$uq = $_POST['Uniqueness'];

$challenge = $_POST['Challenge'];
$overcome = $_POST['OvercomeChallenge'];

$comp1 = $_POST['Competition1'];
$comp2 = $_POST['Competition2'];
$comp3 = $_POST['Competition3'];
$comp4 = $_POST['Competition4'];
$comp5 = $_POST['Competition5'];
$comp6 = $_POST['Competition6'];
$ca = $_POST['CompetitiveAdvantage'];

$strength = $_POST['Strengths'];
$weakness = $_POST['Weaknesses'];
$opp = $_POST['Opportunities'];
$threats = $_POST['Threats'];

$emotion = $_POST['Emotional'];
$spirit = $_POST['Spiritual'];
$funct = $_POST['Functional'];
$social = $_POST['Social'];
$notes = $_POST['Notes'];

$sql = "INSERT INTO user (username, password, profile_picture, first_name, last_name, email, phone_number, personal_bio, legal_name, brand_name, address, city, st, zip, website, facebook, twitter, instagram, linkedin, BrandHistory, Industry, TargetMarket, Word1, Word2, Word3, Word4, ImaginationStatement, Goal1, Goal2, Goal3, Goal4, Goal5, Goal6, CompanyLogo, BrandStandards, OtherAssets, Color1, Color2, Color3, Color4, Font1, Font2, KeyWords, PeopleThink, Uniqueness, Challenge, OvercomeChallenge, Competition1, Competition2, Competition3, Competition4, Competition5, Competition6, CompetitiveAdvantage, Strengths, Weaknesses, Opportunities, Threats, Emotional, Spiritual, Functional, Social, Notes)
VALUES ('$un', '$pw', '$pp', '$fn', '$ln', '$email', '$phone', '$pBio', '$clegal', '$bname', '$address', '$city', '$st', '$zip', '$web', '$facebook', '$twitter', '$instagram', '$linkedin', '$history', '$industry', '$target', '$m1', '$m2', '$m3', '$m4', '$imagine', '$g1', '$g2', '$g3', '$g4', '$g5', '$g6', '$clogo', '$bstandards', '$assets', '$color1', '$color2', '$color3', '$color4', '$font1', '$font2', '$kw', '$pt', '$uq', '$challenge', '$overcome', '$comp1', '$comp2', '$comp3', '$comp4', '$comp5', '$comp6', '$ca', '$strength', '$weakness', '$opp', '$threats', '$emotion', '$spirit', '$funct', '$social', '$notes')";


$result = mysqli_query($conn, $sql);

header("Location: ../index.php");
?>
