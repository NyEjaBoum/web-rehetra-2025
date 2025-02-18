document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('inscriptionForm');
    const inputs = form.querySelectorAll('input[required], select[required]');
    const progressBar = document.querySelector('.progress-bar');
    const successAnimation = document.querySelector('.success-animation');
    const serieSelect = document.getElementById('serie');
    const sesSection = document.getElementById('ses-section');

    // Gestion du champ SES
    serieSelect.addEventListener('change', function () {
        if (this.value === 'S') {
            sesSection.style.display = 'block';
            sesSection.classList.add('animate__animated', 'animate__fadeIn');
        } else {
            sesSection.style.display = 'none';
        }
        updateProgress();
    });

    // Mise à jour de la barre de progression
    function updateProgress() {
        const total = inputs.length;
        let filled = 0;
        inputs.forEach(input => {
            if (input.value !== '') filled++;
        });
        const progress = (filled / total) * 100;
        progressBar.style.width = `${progress}%`;
    }

    // Écoute des changements dans les champs
    inputs.forEach(input => {
        input.addEventListener('input', updateProgress);
        input.addEventListener('change', updateProgress);
    });

    // Validation du formulaire
    form.addEventListener('submit', function (event) {
        event.preventDefault();
        if (!form.checkValidity()) {
            event.stopPropagation();
            form.querySelectorAll(':invalid').forEach(input => {
                input.parentElement.classList.add('animate__animated', 'animate__shakeX');
                setTimeout(() => {
                    input.parentElement.classList.remove('animate__animated', 'animate__shakeX');
                }, 1000);
            });
        } else {
            const btn = form.querySelector('button[type="submit"]');
            btn.disabled = true;
            btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Traitement en cours...';

            setTimeout(() => {
                successAnimation.style.display = 'flex';
                successAnimation.classList.add('animate__animated', 'animate__fadeIn');

                setTimeout(() => {
                    form.reset();
                    updateProgress();
                    successAnimation.style.display = 'none';
                    btn.disabled = false;
                    btn.innerHTML = 'S\'inscrire';
                }, 2000);
            }, 1500);
        }
        form.classList.add('was-validated');
    });
});
