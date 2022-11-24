
function onSubmit(token) {
    document.getElementById("demo-form").submit();
}

function onClick(e) {
    e.preventDefault();
    grecaptcha.ready(function () {
        grecaptcha.execute('6LdgADAjAAAAAHzCz08Z-c8YBb_GU-zcov4cNX4D', {action: 'submit'}).then(function (token) {
            // Add your logic to submit to your backend server here.
        });
    });
}