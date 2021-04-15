$('.btn_reviews').click(function (e) {
    e.preventDefault();

    $(`input`).removeClass('error');

    let name = $('input[name="nameFull"]').val(),
    phone = $('input[name="phone"]').val(),
    texti = $('textarea[name="texti"]').val();
        
    let formData = new FormData();
    formData.append('nameFull', name);
    formData.append('phone', phone);
    formData.append('texti', texti);


    $.ajax({
        url: 'addrequest.php',
        type: 'POST',
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        data: formData,
        success (data) {

            if (data.status) {
                console.log(data.message);
            } 

        }
    });

});