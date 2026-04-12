<?php
header('Content-Type: application/json');
$action = $_GET['action'] ?? '';

$data = [
    "identity" => [
        "name" => "SINTA SARWO",
        "title" => "Aspiring System Analyst | Informatics Student",
        "location" => "Palangka Raya, Kalimantan Tengah",
        "email" => "muhamdmaliq@gmail.com",
        "profile" => "Mahasiswa Teknik Informatika di Universitas Telkom Purwokerto dengan spesialisasi analisis sistem dan pengembangan software. Saya berfokus pada menjembatani kebutuhan bisnis dengan solusi teknis melalui perancangan arsitektur yang solid (UML/ACL) dan narasi visual yang efektif. Berpengalaman memimpin tim internasional dan mengelola proyek bersertifikat HKI."
    ],
    "experience" => [
        [
            "role" => "Intern IT (System Analyst & Developer)",
            "company" => "DPMPTSP Kabupaten Banyumas",
            "period" => "Januari 2026 – Februari 2026",
            "desc" => "Bertanggung jawab dalam pengembangan SIPERKAT. Melakukan analisis kebutuhan fungsional dan merancang struktur hak akses (ACL) yang memisahkan otoritas Admin Utama (Full Control) dengan Admin standar serta sinkronisasi antar Backend dan Frontend."
        ],
        [
            "role" => "Coordinator Event Organizer",
            "company" => "KUI International Volunteer",
            "period" => "Mei 2024 – Sekarang",
            "desc" => "Memimpin perencanaan strategis 'The Index 2025'. Mengoordinasikan mobilitas internasional untuk 13 partisipan mancanegara dan mengelola administrasi digital lintas budaya."
        ]
    ],
    "education" => [
        ["title" => "S1 Teknik Informatika", "inst" => "Telkom University Purwokerto", "period" => "2023 - Sekarang"],
        ["title" => "International Science & Invention Fair (ISIF) 2025", "inst" => "ISIF, Bali (Online)", "period" => "2025"],
        ["title" => "Global Project-Based Learning", "inst" => "Suranaree University of Technology, Thailand", "period" => "2025"],
        ["title" => "Virtual Assistant Certification", "inst" => "SGB VA Course", "period" => "2024"]
    ],
    "projects" => [
        [
            "id" => "logicheck",
            "title" => "LogiCheck",
            "tag" => "GOLD MEDAL ISIF 2025 & HKI",
            "role" => "Visual Strategist & Communication Lead",
            "desc" => "Platform AI untuk pengasahan logika berpikir kritis.",
            "detail" => "Berperan sebagai penerjemah teknis; mengubah logika sistem AI yang kompleks menjadi narasi visual dan dokumentasi yang dipahami juri internasional, membawa tim meraih Medali Emas di ISIF 2025.",
            "tech" => ["AI Analysis", "Technical Visual", "HKI"],
            "img" => "assets/LogiCheck.png"
        ],
        [
            "id" => "solusam",
            "title" => "SoluSam",
            "tag" => "HKI CERTIFIED",
            "role" => "Lead Developer & System Designer",
            "desc" => "Digitalisasi operasional bank sampah untuk pengepul.",
            "detail" => "Merancang alur kerja sistem menggunakan CodeIgniter 4. Mengimplementasikan logika 'Delete and Re-create' untuk memastikan sinkronisasi data yang absolut dan mencegah redundansi pada laporan pengepul.",
            "tech" => ["CodeIgniter 4", "System Design", "HKI"],
            "img" => "assets/SoluSam.png"
        ],
        [
            "id" => "siperkat",
            "title" => "SIPERKAT",
            "tag" => "INTERNSHIP 2026",
            "role" => "System Analyst",
            "desc" => "Sistem reservasi kendaraan dan ruang rapat terintegrasi.",
            "detail" => "Menganalisis birokrasi kantor untuk menciptakan sistem reservasi yang efisien. Merancang skema Access Control List (ACL) mendalam untuk proteksi data akun.",
            "tech" => ["ACL Design", "PHP", "MySQL"],
            "img" => "assets/Siperkat.jpeg"
        ],
        [
            "id" => "edulink",
            "title" => "EduLink",
            "tag" => "CAMPUS FUNDED",
            "role" => "System Analyst & UI/UX Designer",
            "desc" => "Platform kolaborasi pengembangan kompetensi guru.",
            "detail" => "Melakukan analisis sistem mendalam menggunakan UML (Activity, Class, dan Use Case Diagram) untuk memastikan skalabilitas platform.",
            "tech" => ["UML Analysis", "UI/UX Design"],
            "img" => "assets/EduLink.png"
        ],
        [
            "id" => "cflix",
            "title" => "CFlix",
            "tag" => "HKI CERTIFIED",
            "role" => "Backend Developer",
            "desc" => "Aplikasi streaming film berbasis C++.",
            "detail" => "Mengembangkan struktur data array dan algoritma searching yang dioptimasi untuk kecepatan akses data film. Proyek ini telah dipatenkan melalui HKI.",
            "tech" => ["C++", "Algorithm", "HKI"],
            "img" => "assets/CFlix.png"
        ]
    ]
];

if ($action == 'get_data') echo json_encode($data);
?>