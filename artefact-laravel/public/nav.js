$(window).on("popstate", evt  => {
    let anchor = location.hash;
    anchor = anchor.substr(1);
    $('.page').hide();
    let page = $(`[name="${anchor}"]`)
    if (page.length == 0) {
      let h = localStorage.getItem("anchor");
      if (!h) h = "#allProducts";
      location.hash = h;
    }
    localStorage.setItem("anchor", location.hash);
    $("nav a").removeClass("selected");
    $(`nav [href="${location.hash}"]`).addClass("selected");
    page.show();
  });
  $(window).trigger("popstate");

