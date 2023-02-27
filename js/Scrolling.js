$(function () {
  var tickerLength = $(".container2 ul li").length;
  var tickerHeight = $(".container2 ul li").outerHeight();
  tickerHeight += 24;
  console.log("tickerHeight");
  console.log(tickerHeight);

  $(".container2 ul li:last-child").prependTo(".container2 ul");
  $(".container2 ul").css("marginTop", -tickerHeight);
  function moveTop() {
    $(".container2 ul").animate(
      {
        top: -tickerHeight,
      },
      600,
      function () {
        $(".container2 ul li:first-child").appendTo(".container2 ul");
        $(".container2 ul").css("top", "");
      }
    );
  }
  setInterval(function () {
    moveTop();
  }, 3000);
});

$(function () {
  var tickerLength = $(".container3 ul li").length;
  var tickerHeight = $(".container3 ul li").outerHeight();
  tickerHeight += 24;

  $(".container3 ul li:last-child").prependTo(".container3 ul");
  $(".container3 ul").css("marginTop", -tickerHeight);
  function moveTop() {
    $(".container3 ul").animate(
      {
        top: -tickerHeight,
      },
      600,
      function () {
        $(".container3 ul li:first-child").appendTo(".container3 ul");
        $(".container3 ul").css("top", "");
      }
    );
  }
  setInterval(function () {
    moveTop();
  }, 5000);
});
