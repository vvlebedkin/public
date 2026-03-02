$(function () {
  $(".js-move").on("click", function (e) {
    e.preventDefault();
    var anchor = $(this).attr("href");
    $("html, body")
      .stop()
      .animate(
        {
          scrollTop: $(anchor).offset().top,
        },
        800,
      );
  });

  // $(".js-phone").mask("+7 (999) 999-99-99");
  // $('.js-phone').inputmask({"mask": "+7 (999) 999-99-99"});

  $("[data-fancybox]").fancybox({
    touch: false,
    autoFocus: false,
  });

  // $('.wpcf7').on('wpcf7mailsent', function(event) {

  //   $.fancybox.close();

  //   setTimeout(function() {
  //     $.fancybox.open({
  //       src: '#popup_thanks'
  //     });

  //   }, 0);

  //   setTimeout(function() {
  //     $.fancybox.close();
  //   }, 2000);

  //   setTimeout(function() {
  //     window.location.href = "/thank";
  //   }, 500);

  // });

  $(".js-acceptance").change(function (event) {
    let button = $(this).parents("form").find("button");
    if ($(this).is(":checked")) {
      button.prop("disabled", false);
    } else {
      button.prop("disabled", true);
    }
  });

  /* События фильтра */

  $(document).on("berocket_ajax_filtering_end", after_filter_events);

  function after_filter_events(e) {
    setTimeout(function () {
      $(document).trigger("yith_wcwl_reload_fragments");

      $("li.checked").parents("ul").prev(".roundpcs").addClass("active");
    }, 1000);
  }

  /* Считаем количество товара */

  $(document).on("click", ".js-qty-btn", function (event) {
    let inp = $(this).parent(".dop-qty").find("input"),
      price = $(this)
        .parents(".dopservices-block__row")
        .find(".dopservices-block__price"),
      val = parseInt(inp.val());

    if ($(this).hasClass("plus")) {
      val += 1;
    } else if ($(this).hasClass("minus") && val != 0) {
      val -= 1;
    }

    inp.val(val);

    if (val > 0 && price.not(".active")) {
      price.addClass("active");
    } else {
      price.removeClass("active");
    }

    delay = setTimeout(function () {
      $('button[name="update_cart"]').trigger("click");
    }, 500);
  });

  // $('.wpcf7').on('wpcf7invalid', function(event) {
  //    alert('Пожалуйста, заполните поля отмеченные красным');
  // });
});

/* <![CDATA[ */
function externalLinks() {
  links = document.getElementsByTagName("a");
  for (i = 0; i < links.length; i++) {
    link = links[i];
    if (link.getAttribute("href") && link.getAttribute("rel") == "external")
      link.target = "_blank";
  }
}
window.onload = externalLinks;
/* ]]> */
