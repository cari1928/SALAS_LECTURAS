$(document).on('ready', function() {
  $("#portada").fileinput({
    initialPreview: ['../Images/portadas/no_disponible.jpg'],
    initialPreviewAsData: true,
    initialPreviewConfig: [ 
      {caption: "no_disponible.jpg", size: 930321, width: "120px", key: 1, showDelete: false}
    ],
    overwriteInitial: true,
    maxFileSize: 1500,
    showClose: false,
    showCaption: false,
    browseLabel: '',
    removeLabel: '',
    browseIcon: '<i class="glyphicon glyphicon-folder-open"></i>',
    removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
    removeTitle: 'Cancel or reset changes',
    elErrorContainer: '#kv-avatar-errors-1',
    msgErrorClass: 'alert alert-block alert-danger',
    defaultPreviewContent:'<img src="../Images/portadas/no_disponible.jpg" alt="Your Avatar" style="width:400px">',
    layoutTemplates: {main2: '{preview} {remove} {browse}'},
    allowedFileExtensions: ["jpg", "png", "gif"]
  });
});