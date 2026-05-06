<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Enrile E-Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .contact-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-top: 20px;
        }
        .contact-info h3 {
            color: var(--primary-color);
            margin-bottom: 16px;
            font-size: 1.2em;
            border-bottom: 2px dashed var(--border-color);
            padding-bottom: 8px;
        }
        .contact-item {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 16px;
            padding: 12px;
            background: #f8f9fa;
            border-radius: 8px;
            font-size: 0.95em;
        }
        .contact-icon {
            font-size: 1.5em;
            width: 36px;
            text-align: center;
        }
        .contact-item a {
            color: var(--primary-color);
            text-decoration: none;
        }
        .contact-item a:hover { text-decoration: underline; }

        /* Contact Form */
        .contact-form h3 {
            color: var(--primary-color);
            margin-bottom: 16px;
            font-size: 1.2em;
            border-bottom: 2px dashed var(--border-color);
            padding-bottom: 8px;
        }
        .form-group {
            margin-bottom: 16px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
            color: var(--secondary-color);
            font-size: 0.9em;
        }
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-family: var(--font-family);
            font-size: 0.95em;
            color: var(--secondary-color);
            background: #fafafa;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }
        .form-group input:focus,
        .form-group textarea:focus {
            border-color: var(--primary-color);
            outline: none;
            background: white;
        }
        .form-group textarea {
            height: 130px;
            resize: vertical;
        }
        .submit-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 36px;
            border-radius: 6px;
            font-size: 1em;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            width: 100%;
        }
        .submit-btn:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }
        .success-msg {
            display: none;
            background: #d5f5e3;
            color: #1e8449;
            padding: 12px;
            border-radius: 6px;
            margin-top: 12px;
            text-align: center;
            font-weight: bold;
        }
        @media (max-width: 768px) {
            .contact-wrapper { grid-template-columns: 1fr; }
        }
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
    <section id="contact">
        <h2>Contact Me</h2>
        <p style="text-align:center; color:#7f8c8d;">Feel free to reach out for collaborations, questions, or just to say hi!</p>

        <div class="contact-wrapper">

            <!-- Contact Info -->
            <div class="contact-info">
                <h3>📋 My Contact Details</h3>

                <div class="contact-item">
                    <span class="contact-icon">📧</span>
                    <div>
                        <strong>Email</strong><br>
                        <a href="mailto:jhyrumjade.enrile@tup.edu.ph">jhyrumjade.enrile@tup.edu.ph</a>
                    </div>
                </div>

                <div class="contact-item">
                    <span class="contact-icon">📱</span>
                    <div>
                        <strong>Phone / Mobile</strong><br>
                        <a href="tel:+639916528260">+63 991 652 8260</a>
                    </div>
                </div>

                <div class="contact-item">
                    <span class="contact-icon">📍</span>
                    <div>
                        <strong>Location</strong><br>
                        Taguig, Philippines
                    </div>
                </div>

                <div class="contact-item">
                    <span class="contact-icon">🎓</span>
                    <div>
                        <strong>School</strong><br>
                        Technological University of the Philippines (TUP)
                    </div>
                </div>

                <div class="contact-item">
                    <span class="contact-icon">🕐</span>
                    <div>
                        <strong>Available</strong><br>
                        Mon – Fri, After 5:00 PM &nbsp;|&nbsp; Weekdays
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <h3>✉ Send Me a Message</h3>
                <form action="/contact/send" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" placeholder="e.g. Juan dela Cruz" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" placeholder="e.g. juan@email.com" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder="What's this about?" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Write your message here..." required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">🚀 Send Message</button>
                    <div class="success-msg" id="success-msg">✅ Message sent successfully! I'll get back to you soon.</div>
                </form>
            </div>

        </div>
    </section>
</div>

</body>
</html>
