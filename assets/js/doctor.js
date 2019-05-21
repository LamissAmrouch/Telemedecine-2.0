function Pagination(){
    var pageBar = document.getElementById("pagination");
    var page = pageBar.getElementsByClassName("Active");
    console.log(page.innerHTML);
}
function Filter() {
    var sp = 0;
    var grd = 0;
    var hpt = 0;
    console.log("lololol");
     sp = document.getElementById("Spe").value;
     grd = document.getElementById("Grd").value;
     hpt = document.getElementById("Hpt").value;
     search = document.getElementById("Search").value;
    console.log("sp = "+sp+"  grd = "+grd);
    table = document.getElementById("tableCore");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        spv = tr[i].getElementsByTagName("td")[2];
        grdv = tr[i].getElementsByTagName("td")[3];
        hptv = tr[i].getElementsByTagName("td")[5];
        trl = tr[i].getElementsByTagName("td")[0];
        var name = trl.getElementsByTagName('A')[0];
        console.log('hjhjhj'+spv+grdv);
       // console.log(name.innerHTML+'   '+search);
        if (spv && grdv) {
            if (FilterReponse(hptv.innerHTML,hpt,true) && FilterReponse(spv.innerHTML,sp,true) && FilterReponse(grdv.innerHTML,grd,true) &&  FilterReponse(name.innerHTML.toUpperCase(),search.toUpperCase(),false)) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
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
