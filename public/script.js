
function showModel() {
    document.querySelector('.overlay').classList.add('showoverlay')
    document.querySelector('.container').classList.add('showcontainer')
}
function hideModel() {
    document.querySelector('.overlay').classList.remove('showoverlay')
    document.querySelector('.container').classList.remove('showcontainer')
}
var addnew = document.querySelector(".addnew");
addnew.addEventListener("click", showModel)

var c = document.querySelector(".cancel");
c.addEventListener("click", hideModel)


$(document).ready(function () {
    $('#addnew').on('submit', function (event) {
        event.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: "/submit_form",
            type: "POST",
            data: formData,
            success: function (response) {
                $('#message').css('display', 'block');
                $('#message').text(response[1]);
                $('#addnew')[0].reset();
                console.log(response);
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});
