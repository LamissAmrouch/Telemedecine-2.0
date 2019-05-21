function AgendaFilter() {
    console.log("hahahaha");
    var sp = 0;
    var grd = 0;
    var hpt = 0;
    console.log("lololol");
    sp = document.getElementById("Spe").value;
    grd = document.getElementById("Grd").value;
    hpt = document.getElementById("Hpt").value;
    console.log("sp = "+sp+"  grd = "+grd);
    table = document.getElementById("TableCore");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        for(j=0; j<7 ; j++){
            console.log(tr);
            td = tr[i].getElementsByTagName("td")[j];
            div = td.getElementsByClassName('event')[0];
            info = div.getElementsByClassName('info')[0];
            if(info){
                spv = info.getElementsByClassName('Sp')[0];
                grdv = info.getElementsByClassName('grd')[0];
                hptv = info.getElementsByClassName('hpt')[0];
            }else{
                spv = 0; grdv =0 ; hptv = 0;
            }



            if (spv && grdv) {
                if (FilterReponse(hptv.innerHTML,hpt,true) && FilterReponse(spv.innerHTML,sp,true) && FilterReponse(grdv.innerHTML,grd,true) ) {
                    div.style.display = "";
                } else {
                    div.style.display = "none";
                }
            }
        }
    }

}
function FilterReponse(str,filtre,mode){
    if(mode){
        if(filtre == ' '){
            return 1;
        }else{
            if(filtre == str){
                return 1;
            }else{
                return 0;
            }
        }
    }else{
        if(filtre == ''){
            return 1;
        }else{
            if(str.indexOf(filtre) > -1){
                return 1;
            }else{
                return 0;
            }
        }
    }
}