$("#teste").click(function () { 
    $('#teste').html('Fui clicado')
});

$('#to-post').submit(function(e){
    e.preventDefault();

    let u_text = $('#text').val();

    $.ajax({
        url: 'http://localhost/projetoIntegrador/src/controllers/post.php',
        method: 'POST',
        data: {text: u_text},
        dataType: 'json'
    }).done(function(result){
        $('#text').val('');
        printComments();
    })

})

function printComments() {
    $.ajax({
        url: 'http://localhost/projetoIntegrador/src/controllers/print_post.php',
        method: 'POST',
        data: {},
        dataType: 'json'
    }).done(function(result){
        console.log(result);
        for( let i = 0; i < result.length; i++){
            $('#posts').prepend("<div class='post'><div class='title'>" + result[i].titulo + "</div>" + result[i].texto + "<br><a href='https://" + result[i].link + "'>Link</a><br></div>")
        };

        
    })
}

printComments();