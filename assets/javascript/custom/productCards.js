const MAX_DEGREES = 3;

function getCoordinate(dimension, position, inverse = false) {
  const halfDimension = $(this)[dimension]() / 2;
  const percentDimension = Math.abs(position - halfDimension) / halfDimension;
  const sign = position > halfDimension ? -1 : 1;
  return (inverse ? sign : -sign) * (percentDimension * MAX_DEGREES);
}

$(".cat-page ul.products li.product a img")
  .on("mouseenter", function() {
    $(this).css({ "will-change": "transform" });
  })
  .on("mouseleave", function() {
    requestAnimationFrame(() => {
      $(this).css("transform", "rotateX(0deg) rotateY(0deg)");
      $(this).css({ "will-change": "auto" });
    });
  })
  .on("mousemove", function({ clientX, clientY }) {
    const { left, top } = $(this).offset();
    const posX = clientX - left;
    const posY = (clientY - top);

    const x = getCoordinate.call(this, "width", posY, true);  
    const y = getCoordinate.call(this, "height", posX); // inverse is `true` because Y is top-down

    requestAnimationFrame(() => {
      $(this).css(
        "transform",
        `perspective(200px) rotateX(${x}deg)  rotateY(${y}deg)`
      );
    });
  });
