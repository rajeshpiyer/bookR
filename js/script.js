function dissolveLogin(){
    document.getElementById('dissolve-one').style.display = 'block';
    document.getElementById('dissolve-two').style.display = 'None';
    document.getElementById('loginbtn').style.backgroundColor = 'red';
    document.getElementById('signupbtn').style.backgroundColor = '#FF8A65';
}

function dissolveSignup(){
    document.getElementById('dissolve-one').style.display = 'None';
    document.getElementById('dissolve-two').style.display = 'block';
    document.getElementById('loginbtn').style.backgroundColor = '#FF8A65';
    document.getElementById('signupbtn').style.backgroundColor = 'red';
}

function addService(){
    document.getElementById('hide').style.display = 'block';
}