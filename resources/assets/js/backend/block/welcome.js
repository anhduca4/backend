window.BlockWelcome = function () {

  var handleDeleteBlock = function() {
    $('.remove-row').unbind( "click" );
    $('.remove-row').on('click', function(){
      let id = $(this).data('id');
      $.confirm({
        title: 'Confirm!',
        theme: 'supervan',
        content: 'Are you sure?',
        buttons: {
          confirm: {
            text: 'Yes',
            action: function () {
              $('#block_welcome_'+id).remove();
            }
          },
          Cancel: function () {
          }
        }
      });
    });
  }
  
  var handleAddNewBlock = function () {
    $('#add_new_row').on('click', function(){
      let dataWelcomeIndex = [0];
      $('.block-welcome').each(function(){
        let id = parseInt($(this).data('id'));
        if(!isNaN(id)){
          dataWelcomeIndex.push(id);
        }
      });
      let idNext = Math.max(...dataWelcomeIndex) + 1;
      let templateHtml = $('#block_welcome_new').html();
      templateHtml = templateHtml.replace(/id_replace_form_welcome/g, idNext).replace(/class-room/g, 'block-welcome');
      $('#insert_new_form_welcome').append(templateHtml);
      handleDeleteBlock();
      // console.log(templateHtml);
    });
  }
  return {
    init: function () {
      handleDeleteBlock();
      handleAddNewBlock();
    }
  };
}();
$(document).ready(function(){
  BlockWelcome.init();
});