jQuery(document).ready(() => {
  
  const anotherOne = () => {
    setTimeout(function() {
      jQuery('.preload').hide();
    }, 3000);
    jQuery('.preload').show();
  }

jQuery('#get-quotes').on('click', function(event) {
  event.preventDefault();
  
  // jQuery('article').text('');
  anotherOne();  

  jQuery.ajax({
    method: 'GET',
    url: red_vars.rest_url + 'wp/v2/posts/',
    data: {
      comment_status: 'closed'
    },
    beforeSend: function(xhr) {
      xhr.setRequestHeader('X-WP-Nonce', red_vars.wpapi_nonce);
    }
  }).done(function(response) {
    console.log(response);
      for(let i = 0; i < 1; i++) {
     jQuery('article').append(
        `
        <p>${response[i].content.rendered}</p>
        <h3> - ${response[i].title.rendered}, 
        <a href="${response[i]._qod_quote_source_url}">${response[i]._qod_quote_source}</a></h3>
       `);
        }
      });
  });
});
