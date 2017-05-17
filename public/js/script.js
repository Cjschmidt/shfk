$(document).ready(function(){


    initSaveName();
    initSavePerson();


});

function initSavePerson(){
    $('#save_person').on('click', function(){
        var name = $('#name').val();
        $.ajax({
            method: "POST",
            dataType: 'json',
            url: "/division/"+$('#division_id').val()+"/savePerson",
            data: {name: name}
        }).done(function (data) {
            $('.append').append("<tr><td>"+ data.person_id +"</td><td>"+ name +"</td></tr>")

        });
    });
}
function initSaveName(){
    $('#name_btn').on('click', function(){
        $.ajax({
            method: "POST",
            dataType: 'json',
            url: "/division/"+$('#division_id').val()+"/saveName",
            data: {name: $('#name').val()}
        }).done(function (data) {
            $('.content').html(data.html);
            $('.header').html(data.header);
            initSavePerson();
        });
    });
}