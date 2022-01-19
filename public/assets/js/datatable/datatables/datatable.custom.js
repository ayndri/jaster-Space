
  $(document).ready(function() {
    $('#dtbasic').DataTable( {
      retrieve: true,
      searching: false,
        paging: true,
        responsive: true,
        "pageLength": 15,
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