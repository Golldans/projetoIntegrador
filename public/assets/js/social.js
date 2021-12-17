
$('#to-post').submit(function(e){
    e.preventDefault();

    let u_text = $('#text').val();
    let u_titulo = $('#title').val();
    let u_link = $('#link').val();

    if(u_text != '' && u_titulo != '' && u_link != ''){
        $.ajax({
            url: 'http://localhost/projetoIntegrador/src/controllers/post.php',
            method: 'POST',
            data: {text: u_text, title: u_titulo, link: u_link},
            dataType: 'json'
        }).done(function(result){
            $('#text').val('');
            $('#title').val('');
            printComments();
        })
    } else{
        alert('Tenha certeza que tudo foi preenchido');
    }


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
            "<div class='id'> #" + result[i].post_id + " - " + result[i].username + " $" + result[i].user_id + "</div>"+
            "<div class='texto'>" + result[i].texto + "</div><br>"+
            "<a href='https://" + result[i].link +"'>Saiba mais</a>"+
            "<div class='curtidas'>" + result[i].curtidas + "</div>"+
                "<div class='action'>"+
                "<button class='like'>Curtir</button>"+
                "<button class='share'>Compartilhar</button>"+
                "</div>"+
            "</div>");
        };

        $('.like').click(function (){
            let id = $(this).parent().parent().children('.id').html();
            id = id.substring(
                id.indexOf("#") + 1, 
                id.lastIndexOf(" -")
            );            

            const self = this;

            $.ajax({
                url: 'http://localhost/projetoIntegrador/src/controllers/like.php',
                method: 'POST',
                data: {id: id},
                dataType: 'json'
            }).done(function(liked){
                console.log(liked);
                let like = $(self).parent().parent().children('.curtidas').html();
                if( liked == 0){
                    $(self).parent().parent().children('.curtidas').html(parseInt(like) + 1);
                    $(self).addClass('curtido');
                } else{
                    $(self).parent().parent().children('.curtidas').html(parseInt(like) - 1);
                    $(self).removeClass('curtido');
                }
            })


            
            ;
        });

        $('.share').click(function (){
            let link = $(this).parent().parent().children('a').attr("href");
            navigator.clipboard.writeText(link);
            $(this).html("Link copiado!");
            $(this).addClass('copy');
            const self = this;
            setInterval(function(){
                $(self).html("Compartilhar");
                $(self).removeClass('copy');
            }, 900)

        })

    })
}



printComments();
