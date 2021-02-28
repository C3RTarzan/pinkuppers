
var time = 1000; // 1s

setInterval(function(){ 
    let ajax = new XMLHttpRequest();
    ajax.open('POST', 'action.php');
    ajax.onreadystatechange = () => {
        // console.log(ajax.readyState) //estado 4 indica requisição finalizada
        if (ajax.readyState === 4 && ajax.status == 200) {
            document.getElementById('pai').innerHTML = ajax.responseText /* ajax.responseText -> nele está contido o html requisitado */
            //document.getElementById('loading').remove()
        }

        if (ajax.readyState === 4 && ajax.status == 404) {
            document.getElementById('pai').innerHTML = 'Tente novamente mais tarde'
            //document.getElementById('loading').remove()
        }
        
    }
    ajax.send();
}, time);
