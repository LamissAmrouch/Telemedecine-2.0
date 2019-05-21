function ajouterContrat(){
    console.log('lalalala'+1)

    if(j===0){
        var div = document.getElementById("contrat");
        var tableCode = '                <div class="space"></div>\n' +
            '                <h4 class="header blue bolder smaller">Autre engagement....</h4><table id="contrat-table" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="dynamic-table_info">\n' +
                  '<tr role="row">' +
                    ' <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">hopital' +
            '                    </th>'+
            ' <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">service' +
            '                    </th>'+
            ' <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">type' +
            '                    </th>' +
            ' <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">dateDebut' +
            '                    </th>'+
            ' <th class="sorting" tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1" aria-label="Domain: activate to sort column ascending">DateFin' +
            '                    </th>'
         div.innerHTML = tableCode

    }
    j++;
    var numC = document.getElementById("j");
    numC.value = j;
    var table = document.getElementById("contrat-table");
    var row = table.insertRow(j);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    getHopitals(cell1)
    cell2.innerHTML = getSelect('Srv'+j,[]);
    cell3.innerHTML = getSelect('Type'+j,["assistance","aide"]);
    cell4.innerHTML = '<input name="dateD'+j+'" class="col-xs-12 col-sm-12"  type="date">';
    cell5.innerHTML = '<input name="dateF'+j+'" class="col-xs-12 col-sm-12"  type="date">';
}
function getHopitals(elem){
    var result = ''
    var httpreq = new XMLHttpRequest();
    httpreq.onreadystatechange = function() {
        if (httpreq.readyState === 4) {

            elem.innerHTML =  httpreq.responseText
        }
    }
    httpreq.open('GET','http://localhost/telemedecine/Hopitale/1'+j,true);
    httpreq.send();

}
function getSelect(name,options){
    code = ' <select id="'+name+'" class="col-xs-12 col-sm-12" name="'+name+'">'
    for(i=1 ; i<=options.length;i++){
        code+= '<option>'
        code+= options[i-1]
        code+= '</option>'
    }
    code+='</select>'
    return code;
}


if(document.getElementById("j").value == "0" || document.getElementById("j").value == "" ){
    var j = 0;
}else{
    var j = document.getElementById("j").value;
}