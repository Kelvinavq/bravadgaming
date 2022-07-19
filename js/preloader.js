function preloader() {
  $(() => {
    setInterval(() => {
      let p = $(".preloader");

      p.css("display", "none");
      
    }, 2000);
  });
}

preloader();
