// JavaScript Document
function proceso(){
	var cantidad, precio, descuento, monto, montoDescuento, descuentoporpago, neto;

	cantidad=0, descuento=0, monto=0, montoDescuento=0, descuentoporpago=0, neto=0;

	cantidad = parseFloat(document.form1.tCantidad.value);

	if(form1.cboProductos.selectedIndex == 1){
		precio = 20;
		descuento = 0.2;
	}else if(form1.cboProductos.selectedIndex == 2){
		precio = 45;
		descuento = 0.15;
	}else {
		precio = 10;
		descuento = 0.05;
	}

	monto = (precio*cantidad);
	montoDescuento = (monto * descuento);

	if (form1.cboFormas.selectedIndex == 1){
		descuentoporpago = 0.07*monto;
	}else{
	  descuentoporpago = 0;
	}

	neto = monto-montoDescuento-descuentoporpago;

document.form1.tRes.value="Producto seleccionado: "+document.form1.cboProductos.options[document.form1.cboProductos.selectedIndex].text+"\nPrecio es: "+precio+"\nLa forma de pago es: "+document.form1.cboFormas.options[document.form1.cboFormas.selectedIndex].text+"\n------------------------"+"\nEl monto Bruto a pagar es: "+monto+"\nEl monto de descuento es: "+montoDescuento+ "\nEl descuento de la forma de pago es "+descuentoporpago+"\n-----------------------"+"\nNeto a pagar es "+neto;

}