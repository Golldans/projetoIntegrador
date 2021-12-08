
$('#to-post').submit(function(e){
    e.preventDefault();
    console.log('oi');

    // let u_text = $('#text').val();
    // let u_titulo = $('#titulo').val();
    // let u_link = $('#link').val();


    // if(u_text != '' && u_titulo != '' && u_link != ''){
    //     $.ajax({
    //         url: 'http://localhost/projetoIntegrador/src/controllers/post.php',
    //         method: 'POST',
    //         data: {text: u_text, title: u_titulo, link: u_link},
    //         dataType: 'json'
    //     }).done(function(result){
    //         console.log(result);
    //         $('#text').val('');
    //         printComments();
    //     })
    // } else{
    //     alert('Tenha certeza que tudo foi preenchido');
    // }


})

function printComments() {
    $.ajax({
        url: 'http://localhost/projetoIntegrador/src/controllers/print_post.php',
        method: 'POST',
        data: {},
        dataType: 'json'
    }).done(function(result){
        $('#posts').empty();
        for( let i = 0; i < result.length; i++){
            $('#posts').prepend(
            "<div class='post'>"+
            "<div class='title'>" + result[i].titulo + "</div>"+
            "<div class='id'> #" + result[i].post_id + "</div>"+
            "<div class='texto'>" + result[i].texto + "</div><br>"+
            "<a href='https://" + result[i].link +"'>Saiba mais</a>"+
            "<div class='curtidas'>" + result[i].curtidas + "</div>"+
            "<button class='like'>Curtir</button>"+
            "</div>");
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
                console.log(liked);
                let like = $(self).parent().children('.curtidas').html();
                if( liked == 0){
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
