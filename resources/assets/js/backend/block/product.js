window.BlockProduct = function () {
  var initCkediter = function () {
    if(typeof ClassicEditor !== 'undefined' && $('.ckediter').length > 0){

    }
  }
  return {
    init: function () {
      initCkediter();
    }
  };
}();
$(document).ready(function(){
  BlockProduct.init();
});