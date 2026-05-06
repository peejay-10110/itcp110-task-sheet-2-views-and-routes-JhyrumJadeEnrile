<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills - Enrile E-Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header>
    <img src="{{ asset('Pictures/images.jfif') }}" alt="Profile Picture">
    <h1>Jhyrum Jade Enrile's E-Portfolio</h1>
</header>

<nav>
    <a href="/index">Personal Information</a>
    <a href="/Skills">Skills</a>
    <a href="/Grades">Grades</a>
    <a href="/Journal">Journal</a>
    <a href="/Gallery">Gallery</a>
    <a href="/CV">CV</a>
    <a href="/Schedule">Schedule</a>
    <a href="/Calendar">Calendar</a>
    <a href="/Projects">Projects</a>
    <a href="/Contact">Contact</a>
</nav>

<div class="container">
    <section id="skills">
        <h2>Skills</h2>
        <dl>
            <dt>Pix, Faerie Companion (Passive)</dt>
            <dd>
                <img src="{{ asset('Pictures/Lulu_PixFaerieCompanion.png') }}" alt="Passive Icon">
                Pix fires magical bolts of energy whenever the champion he's following attacks another enemy unit. These bolts are homing, but can be intercepted by other units.
            </dd>
            <dt>Glitterlance</dt>
            <dd>
                <img src="{{ asset('Pictures/LuluQ.png') }}" alt="Skill 1 Icon">
                Pix and Jhyrum each fire a bolt of magical energy that damages and heavily slows all enemies it hits.
            </dd>
            <dt>Whimsy</dt>
            <dd>
                <img src="{{ asset('Pictures/LuluW.png') }}" alt="Skill 2 Icon">
                If cast on an ally, grants them Attack Speed and Move Speed for a short time. If cast on an enemy, turns them into an adorable critter that can't attack or cast spells.
            </dd>
            <dt>Help, Pix!</dt>
            <dd>
                <img src="{{ asset('Pictures/LuluE.png') }}" alt="Skill 3 Icon">
                If cast on an ally, commands Pix to jump to an ally and shield them. He then follows them and aids their attacks. If cast on an enemy, commands Pix to jump to an enemy and damage them. He then follows them and grants you vision of that enemy.
            </dd>
            <dt>Wild Growth</dt>
            <dd>
                <img src="{{ asset('Pictures/LuluR.png') }}" alt="Skill 4 Icon">
                Jhyrum enlarges an ally, knocking nearby enemies into the air and granting the ally a large amount of bonus health. For the next few seconds, that ally gains an aura that slows nearby enemies.
            </dd>
        </dl>
    </section>
</div>

</body>
</html>