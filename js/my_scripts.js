
function onSubmit(token) {
    document.getElementById("demo-form").submit();
}

function onClick(e) {
    e.preventDefault();
    grecaptcha.ready(function () {
        grecaptcha.execute('6LeKrikjAAAAAMueTepO9B659RVPiES_uJ9Ja3CE', {action: 'submit'}).then(function (token) {
            // Add your logic to submit to your backend server here.
        });
    });
}