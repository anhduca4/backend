window.BlockScopes = function () {
  var menuEditor = $('#menu-editor');
  var editButton = $('#editButton');
  var editInputName = $('#editInputName');
  var editInputSlug = $('#editInputSlug');
  var currentEditName = $('#currentEditName');
  var nestableList = $("#nestable > .dd-list");
  var newIdCount = 1;

  var updateOutput = function (e){
    var list = e.length ? e : $(e.target),
      output = $(list.data('output'));
    if (window.JSON) {
      if (output) {
        output.val(window.JSON.stringify(list.nestable('serialize')));
      }
    } else {
      console.error('JSON browser support required for this page.');
    }
  }

  var deleteFromMenuHelper = function (target) {
    target.remove();
  };

  var deleteFromMenu = function () {
    var targetId = $(this).data('owner-id');
    var target = $('[data-id="' + targetId + '"]');
    $.confirm({
      title: 'Confirm!',
      theme: 'supervan',
      content: 'Delete ' + target.data('name') + ' and all its subitems ?',
      buttons: {
        confirm: {
          text: 'Yes',
          action: function () {
            target.find('li').each(function () {
              deleteFromMenuHelper($(this));
            });
          
            // Remove parent
            deleteFromMenuHelper(target);
          
            // update JSON
            updateOutput($('#nestable'));
          }
        },
        Cancel: function () {
        }
      }
    });
  
    // Remove children (if any)
    
  };


  // Prepares and shows the Edit Form
  var prepareEdit = function () {
    var targetId = $(this).data('owner-id');
    var target = $('[data-id="' + targetId + '"]');

    editInputName.val(target.data('name'));
    currentEditName.html(target.data('name'));
    editButton.data('owner-id', target.data('id'));

    console.log("[INFO] Editing Menu Item " + editButton.data("owner-id"));

    menuEditor.fadeIn();
  };

  var editMenuItem = function () {
    var targetId = $(this).data('owner-id');
    var target = $('[data-id="' + targetId + '"]');
  
    var newName = editInputName.val();
  
    target.data('name', newName);
  
    target.find('> .dd-handle').html(newName);
  
    menuEditor.fadeOut();
  
    // update JSON
    updateOutput($('#nestable'));
  };

  var addToMenu = function () {
    var newName = $('#addInputName').val();
    var newId = 'new-' + newIdCount;
  
    nestableList.append(
      '<li class="dd-item" ' +
      'data-id="' + newId + '" ' +
      'data-name="' + newName + '" ' +
      'data-new="1" ' +
      'data-deleted="0">' +
      '<div class="dd-handle">' + newName + '</div> ' +
      '<span class="button-delete btn btn-default btn-xs pull-right" ' +
      'data-owner-id="' + newId + '"> ' +
      '<i class="fa fa-times-circle-o" aria-hidden="true"></i> ' +
      '</span>' +
      '<span class="button-edit btn btn-default btn-xs pull-right" ' +
      'data-owner-id="' + newId + '">' +
      '<i class="fa fa-pencil" aria-hidden="true"></i>' +
      '</span>' +
      '</li>'
    );
  
    newIdCount++;
  
    // update JSON
    updateOutput($('#nestable'));
    $('#addInputName').val('');
    // set events
    $('#nestable .button-delete').unbind('click');
    $('#nestable .button-edit').unbind('click');
    $('#nestable .button-delete').on('click', deleteFromMenu);
    $('#nestable .button-edit').on('click', prepareEdit);
  };

  var initSestable = function () {
    $('#nestable').nestable({
      maxDepth: 3
    }).on('change', updateOutput);
    $('#nestable').trigger('change');
    editButton.on("click", editMenuItem);
    $("#nestable .button-delete").on('click', deleteFromMenu);

    $("#nestable .button-edit").on('click', prepareEdit);

    $("#menu-editor").submit(function (e) {
      e.preventDefault();
    });

    $("#menu-add").submit(function (e) {
      e.preventDefault();
      addToMenu();
    });
    $('#editButtonCancel').on('click', function(){
      $('#menu-editor').fadeOut();
    });
  }

  var handleUpdateScopes = function () {
    $('#update_scopes').on('click', function(){
      let htmlButton = $(this).html();
      let button = $(this);
      $(this).html('<i class="fa fa-circle-o-notch fa-spin"></i>Loading').prop('disabled', true);
      axios.post($(this).data('url'), {
        content: $('#content').val()
      }).then(function (response) {
        $(button).html(htmlButton).prop('disabled', false);
        $('#message').html(''+
        '<div class="alert alert-success" role="alert">'+
          '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
              '<span aria-hidden="true">×</span>'+
          '</button>'+response.data.message+
        '</div>'+
        '');
      }).catch(function (err) {
        $(button).html(htmlButton).prop('disabled', false);
        $('#message').html(''+
        '<div class="alert alert-danger" role="alert">'+
          '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
              '<span aria-hidden="true">×</span>'+
          '</button>'+err.response.data.message+
        '</div>'+
        '');
      });
    });
  }
  return {
    init: function () {
      initSestable();
      handleUpdateScopes();
    }
  };
}();
$(document).ready(function(){
  BlockScopes.init();
});