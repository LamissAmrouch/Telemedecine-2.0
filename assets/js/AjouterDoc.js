function LoadServices(Hpt,Srv){
    console.log("hahahaha4545");
    console.log("hpt = "+Hpt);
    console.log("srv = "+Srv);

    hpt = document.getElementById(Hpt).value;
    srv = document.getElementById(Srv);
    console.log(hpt);
    var httpreq = new XMLHttpRequest();
    httpreq.onreadystatechange = function() {
        srv.innerHTML = 'chargement....'
        if (httpreq.readyState === 4) {

            srv.innerHTML = httpreq.responseText
        }
    }

        httpreq.open('GET','http://localhost/telemedecine/services/'+ hpt,true);
        httpreq.send();
}

