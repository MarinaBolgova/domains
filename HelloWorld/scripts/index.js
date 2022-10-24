
let books =  {
    1:{
        name: "Исчезнувшие",
        author: "Гелион Флин",
        genre: "1",
        description: "Таким образом консультация с широким активом представляет " +
            "собой интересный эксперимент проверки форм развития. С другой стороны сложившаяся структура" +
            " организации представляет собой интересный эксперимент проверки новых предложений. " +
            "Разнообразный и богатый опыт начало повседневной работы по формированию " +
            "позиции позволяет выполнять важные задания по разработке модели развития"
    },
    2:{
        name: "Приключения Незнайки и его друзей",
        author: "Николай Носов",
        genre:"2",
        description: "Незнайка - озорной проказник из сказочного Цветочного города, где " +
            "улицы носят названия цветов, а все жители - коротышки. У каждого коротышки есть" +
            " своё любимое занятие, и только Незнайка целыми днями шатается по улицам, попадая" +
            " в нелепые и смешные истории. Но всё меняется, когда однажды Знайка объявляет о " +
            "своём изобретении!"
    },
    3:{
        name: "Вероника решает умереть",
        author: "Пауло Коэльо",
        genre: "3",
        description: "Вероника устала от однообразной жизни и решила покончить с собой, приняв" +
            " огромную дозу снотворного. Попытка самоубийства потерпела фиаско – девушка " +
            "очнулась в психиатрической лечебнице. Но желание уйти из этого мира так и не " +
            "оставило ее, поэтому она пыталась добыть заветные таблетки и одновременно " +
            "знакомилась с обитателями клиники. Что же дальше? Девушка нашла новых друзей, " +
            "влюбилась и поняла, что мир не так уж и плох. Только в тот самый момент, когда " +
            "жизнь понемногу стала налаживаться, доктор сообщил Веронике, что из-за принятых " +
            "ею лекарств ее сердце непоправимо пострадало и поэтому она умрет через неделю…"
    },
}
let genres = {
    1:'Триллер',
    2:'Детская Литература',
    3:'Зарубежная литература',
    4:'Комедия',
}

///////////////////////////////////////////////////////////////////////////////////////////////////
updateGenresName(genres);
updateBooksName(books)


$('#books_select').change(function() {
    $id = $('#books_select').val();
    console.log($id);
    if ($id == 0) {
        setFormValue($id,"");
    } else{
        setFormValue($id,books[$id])
    }
});



$('.add_book_button').click(function (){

    let selected_id=$('#books_select').val();

    if(selected_id==0){
        let name_input=$('.name_book').val();
        let author_input=$('.author').val();
        let description_input=$('.description').val();
        let genre_input=$('#genre_select').val();

        books[Object.keys(books).length+1]={
            name:name_input,
            author:author_input,
            description:description_input,
            genre:genre_input,
        };

        updateBooksName(books);
        setFormValue('','','','',selected_id);

    }

});



function setFormValue(id_book,book_obj) {
    let genre_value
    if(book_obj.length==0){
        genre_value=0;
    }else {
        genre_value=book_obj['genre'];
    }

    $('#genre_select option[value='+genre_value+']').prop('selected',true);
    $('#name_book').val(book_obj['name']);
    $('.author').val(book_obj['author']);
    $('.description').val(book_obj['description']);
    if(id_book==0){
        $('.add_book_button').prop('disabled', false);
    }else{
        $('.add_book_button').prop('disabled',true);
    }


}
function updateBooksName(books_object) {
    $('#books_select').empty();  //обнуление
    $('#books_select').append('<option value="0">Добавить книгу</option>');

    $.each(books_object, function(key, value) {
        $('#books_select').append('<option value="' + key + '">' + value['name'] + '</option>');
    });

}
function updateGenresName(genres_object) {
    $('#genre_select').empty();  //обнуление
    $('#genre_select').append('<option value="0">Выберите жанр</option>');
    $.each(genres_object, function(key, value) {
        $('#genre_select').append('<option value="' + key + '">' + value['name'] + '</option>');
    });

}


