window.BlockIntroduce = function () {
  var initCkediter = function () {
    if(typeof ClassicEditor !== 'undefined'){
      ClassicEditor.create(document.querySelector('#introduce_content'), {
          toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        }).then( editor => {
          const toolbarContainer = document.querySelector( '#toolbar-container' );
          toolbarContainer.appendChild( editor.ui.view.toolbar.element );
        }).catch( error => {
            console.error( error );
        });

    }
  }

  return {
    init: function () {
      initCkediter();
    }
  };
}();
$(document).ready(function(){
  BlockIntroduce.init();
});