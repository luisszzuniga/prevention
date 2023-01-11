
function toggleForm(buttonSelector, formSelector) {
    document.querySelector(buttonSelector).addEventListener('click', function () {
        var form = document.querySelector(formSelector);
        if (form.style.display === 'block') {
            form.classList.add('fade-out');
            setTimeout(function () {
                form.style.display = 'none';
                form.classList.remove('fade-out');
            }, 1000); // attendre la fin de l'animation avant de masquer
        } else {
            form.style.display = 'block';
            form.classList.add('fade-in');
        }
    });
}

toggleForm('.add-vehicle-btn', '.vehicle-form-container');
toggleForm('.add-learner-btn', '.learner-form-container');
toggleForm('.add-trainer-btn', '.trainer-form-container');

