
function onSubmit(token) {
    document.getElementById("demo-form").submit();
}

function onClick(e) {
    e.preventDefault();
    grecaptcha.ready(function () {
        grecaptcha.execute('6LfciCUjAAAAAOgp6mqTQQLC5zuuVujIp6351gYH', {action: 'submit'}).then(function (token) {
            // Add your logic to submit to your backend server here.
        });
    });
}