
function mostrarHoraEntrada(){
    let fecha = new Date()
    let hora = fecha.toISOString().substring(11,16)
    //alert(hora)
    document.getElementById("hora_entrada").value = hora
}

function mostrarHoraSalida(){
    let fecha = new Date()
    let hora = fecha.toISOString().substring(11,16)
    document.getElementById("hora_salida").value = hora
    
}