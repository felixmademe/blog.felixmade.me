$("#alert").hide();
$("#subscribeForm").on("submit", function (e) {
    $("#alert").hide();
    $("#alert p").text("");

    e.preventDefault();
    e.stopPropagation();

    let email = $("input[type=email]").val();
    let recaptcha = $("#recaptcha").val();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    let ajax = $.ajax(
        {
            type: 'POST',
            url: "/subscribeForm",
            data:
                {
                    email: email,
                    recaptcha: recaptcha,
                },
            dataType: 'json',
            success: function (data) {
                $("#alert p").text(data.result);
                $("#subscribeForm")[0].reset();
                $("#alert").fadeIn(400).delay(10000).fadeOut(400);
            },
            error: function (data) {
                $("#alert p").text(data.error);
                $("#alert").fadeIn(400).delay(10000).fadeOut(400);
            }
        });
});
