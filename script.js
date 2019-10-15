function check(form){
	for (i = 0; i < form.length; i++)
	{
		var pole = form.elements[i];
		if ((pole.type == "text" || pole.type == "textarea") && pole.value == "")
		{
			alert("Nick musi mieć od 3 do 20 znaków, tekst więcej niż 20 znaków!");
			return false;
		}
	}
	return true;
}

function load(form) {
	var pole = form.elements[2];
	
	if (pole[0].value == "" && pole[1].value == "")
	{
		alert("Co najmniej jedno pole musi być wypełnione!");
		return false;
	}
	
	return true;
}