<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Page Description">
        <meta name="author" content="USUARIO">
        <title>Usuarios</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.dataTables.min.css" rel="stylesheet">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <h1>Usuarios</h1>

            <table id='example' class="table table-condensed table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Accion</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Accion</th>
                </tr>
                </tfoot>
            </table>
        </div>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js"></script>

        <script>
            $(document).ready(function() {


                var table = $('#example').DataTable( {

                    "processing": true,
                    "serverSide": true,
                    "ajax": "/api/user",
                    columns: [
                        {data: 'id'},
                        {data: 'name'},
                        {data: 'email'},
                        {data: null}
                    ],
                    "columnDefs": [{
                        "orderable": false,
                        "searchable": false,
                        "defaultContent": "" +
                            "<button class='btn btn-info btn-xs btn-edit'>Editar</button> "+
                            "<button class='btn btn-danger btn-xs btn-delet'>Eliminar</button>",
                        "targets": -1
                    }],

                    responsive: true

                } );

                $('#example tbody').on( 'click', '.btn-edit', function () {
                    var data = table.row( $(this).parents('tr') ).data();
                    var vista= window.location.href+"almacen/categoria/"+data.id+"/edit";
                    console.log(vista);
                    window.location.href=vista;

                } );


            } );
        </script>
    </body>
</html>