$(document).ready(function () {
    $('#dob').on('change', function () {
        const dob = new Date(this.value);
        const diffMs = Date.now() - dob.getTime();
        const ageDate = new Date(diffMs);
        const age = Math.abs(ageDate.getUTCFullYear() - 1970);
        $('#age').val(age);
    });

    $('#addEducation').on('click', function () {
        const educationHtml = `
            <div class="input-group">
                <label>Instituição e Curso</label>
                <input type="text" name="education[]" required>
            </div>`;
        $('#education-section').append(educationHtml);
    });

    $('#addExperience').on('click', function () {
        const experienceHtml = `
            <div class="input-group">
                <label>Empresa e Cargo</label>
                <input type="text" name="experience[]" required>
                <label>Descrição das Atividades</label>
                <textarea name="experience-desc[]" required></textarea>
            </div>`;
        $('#experience-section').append(experienceHtml);
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const inputs = document.querySelectorAll('.input-group input[type="text"], .input-group input[type="tel"], .input-group textarea');

    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });

        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('focused');
        });
    });
});
