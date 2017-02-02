// console.log('Ajax script running!');

var articles = document.querySelectorAll('.jt-article-preview'),
    i, len = articles.length,
    postID,
    postLink,
    postContent;

jQuery.ajaxSetup({cache:false});
console.log('php_array.admin_ajax: ', php_array.admin_ajax);
for ( i = 0; i < len; i++ ) {

  postID = articles[i].id;
  postContent = articles[i].querySelector('.vg-content');

  jQuery.ajax({
    url: php_array.admin_ajax,
    type: 'POST',
    data: ({action: 'home_page_post', id: postID}),
    beforeSend: function() {
      jQuery(postContent).html('Loading...');
      // console.log('Post id: ' + postID);
    },
    success: function(data, textStatus, jqXHR) {
      var response = jQuery(data);
      jQuery(postContent).html(response);
      console.log('data: ', data);
    },
    error: function(jqXHR, textStatus, error) {
      console.error('The error occured: ' + textStatus, error)
    }/*,
    complete: function(jqXHR, textStatus) {
      console.log('Completed: ', textStatus);
    }*/
  });

}
