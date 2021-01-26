function redireHome(){
    window.location.href = "../../Home/index.php";
}
function redireVPS(){
    window.location.href = "../../VPS/index.php";
}
function redireWEB(){
    window.location.href = "../../WEB/index.php";
}
function redireLOG(){
    window.location.href = "../../LOG/index.php";
}
function redireBTC(){
    window.location.href = "../../BTC/index.php";
}
function redireBotNet(){
    window.location.href = "../../BotNet/index.php";
}
function redireMission(){
    window.location.href = "../../Mission/index.php";
}
function redireClan(){
    window.location.href = "../../Clan/index.php";
}
function redireUpDown(){
    window.location.href = "../../UpDown/index.php";
}
function redireHardWare(){
    window.location.href = "../../HardWare/index.php";
}
function redireDark(){
    window.location.href = "../../Dark/index.php";
}

function redireOptions(){
    window.location.href = "../../Options/index.php";
}
function redireExit(){
    window.location.href = "../../logout.php";
}
function redireAcc(){
    window.location.href = "../../Acont/index.php";
}
function busca(){
    window.location.href = "web.php";
}

function menu(){
    let mn = document.getElementById("options");
    let mnv = getComputedStyle(mn, null).getPropertyValue("display");;
    if(mnv == 'none'){
        document.getElementById("option").style.background = 'rgb(131, 131, 131)';
        document.getElementById("options").style.display = "block";
    }
    if(mnv == 'block'){
        document.getElementById("option").style.background = ' rgba(255, 255, 255, 0.5)';
        document.getElementById("options").style.display = "none";
    }
    
}