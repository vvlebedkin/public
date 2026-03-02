$(function() {

  $(document).delegate('#faceadd_form', 'submit', function() {

    let data = {
        prod_id: prodId,
        nonce: ajax_custom.nonce,
        action: 'prod_quick_view'
      }

  	$.ajax({
      url: ajax_custom.ajaxurl, // WordPress переменная для AJAX URL
      type: "POST",
      data: data, 
      dataType: 'json',
      beforeSend: function () {
        // document.body.style.cursor = "wait";
      },
      success: function (response) {
        // document.body.style.cursor = "auto";
        // alert(response.data.url);
        // location.reload();

        let banerUrl = response.data.url;

        if (banerUrl) {
          $('.catalog_block-baner').html('<img src="' + banerUrl + '">').addClass('active');
        } else{
          $('.catalog_block-baner').html('').removeClass('active');
        }
      },
      error: function (xhr, status, error) {
        console.error("AJAX Error:", status, error);
      },
    }); 

    return false;

  });
	
});

