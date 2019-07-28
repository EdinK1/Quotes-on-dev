jQuery(() => {

  const goBack = () => {
    window.location = window.location;
  }

  window.addEventListener('popstate', goBack);
  
  // const anotherOne = () => {
  //   setTimeout(function() {
  //     jQuery('.preload').hide();
  //   }, 2000);
  //   jQuery('.preload').show();
  // }


jQuery('#get-quotes').on('click', function(event) {
  event.preventDefault();

  jQuery.ajax({
    method: 'GET',
    url: red_vars.rest_url + 'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1',
    data: {
      comment_status: 'closed'
    },
    beforeSend: function(xhr) {
      xhr.setRequestHeader('X-WP-Nonce', red_vars.wpapi_nonce);
    }
  }).done(function(response) {
    history.pushState('', '', response[0].link)
      for(let i = 0; i < response.length; i++) {
        jQuery('article').empty().append(
        `
        <p>${response[i].content.rendered}</p>
        <h3> - ${response[i].title.rendered},
        <a href="${response[i]._qod_quote_source_url}"> ${response[i]._qod_quote_source}</a></h3>
       `);
        }
      });
  });
});
