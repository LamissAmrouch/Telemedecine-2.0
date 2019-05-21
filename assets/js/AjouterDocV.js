function validation(){
    var nom = 'll';
    nom = document.docform.nom.value;
    console.log(nom);
    if(nom == ''){
        alert("vuillez vrifier que tous les champs sont remplit");
        return false;
    }
    return true;
}
