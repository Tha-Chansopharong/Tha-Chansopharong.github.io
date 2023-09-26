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
                table += '<tr><th>Thumnail</th><th>Title</th><th>Price</th><th>Brand</th><th>Description</th><th>Rating</th></tr>';
                for(item of data.products){
                    table += '<tr><td><img width="100px" src="' + item.thumbnail + '"></td><td>'  + item.title + ' </td><td>'+ item.price + '</td><td>' + item.brand +'</td><td>'+ item.description +'</td><td>'+ item.rating +'</td></tr>';
                }
                table += '</table>';
                $('#renderContent').html(table);
            }
       });

    });
    $('#btnUser').click(function(){
        $.ajax({
            url: 'https://dummyjson.com/users',
            type: 'GET',
            contentType: 'application/json',
            dataType: 'json',
            success: function(data){
                var table1 = '<table>';
                table1 += '<tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>Gender</th><th>Age</th><th>Date OF Birt</th><th>Email</th><th>Address</th></tr>';
                for(item of data.users){
                    table1 += '<tr><td>'+ item.id +'</td><td>'+ item.firstName +'</td><td>' + item.lastName +'</td><td>' + item.gender +'</td><td>' + item.age +'</td><td>' + item.birthDate +'</td><td>'+ item.email +'</td><td>' + item.address.address +'</td></tr>'
                }
                table1 += '</table>';
                $('#renderContent').html(table1);

            }
        })
    });
});