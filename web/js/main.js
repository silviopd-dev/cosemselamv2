$(document).ready(function() {
    let leng = window.location.href.split("/").length

    if(window.location.href.split("/")[leng-1] == "socio.php" || window.location.href.split("/")[leng-1] == "familiar.php" || window.location.href.split("/")[leng-1] == "beneficiario.php"){
        document.getElementById("menuregistro").className = "collapse show"

        let act = window.location.href.split("/")[leng-1].split(".")[0]
        document.getElementById(`${act}`).className = "m-submenu m-active"
    }

    //DATATABLE SOCIO
    $('#example').DataTable({
        "searching": false,
        // "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": false
    });

    
    //DATATABLE DIRECCION
    $('#example2').DataTable({
        "searching": false,
        // "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": false
    });
} ); 
