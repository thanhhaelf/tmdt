var key_word = $('input#key');

key_word.keyup(function () {
    var key = key_word.val();
    if (key !== '') {
        console.log(key);
        $.ajax({
            type: 'GET',
            url:  'http://localhost:81/tmdt/test',
            data:{
                'term':key
            },
            error: function () {
            },
            success: function (data) {
                console.log(data);
                key_word.autocomplete({
                    source:data
                });
            }
        });
    }
});