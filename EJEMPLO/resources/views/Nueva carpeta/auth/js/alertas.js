
//var nombres ="peluche \"para las comias \" "  >>>> agregar una variable con commillas
//alert(nombre); >>>>muestra un mesaje de alerta
//prompt('ingresa un valor ','nombre');>>>>> capturamos un dato al usuario
//console.log(nombre); permite ver el nombre en el comando del navegador
//document.write(nombre + "" + otro dato); permite ver el nombre en la pagina 
//var primer_arreglo = ["datos1",true]; agregar un arreglo
// primer_arreglo.join(" : "); agrega dos puntos de divicion entre datos del arreglo
// primer_arreglo.sort(); ordena alfabeticamente
// primer_arreglo.reverse(); ordena alreves 
// primer_arreglo.length; cuenta cuantos datos hay en el arreglo
// primer_arreglo.push("dato1","dato2","dato3"); añade mas datos al final del arreglo
// primer_arreglo.pop(); elimina el ultimo dato
// var unir_arreglos = primer_arreglo.concat(segundo arreglo); une dos arreglos
// document.write(primer_arreglo[0]); muesta los datos segun el arreglo
//function xd(paramerto resivido) 
//{
// alert("que pex" + prametro resivido);
// return valor;
// fuera de el lo podemos imprimero;
//}  agregar a una funcion y para llamarla es xd(parametro a mandar);

var suma= function(dato1,dato2)
{ 
    var dato1= parseFloat(document.getElementById("valor1").value);
     var dato2= parseFloat(document.getElementById("valor2").value);
    
var resp= dato1 + dato2;
return resp;
}
