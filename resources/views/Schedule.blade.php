<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule - Enrile E-Portfolio</title>
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
    <section id="schedule">
        <h2>My Class Schedule</h2>
        <p class="note">
            BTVTEICT-T-2A-T &nbsp;|&nbsp; 2nd Year &nbsp;|&nbsp;
            3rd Term &nbsp;|&nbsp; S.Y. 2025–2026 &nbsp;|&nbsp; <strong>21 Units</strong>
        </p>

        <div class="schedule-wrap">
            <table class="block-table">
                <thead>
                    <tr>
                        <th>Time</th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                        <th>Saturday</th>
                    </tr>
                </thead>
                <tbody>

                    <!-- 7:00 AM -->
                    <tr>
                        <td class="time-col">7:00 AM</td>
                        <td><div class="block personal">☀️ Rise and Shine</div></td>
                        <td><div class="block personal">🍳 Cooking</div></td>
                        <td><div class="block personal">🚌 Commute to TUP</div></td>
                        <td><div class="block personal">🚌 Commute to TUP</div></td>
                        <td><div class="block personal">🍳 Cooking</div></td>
                        <td><div class="block personal">☀️ Rise and Shine</div></td>
                    </tr>

                    <!-- 8:00 AM -->
                    <tr>
                        <td class="time-col">8:00 AM</td>
                        <td><div class="block personal">🚌 Commute to TUP</div></td>
                        <td rowspan="3"><div class="block personal">😴 Sleeping</div></td>
                        <!-- Wed: ITCP110-LAB 8:00–11:45 → rowspan 4 (8,9,10,11) -->
                        <td rowspan="4">
                            <div class="block class">
                                💻 Intro to Web Programming (lab)
                                <span class="subj-code">ITCP110-LAB-T</span>
                                <span class="room">8:00–11:45 AM | RM 110A</span>
                            </div>
                        </td>
                        <!-- Thu: FTC4 8:00–11:45 → rowspan 4 -->
                        <td rowspan="4">
                            <div class="block class">
                                🎓 Foundation of Special & Inclusive Education
                                <span class="subj-code">FTC4-T</span>
                                <span class="room">8:00–11:45 AM | RM 206A</span>
                            </div>
                        </td>
                        <td rowspan="4"><div class="block personal">😴 Sleeping</div></td>
                        <td><div class="block hobby">🏀 Basketball</div></td>
                    </tr>

                    <!-- 9:00 AM -->
                    <tr>
                        <td class="time-col">9:00 AM</td>
                        <!-- Mon: ITCP110-LEC 9:00–11:30 → rowspan 3 (9,10,11) -->
                        <td rowspan="3">
                            <div class="block class">
                                🌐 Intro to Web Programming (lec)
                                <span class="subj-code">ITCP110-LEC-T</span>
                                <span class="room">9:00–11:30 AM | RM 110A</span>
                            </div>
                        </td>
                        <!-- Wed & Thu: rowspanned -->
                        <td><div class="block hobby">🏀 Basketball</div></td>
                    </tr>

                    <!-- 10:00 AM -->
                    <tr>
                        <td class="time-col">10:00 AM</td>
                        <!-- Mon: rowspanned -->
                        <!-- Wed & Thu: rowspanned -->
                        <td><div class="block hobby">🏀 Basketball</div></td>
                    </tr>

                    <!-- 11:00 AM -->
                    <tr>
                        <td class="time-col">11:00 AM</td>
                        <!-- Mon: rowspanned -->
                        <td><div class="block personal">🍳 Cooking</div></td>
                        <!-- Wed & Thu: rowspanned -->
                        <td><div class="block personal">💻 Programming</div></td>
                    </tr>

                    <!-- 12:00 PM Lunch -->
                    <tr>
                        <td class="time-col">12:00 PM</td>
                        <td><div class="block personal">🍱 Lunch Break</div></td>
                        <td><div class="block personal">🚌 Commute to TUP</div></td>
                        <td rowspan="2"><div class="block personal">🍱 Lunch Break</div></td>
                        <td><div class="block personal">🍱 Lunch Break</div></td>
                        <td><div class="block personal">🍱 Lunch Break</div></td>
                        <td><div class="block personal">🍳 Cooking</div></td>
                    </tr>

                    <!-- 1:00 PM -->
                    <tr>
                        <td class="time-col">1:00 PM</td>
                        <!-- Mon: GEC7 1:00–4:45 → rowspan 4 (1,2,3,4) -->
                        <td rowspan="4">
                            <div class="block class">
                                🔬 Science, Technology & Society
                                <span class="subj-code">GEC7-T</span>
                                <span class="room">1:00–4:45 PM | RM 209B-A</span>
                            </div>
                        </td>
                        <!-- Tue: MATHS-T 1:00–4:45 → rowspan 4 -->
                        <td rowspan="4">
                            <div class="block class">
                                📊 Probability & Statistics
                                <span class="subj-code">MATHS-T</span>
                                <span class="room">1:00–4:45 PM | RM 206A</span>
                            </div>
                        </td>
                        <!-- Thu: TLE4 1:00–4:45 → rowspan 4 -->
                        <td rowspan="4">
                            <div class="block class">
                                🌾 Intro to Agriculture & Fisheries
                                <span class="subj-code">TLE4-T</span>
                                <span class="room">1:00–4:45 PM | RM 202A</span>
                            </div>
                        </td>
                        <!-- Fri: FTC3 1:00–4:45 → rowspan 4 -->
                        <td rowspan="4">
                            <div class="block class">
                                🏫 Teacher & Community, School, Culture & Org. Leadership
                                <span class="subj-code">FTC3-T</span>
                                <span class="room">1:00–4:45 PM | TUPSTAT RM05-PM</span>
                            </div>
                        </td>
                        <td><div class="block hobby">♟ Chess</div></td>
                    </tr>

                    <!-- 2:00 PM -->
                    <tr>
                        <td class="time-col">2:00 PM</td>
                        <!-- Mon & Tue & Thu & Fri: rowspanned -->
                        <!-- Wed: ITSD220 2:00–5:45 → rowspan 4 (2,3,4,5) -->
                        <td rowspan="4">
                            <div class="block class">
                                🖥 System Analysis & Design
                                <span class="subj-code">ITSD220-T</span>
                                <span class="room">2:00–5:45 PM | RM 110A</span>
                            </div>
                        </td>
                        <td><div class="block hobby">♟ Chess</div></td>
                    </tr>

                    <!-- 3:00 PM -->
                    <tr>
                        <td class="time-col">3:00 PM</td>
                        <!-- Mon, Tue, Wed, Thu, Fri: rowspanned -->
                        <td><div class="block hobby">🎱 Billiards</div></td>
                    </tr>

                    <!-- 4:00 PM -->
                    <tr>
                        <td class="time-col">4:00 PM</td>
                        <!-- Mon, Tue, Thu, Fri end ~4:45; Wed still going -->
                        <td><div class="block hobby">🎱 Billiards<</div></td>
                    </tr>

                    <!-- 5:00 PM -->
                    <tr>
                        <td class="time-col">5:00 PM</td>
                        <td><div class="block personal">🚌 Commute Home</div></td>
                        <td><div class="block personal">🚌 Commute Home</div></td>
                        <!-- Wed: ITSD220 ends 5:45 -->
                        <td><div class="block personal">🚌 Commute Home</div></td>
                        <td><div class="block personal">🚌 Commute Home</div></td>
                        <td><div class="block personal">🚌 Commute Home</div></td>
                    </tr>

                    <!-- 7:00 PM -->
                    <tr>
                        <td class="time-col">7:00 PM</td>
                        <td><div class="block personal">📚 Study / Review</div></td>
                        <td><div class="block personal">📚 Study / Review</div></td>
                        <td><div class="block personal">📚 Study / Review</div></td>
                        <td><div class="block personal">📚 Study / Review</div></td>
                        <td><div class="block personal">🍽 Dinner & Relax</div></td>
                        <td><div class="block personal">🍽 Dinner & Family</div></td>
                    </tr>

                    <!-- 9:00 PM -->
                    <tr>
                        <td class="time-col">9:00 PM</td>
                        <td><div class="block free">😴 Wind Down</div></td>
                        <td><div class="block free">😴 Wind Down</div></td>
                        <td><div class="block free">😴 Wind Down</div></td>
                        <td><div class="block free">😴 Wind Down</div></td>
                        <td><div class="block hobby">🎱 Billiards / Gaming</div></td>
                        <td><div class="block free">😴 Wind Down</div></td>
                    </tr>

                </tbody>
            </table>
        </div>

        <!-- Legend -->
        <div class="legend">
            <div class="legend-item">
                <div class="legend-dot" style="background:#d6eaf8; border-left:4px solid #3498db;"></div>
                <span>Classes / School</span>
            </div>
            <div class="legend-item">
                <div class="legend-dot" style="background:#d5f5e3; border-left:4px solid #27ae60;"></div>
                <span>Hobbies & Activities</span>
            </div>
            <div class="legend-item">
                <div class="legend-dot" style="background:#fdebd0; border-left:4px solid #e67e22;"></div>
                <span>Personal / Routine</span>
            </div>
            <div class="legend-item">
                <div class="legend-dot" style="background:#fafafa; border:1px solid #bdc3c7;"></div>
                <span>Free Time</span>
            </div>
        </div>

    </section>
</div>

</body>
</html>