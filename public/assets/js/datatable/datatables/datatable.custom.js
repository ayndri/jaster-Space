
  $(document).ready(function() {
    $('#dtbasic').DataTable( {
      retrieve: true,
      searching: false,
        paging: false,
        responsive: true,
        "order": [[ 0, 'desc' ]]
    } );
  } );

  
  $(document).ready(function() {
    $('#dtsearch').DataTable( {
      retrieve: true,
        paging: false,
        responsive: true,
        "order": [[ 0, 'desc' ]]
    } );
  } );