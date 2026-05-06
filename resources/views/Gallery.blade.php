<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Enrile E-Portfolio</title>
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
    <section class="gallery">
        <h2>My Favorite Bands</h2>
        <div class="photo-container">
            <div class="photo-box">
                <img src="{{ asset('Pictures/Gallery/Band1.jpg') }}" alt="BAND">
                <p class="description">Fleetwood Mac.</p>
            </div>
            <div class="photo-box">
                <img src="{{ asset('Pictures/Gallery/Band2.jpg') }}" alt="BAND">
                <p class="description">Whirlpool Street.</p>
            </div>
            <div class="photo-box">
                <img src="{{ asset('Pictures/Gallery/Band3.jpg') }}" alt="BAND">
                <p class="description">Queen.</p>
            </div>
            <div class="photo-box">
                <img src="{{ asset('Pictures/Gallery/Band4.jpg') }}" alt="BAND">
                <p class="description">Eraserheads.</p>
            </div>
        </div>
    </section>
</div>

</body>
</html>