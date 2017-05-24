const MAX_DEGREES = 4;

function getCoordinate(dimension, position, inverse = false) {
  const halfDimension = $(this)[dimension]() / 2;
  const percentDimension = Math.abs(position - halfDimension) / halfDimension;
  const sign = position > halfDimension ? -1 : 1;
  return (inverse ? sign : -sign) * (percentDimension * MAX_DEGREES);
}

$("ul.products li.product a img")
  .on("mouseenter", function() {
    // GPU acceleration: https://developer.mozilla.org/en-US/docs/Web/CSS/will-change
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
    const posY = clientY - top;

    const x = getCoordinate.call(this, "width", posX);  
    const y = getCoordinate.call(this, "height", posY, true); // inverse is `true` because Y is top-down

    requestAnimationFrame(() => {
      $(this).css(
        "transform",
        `perspective(200px) rotateX(${x}deg)  rotateY(${y}deg)`
      );
    });
  });
