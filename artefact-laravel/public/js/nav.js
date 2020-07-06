$(window).on("popstate", evt  => {
    let anchor = location.hash;
    anchor = anchor.substr(1);
    $('.page').hide();
    let page = $(`[name="${anchor}"]`)
    $("nav a").removeClass("selected");
    $(`nav [href="${location.hash}"]`).addClass("selected");
    page.show();
  });
  $(window).trigger("popstate");


