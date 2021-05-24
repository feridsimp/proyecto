// JavaScript Document
function cont(){
	var descu=0,price=0,finalt=0;
	
	if(form1.cbocomedores.selectedIndex == 1){
		price=3000; 
		descu=8;	
	}
	 else if(form1.cbocomedores.selectedIndex == 2){
		price=4000; 
		descu=8;	
	 }
	else if(form1.cbocomedores.selectedIndex == 3){
		price=5000; 
		descu=8;	
	}
	 else if(form1.cbocomedores.selectedIndex == 4){
		price=6000; 
		descu=8;	
	 }
	finalt=descu/100*price-price; 
	 
	document.form1.tResu.value="Articulo seleccionado : "+document.form1.cbocomedores.options[document.form1.cbocomedores.selectedIndex].text+"\nEl precio es : $"+price+"\nLa forma de pago es : "+"De contado"+"\nEl descuento por la forma de pago es de :"+descu+"%"+"\nEl total es : $"+finalt;  
}
//12 meses para comedor 
function docem(){
	var descu=0,price=0,finalt=0,mensu=0;
	
	if(form1.cbocomedores.selectedIndex == 1){
		price=3000; 
		descu=6;	
	}
	 else if(form1.cbocomedores.selectedIndex == 2){
		price=4000; 
		descu=6;	
	 }
	else if(form1.cbocomedores.selectedIndex == 3){
		price=5000; 
		descu=6;	
	}
	 else if(form1.cbocomedores.selectedIndex == 4){
		price=6000; 
		descu=6;	
	 }
	finalt=descu/100*price+price; 
	mensu=finalt/12; 
	 
	document.form1.tResu.value="Articulo seleccionado : "+document.form1.cbocomedores.options[document.form1.cbocomedores.selectedIndex].text+"\nEl precio es : $"+price+"\nLa forma de pago es : "+"A 12 meses"+"\nEl aumento por la forma de pago es de :"+descu+"%"+"\nLa Mensualidad es : "+mensu+"\nEl total es : $"+finalt;  
}
//18 meses para comedor 
function mocho(){
	var descu=0,price=0,finalt=0,mensu=0;
	
	if(form1.cbocomedores.selectedIndex == 1){
		price=3000; 
		descu=9;	
	}
	 else if(form1.cbocomedores.selectedIndex == 2){
		price=4000; 
		descu=9;	
	 }
	else if(form1.cbocomedores.selectedIndex == 3){
		price=5000; 
		descu=9;	
	}
	 else if(form1.cbocomedores.selectedIndex == 4){
		price=6000; 
		descu=9;	
	 }
	finalt=descu/100*price+price; 
	mensu=finalt/18; 
	 
	document.form1.tResu.value="Articulo seleccionado : "+document.form1.cbocomedores.options[document.form1.cbocomedores.selectedIndex].text+"\nEl precio es : $"+price+"\nLa forma de pago es : "+"A 18 meses"+"\nEl aumento por la forma de pago es de :"+descu+"%"+"\nLa Mensualidad es : "+mensu+"\nEl total es : $"+finalt;  
	
}

