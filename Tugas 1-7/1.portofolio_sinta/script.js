$(document).ready(function() {
    $.ajax({
        url: 'controller.php?action=get_data',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            // Populate Identity
            $('#user-name').text(data.identity.name);
            $('#user-title').text(data.identity.title);
            $('#user-profile').text(data.identity.profile);
            $('#user-email').text(data.identity.email);
            $('#user-location').text(data.identity.location);

            // Populate Projects
            let projectsHtml = '';
            data.projects.forEach(p => {
                projectsHtml += `
                    <div class="project-card" onclick="openProject('${p.id}')">
                        <div class="tag">${p.tag}</div>
                        <h3>${p.title}</h3>
                        <p>${p.desc}</p>
                        <div class="tech-row">
                            ${p.tech.map(t => `<span>${t}</span>`).join('')}
                        </div>
                    </div>`;
            });
            $('#project-grid').html(projectsHtml);

            // Populate Experience
            let expHtml = '';
            data.experience.forEach(e => {
                expHtml += `
                    <div class="cv-item">
                        <h4>${e.role}</h4>
                        <small class="cyan-text">${e.company} | ${e.period}</small>
                        <p>${e.desc}</p>
                    </div>`;
            });
            $('#exp-list').html(expHtml);

            // Populate Education
            let eduHtml = '';
            data.education.forEach(ed => {
                let certHtml = ed.cert ? `<img src="${ed.cert}" class="cert-preview" alt="Sertifikat ${ed.title}">` : '';
                let hoverClass = ed.cert ? 'has-cert' : '';

                eduHtml += `
                    <div class="cv-item ${hoverClass}">
                        <h4>${ed.title}</h4>
                        <p>${ed.inst} (${ed.period})</p>
                        ${certHtml}
                    </div>`;
            });
            $('#edu-list').html(eduHtml);

            // Global Modal Handler
            window.openProject = function(id) {
                const p = data.projects.find(proj => proj.id === id);
                $('#modal-body').hide().html(`
                    <div class="tag">${p.tag}</div>
                    <h2>${p.title}</h2>
                    <div class="modal-role">Peran: ${p.role}</div>
                    <div class="modal-detail">
                        <p style="margin-bottom:20px;">${p.detail}</p>
                        <div class="img-container" style="background:#0b0e14; padding:15px; border-radius:15px; border:1px solid #1f2229;">
                            <img src="${p.img}" alt="${p.title}" style="width:100%; border-radius:10px; filter: grayscale(0.5);">
                            <p style="font-size:0.6rem; color:#444; margin-top:10px; text-align:center;">Project Preview Asset: ${p.img}</p>
                        </div>
                    </div>
                `).fadeIn(400);
                $('#projectModal').fadeIn(300);
            };
        },
        error: function() {
            console.error("Gagal mengambil data dari controller.");
        }
    });

    // Close Modal
    $('.close-btn, #projectModal').click(function(e) {
        if(e.target !== this) return;
        $('#projectModal').fadeOut(200);
    });
});