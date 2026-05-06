<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - Enrile E-Portfolio</title>
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
    <section class="cv-section">
        <h2>Curriculum Vitae</h2>
        <p>You can preview my CV below and download a copy for your reference.</p>

        <div class="cv-preview">
            {{-- Replace 'cv-photo.jpg' with your actual CV image filename --}}
            <img src="{{ asset('Pictures/cv.jpg') }}" alt="Jhyrum Jade Enrile - Curriculum Vitae">
        </div>

        {{-- Replace 'JhyrumJadeEnrile_CV.pdf' with your actual CV PDF filename --}}
        <a class="download-btn" href="{{ asset('files/JhyrumJadeEnrile_CV.pdf') }}" download>
            ⬇ Download My CV
        </a>
        <p class="cv-note">File format: PDF &nbsp;|&nbsp; Last updated: 2025</p>
    </section>
</div>

</body>
</html>