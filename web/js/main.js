$(document).ready(function() {
    let leng = window.location.href.split("/").length
    let act = window.location.href.split("/")[leng-1].split(".")[0]

    let nodeParent = document.getElementById(`${act}`).parentNode.id


    document.getElementById(`${nodeParent}`).className = "collapse show"
    document.querySelector(`.${nodeParent}`).className = "collapse show"


    document.getElementById(`${act}`).className = "m-submenu m-active"
    document.querySelector(`.${act}`).className = `m-submenu ${act} m-active`



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
     $('#example1').DataTable({
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
