$(document).ready(function() {
  $('#example').DataTable( {
    "ajax": "TextFiles/promosala.txt",
    "columns": [
      { "data": "ubicacion" }
    ],
    "columnDefs": [ {
			"className": "dt-center", 
			"targets": "_all"
		}]
  } );
} );

$(document).ready(function() {
  $('#example2').DataTable({
    "ajax": "TextFiles/promosala_libros.txt",
    "columns": [
      { "data": "titulo" },
      { "data": "radio" }
    ], 
    "columnDefs": [{ 
      "className": "dt-center",
      "targets": "_all"
    }]
  });
});