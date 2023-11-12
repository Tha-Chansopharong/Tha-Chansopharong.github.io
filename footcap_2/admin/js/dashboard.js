$(document).ready(function(){
    let loginSession = localStorage.getItem('login');
    let objLogin = JSON.parse(loginSession);
    $('.js_class').html(objLogin.username);

    $('#btnLogout').click(function(){
        localStorage.removeItem('login');
        location.href='login.html';
    });

    $('#btnProduct').click(function(){
        $.ajax({
            url: 'https://dummyjson.com/products',
            type: 'GET',
            contentType: 'application/json',
            dataType: 'json',
            success: function(data){
                var table = '<table>';
                table += '<tr><th>Thumnail</th><th>Title</th></tr>';
                for(item of data.products){
                    table += '<tr><td><img width="100px" src="' + item.thumbnail + '"></td><td>'  + item.title + ' </td></tr>';
                }
                table += '</table>';
                $('#renderContent').html(table);
            }
       });

    });
});