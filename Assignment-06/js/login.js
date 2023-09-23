var loginObj = {
    loginAction: function(){
        let txtUsername = document.getElementById('txtUsername').value;
        let txtPassword = document.getElementById('txtPassword').value;
        console.log(this.username)
        if('Tha Chansopharong' == txtUsername && '123' == txtPassword){
            document.getElementById('msg').remove();
            localStorage.setItem('username',txtUsername);
            window.location.href = "dashboard.html";
        } else {
            document.getElementById('msg').innerHTML = 'Incorrect username and password';
        }
        
    }
}

let btnLogin = document.getElementById('btnLogin');
btnLogin.addEventListener('click', loginObj.loginAction);