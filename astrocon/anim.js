document.addEventListener('DOMContentLoaded', function () {


    gsap.registerPlugin(ScrollTrigger);

        gsap.utils.toArray(".trait-dessous").forEach(el => {
          gsap.to(el, {
            scrollTrigger: {
              trigger: el,
              start: "top 80%" 
            },
            "--pseudoWidth": "106%",
            duration: 1.5,
          });
        });


});