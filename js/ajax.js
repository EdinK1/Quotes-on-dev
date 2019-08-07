jQuery(() => {
  const prevPage = () => {
    window.location = window.location;
  };

  window.addEventListener('popstate', prevPage);

  jQuery('#get-quotes').on('click', function(e) {
    e.preventDefault();

    jQuery
      .ajax({
        method: 'GET',
        url:
          red_vars.rest_url +
          'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1',
        data: {
          comment_status: 'closed'
        },
        beforeSend: function(xhr) {
          xhr.setRequestHeader('X-WP-Nonce', red_vars.wpapi_nonce);
        }
      })
      .done(function(response) {
        history.pushState('', '', response[0].link);
        for (let i = 0; i < response.length; i++) {
          jQuery('.entry-content')
            .empty()
            .append(
              `
        <p>${response[i].content.rendered}</p>
        <h3> - ${response[i].title.rendered}
        ${response[i]._qod_quote_source_url &&
          `, 
        <a href="${response[i]._qod_quote_source_url}"> ${
            response[i]._qod_quote_source
          }</a></h3>
        `}
        `
            );
        }
      });
  });
});

jQuery('#submitForm').on('submit', function(e) {
  e.preventDefault();

  let title = jQuery('#quote-author').val(),
    content = jQuery('#quote-content').val(),
    _qod_quote_source = jQuery('#quote-source').val(),
    _qod_quote_source_url = jQuery('#quote-url').val();

  jQuery
    .ajax({
      method: 'POST',
      url: red_vars.rest_url + 'wp/v2/posts',
      data: {
        title,
        content,
        _qod_quote_source,
        _qod_quote_source_url,
        status: 'pending'
      },
      beforeSend: function(xhr) {
        xhr.setRequestHeader('X-WP-Nonce', red_vars.wpapi_nonce);
      }
    })
    .done(function() {
      jQuery('form')
        .empty()
        .append('<p class="success">Thanks for submitting your quote!</p>');
    })
    .fail(function() {
      jQuery('form').append(
        '<p class="failure">Quote not submitted. Refresh the page and try again</p>'
      );
    });
});
