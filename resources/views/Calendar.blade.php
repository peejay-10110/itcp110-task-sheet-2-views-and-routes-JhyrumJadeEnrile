<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar - Enrile E-Portfolio</title>
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
    <section id="calendar-section">
        <h2>My Calendar</h2>
        <p style="text-align:center; color:#7f8c8d;">A month-by-month view of my events, exams, hobbies, and life activities.</p>

        <div class="calendar-controls">
            <button onclick="changeMonth(-1)">&#8592; Prev</button>
            <div id="month-year-label"></div>
            <button onclick="changeMonth(1)">Next &#8594;</button>
        </div>

        <div class="calendar-grid" id="calendar-grid">
            <!-- Days of week headers -->
            <div class="cal-header">Sun</div>
            <div class="cal-header">Mon</div>
            <div class="cal-header">Tue</div>
            <div class="cal-header">Wed</div>
            <div class="cal-header">Thu</div>
            <div class="cal-header">Fri</div>
            <div class="cal-header">Sat</div>
        </div>

        <div class="event-legend">
            <span><div class="dot" style="background:#d6eaf8;"></div> School / Class</span>
            <span><div class="dot" style="background:#d5f5e3;"></div> Hobby / Activity</span>
            <span><div class="dot" style="background:#fdebd0;"></div> Personal Event</span>
            <span><div class="dot" style="background:#fadbd8;"></div> Exam / Deadline</span>
        </div>
    </section>
</div>

<script>
    // Events data - customize these!
    const events = {
        // Format: 'YYYY-MM-DD': [{text, type}]
        '2025-05-01': [{text: '🎉 Labor Day', type: 'personal'}],
        '2025-05-05': [{text: '📝 Math Exam', type: 'exam'}],
        '2025-05-07': [{text: '🎸 Band Practice', type: 'hobby'}],
        '2025-05-10': [{text: '🏀 Basketball', type: 'hobby'}, {text: '📚 Chemistry Lab', type: 'school'}],
        '2025-05-12': [{text: '📝 Physics Quiz', type: 'exam'}],
        '2025-05-14': [{text: '♟ Chess Tournament', type: 'hobby'}],
        '2025-05-15': [{text: '🎂 Friend\'s Birthday', type: 'personal'}],
        '2025-05-19': [{text: '📚 Prog1 Lab', type: 'school'}],
        '2025-05-21': [{text: '📝 Midterms', type: 'exam'}],
        '2025-05-22': [{text: '📝 Midterms', type: 'exam'}],
        '2025-05-23': [{text: '📝 Midterms', type: 'exam'}],
        '2025-05-24': [{text: '🎱 Billiards Night', type: 'hobby'}],
        '2025-05-28': [{text: '🍳 Cooking Day', type: 'personal'}],
        '2025-05-31': [{text: '🏀 Basketball', type: 'hobby'}],
        '2025-06-02': [{text: '📚 Class Resume', type: 'school'}],
        '2025-06-05': [{text: '🌱 Env. Science Report', type: 'school'}],
        '2025-06-10': [{text: '🎸 Bass Recital', type: 'hobby'}],
        '2025-06-12': [{text: '🎉 Independence Day', type: 'personal'}],
        '2025-06-15': [{text: '♟ Chess Match', type: 'hobby'}],
        '2025-06-20': [{text: '📝 Final Exams', type: 'exam'}],
        '2025-06-21': [{text: '📝 Final Exams', type: 'exam'}],
        '2025-07-04': [{text: '🏀 Basketball League', type: 'hobby'}],
        '2025-07-15': [{text: '📝 Summer Class Exam', type: 'exam'}],
    };

    let currentDate = new Date();

    function pad(n) { return String(n).padStart(2, '0'); }

    function renderCalendar() {
        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();
        const today = new Date();

        const monthNames = ['January','February','March','April','May','June',
                            'July','August','September','October','November','December'];
        document.getElementById('month-year-label').textContent = `${monthNames[month]} ${year}`;

        const grid = document.getElementById('calendar-grid');
        // Remove old day cells (keep 7 headers)
        const cells = grid.querySelectorAll('.cal-day, .empty');
        cells.forEach(c => c.remove());

        const firstDay = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        // Empty cells before first day
        for (let i = 0; i < firstDay; i++) {
            const empty = document.createElement('div');
            empty.className = 'cal-day empty';
            grid.appendChild(empty);
        }

        for (let d = 1; d <= daysInMonth; d++) {
            const dateKey = `${year}-${pad(month+1)}-${pad(d)}`;
            const isToday = (d === today.getDate() && month === today.getMonth() && year === today.getFullYear());

            const cell = document.createElement('div');
            cell.className = 'cal-day' + (isToday ? ' today' : '');

            const numDiv = document.createElement('div');
            numDiv.className = 'day-number';
            numDiv.textContent = d;
            cell.appendChild(numDiv);

            if (events[dateKey]) {
                events[dateKey].forEach(ev => {
                    const evDiv = document.createElement('div');
                    evDiv.className = `event ${ev.type}`;
                    evDiv.textContent = ev.text;
                    cell.appendChild(evDiv);
                });
            }

            grid.appendChild(cell);
        }
    }

    function changeMonth(delta) {
        currentDate.setMonth(currentDate.getMonth() + delta);
        renderCalendar();
    }

    renderCalendar();
</script>

</body>
</html>