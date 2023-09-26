function login() {
   let username = $('#txtUsername').val();
   let password = $('#txtPassword').val(); 
   $.ajax({
        url: 'https://dummyjson.com/auth/login',
        type: 'POST',
        contentType: 'application/json',
        dataType: 'json',
        success: function(data){
            window.location.href = 'dashboard.html';
            localStorage.setItem('login', JSON.stringify(data));
        },
        data: JSON.stringify({
            username: username,
            password: password
        })
   });
}



$(document).ready(function(){
    $('#btnLogin').click(function(){
        login();
    });
});