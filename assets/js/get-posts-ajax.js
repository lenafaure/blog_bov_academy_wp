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
    data: {
      'post_id': postID,
      'action': 'home_page_post'},
    beforeSend: function() {
      jQuery(postContent).html('Loading...');
      // console.log('Post id: ' + postID);
    },
   success: function (data) {
        console.log(data);
    },
    error: function(jqXHR, textStatus, error) {
      console.error('The error occured: ' + textStatus, error)
    }
  });

}
