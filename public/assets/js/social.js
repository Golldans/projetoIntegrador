$("#teste").click(function () { 
    $('#teste').html('Fui clicado')
});

$('.title').click(function(){
    console.log('click');
 })

$('#to-post').submit(function(e){
    e.preventDefault();

    let u_text = $('#text').val();

    $.ajax({
        url: 'http://localhost/projetoIntegrador/src/controllers/post.php',
        method: 'POST',
        data: {text: u_text},
        dataType: 'json'
    }).done(function(){
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
        for( let i = 0; i < result.length; i++){
            $('#posts').prepend("<div class='post'><div class='title'>" + result[i].titulo + "</div><div class='id'> #" + result[i].post_id + "</div><div class='texto'>" + result[i].texto + "</div><br><a href='https://" + result[i].link + 
            "'>Link</a><div class='curtidas'>" + result[i].curtidas + "</div><button class='like'>Curtir</button></div>");
        };

        $('.like').click(function (){
            let id = $(this).parent().children('.id').html();
            id = id.substring(2);

            const self = this;

            $.ajax({
                url: 'http://localhost/projetoIntegrador/src/controllers/like.php',
                method: 'POST',
                data: {id: id},
                dataType: 'json'
            }).done(function(liked){
                let like = $(self).parent().children('.curtidas').html();
                if( like == 0){
                    $(self).parent().children('.curtidas').html(parseInt(like) + 1);
                    $(self).addClass('curtido');
                } else{
                    $(self).parent().children('.curtidas').html(parseInt(like) - 1);
                    $(self).removeClass('curtido');
                }
            })


            
            ;
        });
    })
}



printComments();
