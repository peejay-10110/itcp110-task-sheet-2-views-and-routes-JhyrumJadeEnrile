<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Enrile E-Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 24px;
            margin-top: 20px;
        }
        .project-card {
            background: var(--card-background);
            border: 1px solid var(--border-color);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.07);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .project-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 24px rgba(0,0,0,0.12);
        }
        .project-card-header {
            background-color: var(--primary-color);
            padding: 20px;
            text-align: center;
            font-size: 2.5em;
        }
        .project-card-body {
            padding: 16px;
        }
        .project-card-body h3 {
            margin: 0 0 8px 0;
            color: var(--secondary-color);
            font-size: 1.1em;
        }
        .project-card-body p {
            font-size: 0.9em;
            color: #555;
            margin: 0 0 12px 0;
            line-height: 1.5;
        }
        .tag {
            display: inline-block;
            background-color: #d6eaf8;
            color: #1a5276;
            font-size: 0.75em;
            padding: 3px 10px;
            border-radius: 20px;
            margin: 2px;
            font-weight: bold;
        }
        .project-status {
            margin-top: 10px;
            font-size: 0.8em;
            font-weight: bold;
        }
        .status-done   { color: #27ae60; }
        .status-wip    { color: #e67e22; }
        .status-plan   { color: #7f8c8d; }
    </style>
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
    <section id="projects">
        <h2>My Projects</h2>
        <p style="text-align:center; color:#7f8c8d;">A collection of academic and personal projects I have worked on.</p>

        <div class="projects-grid">

            <div class="project-card">
                <div class="project-card-header"></div>
                <div class="project-card-body">
                    <h3>Personal E-Portfolio Website</h3>
                    <p>A full-stack e-portfolio built with Spring Boot and later migrated to Laravel. Features personal info, grades, gallery, journal, and more.</p>
                    <span class="tag">Laravel</span>
                    <span class="tag">PHP</span>
                    <span class="tag">HTML/CSS</span>
                    <div class="project-status status-wip">⚙ In Progress</div>
                </div>
            </div>

            <div class="project-card">
                <div class="project-card-header"></div>
                <div class="project-card-body">
                    <h3>Achieva</h3>
                    <p>A Student Tracking System for managing academic progress and performance.</p>
                    <span class="tag">Personal</span>
                    <span class="tag">Strategy</span>
                    <div class="project-status status-done">✔ Completed</div>
                </div>
            </div>

            <div class="project-card">
                <div class="project-card-header"></div>
                <div class="project-card-body">
                    <h3>Orgvibe</h3>
                    <p>A student organization management app for coordinating events and activities.</p>
                    <span class="tag">Java</span>
                    <span class="tag">Academic</span>
                    <div class="project-status status-done">✔ Completed</div>
                </div>
            </div>

            <div class="project-card">
                <div class="project-card-header"></div>
                <div class="project-card-body">
                    <h3>Desktop App of Achieva</h3>
                    <p>A desktop application version of the Achieva student tracking system, providing a more robust and feature-rich experience.</p>
                    <span class="tag">Laravel</span>
                    <span class="tag">MySQL</span>
                    <div class="project-status status-plan">✔ Completed</div>
                </div>
            </div>

            <div class="project-card">
                <div class="project-card-header"></div>
                <div class="project-card-body">
                    <h3>Other um-academic self projects</h3>
                    <p>A series of personal projects that combine academic learning with creative expression.</p>
                    <span class="tag">Music</span>
                    <span class="tag">Personal</span>
                    <div class="project-status status-wip">✔ Completed</div>
                </div>
            </div>
        </div>
    </section>
</div>

</body>
</html>
