/***************************************
 LOAD FULL CONTENT OF POSTS WITH AJAX
****************************************/

window.onload= function() {

  var articles = document.querySelectorAll('.jt-article-preview'),
      i, len = articles.length,
      postID,
      postLink,
      postContent;
  
  jQuery.ajaxSetup({cache:false});
  // console.log('php_array.admin_ajax: ', php_array.admin_ajax);
  for ( i = 0; i < len; i++ ) {
  
    // post id is in the form: "post-number"; we need only "number" part to send to wp
    postID = articles[i].id.split('-')[1];
  
    jQuery.ajax({
      url: php_array.admin_ajax,
      type: 'POST',
      data: {
        'post_id': postID,
        'action': 'home_page_post'
      },
      beforeSend: function() {
        // jQuery(postContent).html('Loading...');
        // console.log('Post id: ' + postID);
      },
      success: function (response, status, jqXHR) {
        // "response" object has two properties: "post_id", and "post_content"
        //get the post id
        postID = response.post_id;
        // create the selector for the content section
        var selector = '#post-' + postID + ' .vg-content';
        // get the container for the post content
        postContent = document.querySelector(selector);
        // fill the container with the post content
        postContent.innerHTML = response.post_content;
      },
      error: function(jqXHR, textStatus, error) {
        console.error('The error occured: ' + textStatus, error);
      }
    });
  
  }
}  
  
