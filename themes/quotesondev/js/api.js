(function($){
  
  $('#new-quote-button').on('click', function ( event ) {
    event.preventDefault();

    $( '.source' ).empty();

    $.ajax( {
      method: 'GET',
      url: api_vars.root_url + '/wp/v2/posts/?filter[orderby]=rand&filter[posts_per_page]=1',

    }).done(function(data) {

      var pulledPost = data.shift();
      var content = pulledPost.content.rendered;
      var title = pulledPost.title.rendered;
      var quoteSource = pulledPost._qod_quote_source;
      var quoteSourceURL = pulledPost._qod_quote_source_url;
      
      $('#entry-content').html( content );
      $('#entry-title').html( title );

      if (pulledPost._qod_quote_source_url){
      $('.source').html( '<a href="' + quoteSourceURL + '">' + quoteSource + '</a>' );
      }
  });

});

$('#submit-a-quote').on('click', function ( event ) {
  event.preventDefault();

  var quoteAuthor = $('#quote-author').val();
  var quoteContent = $('#quote-content').val();
  var quoteSource =$('#quote-source').val();
  var quoteURL = $('#quote-source-url').val();

  $.ajax({
    method: 'POST',
    url: api_vars.root_url + 'wp/v2/posts/',
    data: {
      title                 : quoteAuthor,
      content               : quoteContent,
      _qod_quote_source     : quoteSource,
      _qod_quote_source_url : quoteURL,
      status                : 'publish'
    },
    beforeSend: function(xhr) {
      xhr.setRequestHeader( 'X-WP-Nonce', api_vars.nonce );
    }

  }).done( function() {

  }).always( function() {
    $('#quote-submission-form').trigger('reset');
  });

});

})(jQuery);