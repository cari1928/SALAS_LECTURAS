$(document).ready(function() {
	var table = $('#example').DataTable( {
    "ajax": "TextFiles/libros.txt"
  } );
} );