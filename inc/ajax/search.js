jQuery(function($) {

  let searchRequest = null;

  const productsGet = (text) => {
    const data = {
      text: text,
      action: 'search',
      nonce: search.nonce
    };

    searchRequest != null ? searchRequest.abort() : '';
    
    searchRequest = $.ajax({
      url: search.url,
      data: data,
      type: 'POST',
      dataType: 'json',
      beforeSend: function(xhr) {
      	$('.search-suggestions__content').html('<strong>Загружаю...</strong>');
      },
      success: function(data) {
        if ( data.search ) { 
          $('.search-suggestions__content').html(data.search);
        } else {
          $('.search-suggestions__content').html('<strong>Продукты не найдены</strong>');
        }
      }
    });

  };

  $('.header__search-input').on('keyup search', function() {
    const thVal = $(this).val();
    ( thVal.length > 3 || thVal.length === 0 ) ? productsGet(thVal) : '';
  });

});