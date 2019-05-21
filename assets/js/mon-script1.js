$(document).ready(function()
{ 
	$('#form').submit(function(event)
	{   
		$(".errors").addClass('');
		$('.errors').html('');
		var nom = $('input[name=nom]').val();
		var prenom=$('input[name=prenom]').val();
		var username=$('input[name=username]').val();
		var tel=$('input[name=tel]').val();
		var email=$('input[name=email]').val();  
		var errors=false;    
		var msg='';
		if(!isUsername(username))
		{
			 //	$('.errors').html('Veuillez vérifier votre nom d\'utilisateur');
			 msg='Veuillez vérifier votre nom d\'utilisateur<br>';
			 errors=true;
			 $('input[name=username]').parent().parent().addClass("has-error");
			}
			if(!isNom(nom))
			{	
			 	//$('.errors').html('Veuillez vérifier votre nom ');
			 	msg=msg+'Veuillez vérifier votre nom<br>';
			 	errors=true;
			 	$('input[name=nom]').parent().parent().addClass("has-error");
			 }
			 if(!isNom(prenom))
			 {
			 	//$('.errors').html('Veuillez vérifier votre prénom ');
			 	msg=msg+'Veuillez vérifier votre prénom<br>';
			 	errors=true;
			 	$('input[name=prenom]').parent().parent().addClass("has-error");
			 }
			 if(!isTel(tel))
			 {
			 	//$('.errors').html('Veuillez vérifier votre numéro ');
			 	msg=msg+'Veuillez vérifier votre numéro<br>';
			 	errors=true;
			 	$('input[name=tel]').parent().parent().addClass("has-error");
			 }


			 if(errors) {
			 	$(".errors").addClass('alert alert-danger');
			 	$('.errors').html(msg);
			 	//$("#alert").style.visibility = 'hidden';
			 		//supprimer sa class pour supprimer msg de serveur
			 		$('#alert').removeClass($('#alert').attr('class'));
			 		$('#alert').html('');

			 		//$('#alert').attr('class')='';
			 	//$("#alert").html('');
			 	//alert($("#alert").c);
			 	$("html, body").animate({ scrollTop: 0 }, "slow");

			 	return false;
			 }

			 else {
			 	if( !confirm('ètes vous sure ?') ) 
			 		{ event.preventDefault(); }
			 }
			 function isUsername(s)
			 {
			 	var regex=/^[a-z]{2,}\d*$/i;
			 	return regex.test(s);
			 }
			 function isNom(s)
			 {
			 	var regex=/^[a-zàâçéèêëîïôûùüÿñæœ .-]+$/i;
			 	return regex.test(s);
			 }
			 function isTel(s)
			 {
			 	var regex=/^0[1-9]?[0-9]{8}$/;
			 	return regex.test(s);
			 }

			 
			})
	$("#deconnecte").click(function(event) {
		if( !confirm('ètes vous sure de vouloir déconnecté') ) 
			event.preventDefault();
	});

	$("#wilaya").change(function(event) {
		/* Act on the event */
		$(".commune").hide();
		$("."+$("#wilaya").val()).show();
		
	});

	$("#type_anticidant").change(function(event) {
		/* Act on the event */

		//alert("wilaya has changed ");
		$(".anticident").hide();
		$("."+$("#type_anticidant").val()).show();
		

	});
	
	$("#gridRadios2").click(function(event) {
		/* Act on the event */
		$("#atcdGyneco").show();
	

	});
	$("#gridRadios1").click(function(event) {
		/* Act on the event */
	
		$("#atcdGyneco").hide();

	});
	$("#specialite").change(function(event) {
		/* Act on the event */

		$(".expert").hide();
		$("."+$("#specialite").val()).show();
		

	});
	$("a[name=id]").click(function(event) {
		if( !confirm('ètes vous sure de vouloir supprimer') ) 
			{event.preventDefault(); }
	});
	$("#add_anticident").click(function (e) {
 //Append a new row of code to the "#items" div
  //$("#atcdChiru").append('<div class="form-inline "><input type="text" class="form-control " id="atcdChiru" name="atcdChiru[]" placeholder="ATCD chirugicaux"  ><button class="delete btn btn-danger "> <i class="fa fa-minus-circle fa-fw"></i></button></div>'); 
  $("#anticident").append('<div><label for="anticident" class="col-sm-4 control-label"></label><div class="col-sm-8" ><div class=" input-group" ><select class="chosen-select form-control" id="anticident" name="anticident[]" placeholder="Type Anticident"> <span class="input-group-btn"><button class="delete btn btn-danger "> <i class="fa fa-minus-circle fa-fw"></i></button></span></div></div></div>'); 

});
	$("#addMed").click(function (e) {
 //Append a new row of code to the "#items" div
  //$("#atcdChiru").append('<div class="form-inline "><input type="text" class="form-control " id="atcdChiru" name="atcdChiru[]" placeholder="ATCD chirugicaux"  ><button class="delete btn btn-danger "> <i class="fa fa-minus-circle fa-fw"></i></button></div>'); 
  
  $("#atcdMed").append('<div><label for="atcdMed" class="col-sm-4 control-label"></label><div class="col-sm-8" ><div class=" input-group" ><input type="text" class="form-control " id="atcdMed" name="atcdMed[]" placeholder="ATCD Médicaux"> <span class="input-group-btn"><button class="delete btn btn-danger "> <i class="fa fa-minus-circle fa-fw"></i></button></span></div></div></div>');

});
	$("#addGyneco").click(function (e) {
 //Append a new row of code to the "#items" div
  //$("#atcdChiru").append('<div class="form-inline "><input type="text" class="form-control " id="atcdChiru" name="atcdChiru[]" placeholder="ATCD chirugicaux"  ><button class="delete btn btn-danger "> <i class="fa fa-minus-circle fa-fw"></i></button></div>'); 
  $("#atcdGyneco").append('<div><label for="atcdGyneco" class="col-sm-4 control-label"></label><div class="col-sm-8" ><div class=" input-group" ><input type="text" class="form-control " id="atcdGyneco" name="atcdGyneco[]" placeholder="ATCD Gynécologiques"> <span class="input-group-btn"><button class="delete btn btn-danger "> <i class="fa fa-minus-circle fa-fw"></i></button></span></div></div></div>');

});
	$("#addFam").click(function (e) {
 //Append a new row of code to the "#items" div
  //$("#atcdChiru").append('<div class="form-inline "><input type="text" class="form-control " id="atcdChiru" name="atcdChiru[]" placeholder="ATCD chirugicaux"  ><button class="delete btn btn-danger "> <i class="fa fa-minus-circle fa-fw"></i></button></div>'); 

  $("#atcdFam").append('<div><label for="atcdFam" class="col-sm-4 control-label"></label><div class="col-sm-8" ><div class=" input-group" ><input type="text" class="form-control " id="atcdFam" name="atcdFam[]" placeholder="ATCD Familiaux"> <span class="input-group-btn"><button class="delete btn btn-danger "> <i class="fa fa-minus-circle fa-fw"></i></button></span></div></div></div>');

});
	$("#addAllergie").click(function (e) {
 //Append a new row of code to the "#items" div
  //$("#atcdChiru").append('<div class="form-inline "><input type="text" class="form-control " id="atcdChiru" name="atcdChiru[]" placeholder="ATCD chirugicaux"  ><button class="delete btn btn-danger "> <i class="fa fa-minus-circle fa-fw"></i></button></div>'); 
  $("#allergies").append('<div><label for="allergies" class="col-sm-4 control-label"></label><div class="col-sm-8" ><div class=" input-group" ><input type="text" class="form-control " id="allergies" name="allergies[]" placeholder="Allergies"> <span class="input-group-btn"><button class="delete btn btn-danger "> <i class="fa fa-minus-circle fa-fw"></i></button></span></div></div></div>');

});
	$("#addTrait").click(function (e) {
 //Append a new row of code to the "#items" div
  //$("#atcdChiru").append('<div class="form-inline "><input type="text" class="form-control " id="atcdChiru" name="atcdChiru[]" placeholder="ATCD chirugicaux"  ><button class="delete btn btn-danger "> <i class="fa fa-minus-circle fa-fw"></i></button></div>'); 
  $("#traitHab").append('<div><label for="traitHab" class="col-sm-4 control-label"></label><div class="col-sm-8" ><div class=" input-group" ><input type="text" class="form-control " id="traitHab" name="traitHab[]" placeholder="traitement Habituel"> <span class="input-group-btn"><button class="delete btn btn-danger "> <i class="fa fa-minus-circle fa-fw"></i></button></span></div></div></div>');

});
 


	
	$("body").on("click", ".delete", function (e) {
		$(this).parent().parent().parent().parent("div").remove();
	});
       
});



/*
$(document).ready(function() {
	$("#supprimer").click(function(event)){
		if(!confirm('ètes vous sur de vouloir supprimer'))
		{
			event.preventDefault();
		}
	}
	
});*/