<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinta Sarwo | System Analyst Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="glow-bg"></div>
    
    <nav>
        <div class="container nav-flex">
            <div class="logo">SINTA<span>SARWO</span></div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#projects">Portfolio</a></li>
                <li><a href="#cv">Curriculum Vitae</a></li>
            </ul>
        </div>
    </nav>

    <header id="home" class="container hero">
        <div class="hero-content">
            <span class="badge">System Analyst Enthusiast</span>
            <h1 id="user-name">SINTA SARWO</h1>
            <p id="user-title" class="cyan-text"></p>
            <div class="profile-box">
                <p id="user-profile"></p>
                <div class="contact-strip">
                    <span id="user-email"></span> • <span id="user-location"></span>
                </div>
            </div>
        </div>
    </header>

    <main class="container">
        <section id="projects">
            <h2 class="section-title">Technical Portfolio <small>(HKI & Awards focus)</small></h2>
            <div id="project-grid" class="project-grid">
                </div>
        </section>

        <section id="cv" class="cv-section">
            <div class="cv-grid">
                <div class="cv-col">
                    <h3 class="col-title">Pengalaman Kerja & Organisasi</h3>
                    <div id="exp-list"></div>
                </div>
                <div class="cv-col">
                    <h3 class="col-title">Pendidikan & Sertifikasi</h3>
                    <div id="edu-list"></div>
                </div>
            </div>
        </section>

        <section class="skills-section">
            <h3 class="col-title">Keahlian & Tools Utama</h3>
            <div class="skills-container">
                <div class="skill-card">
                    <h4>Analysis & Design</h4>
                    <p>UML (Activity, Class, Use Case), ACL Design, System Requirement Gathering.</p>
                </div>
                <div class="skill-card">
                    <h4>Development</h4>
                    <p>PHP (CI4, Laravel), C++, Go, JavaScript (React), MySQL, PostgreSQL.</p>
                </div>
                <div class="skill-card">
                    <h4>Soft Skills</h4>
                    <p>Fasih Berbahasa Inggris, Public Speaking, Kepemimpinan Internasional.</p>
                </div>
            </div>
        </section>
    </main>

    <div id="projectModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <div id="modal-body"></div>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2026 Sinta Sarwo. Built with Native PHP & AJAX.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>