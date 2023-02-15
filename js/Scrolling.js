$(function () {
    var tickerLength = $('.container2 ul li').length
    var tickerHeight = $('.container2 ul li').outerHeight()
    $('.container2 ul li:last-child').prependTo('.container ul')
    $('.container2 ul').css('marginTop', -tickerHeight)
    function moveTop() {
        $('.container2 ul').animate({
            top: -tickerHeight
        }, 600, function () {
            $('.container2 ul li:first-child').appendTo('.container2 ul')
            $('.container2 ul').css('top', '')
        })
    }
    setInterval(function () {
        moveTop()
    }, 3000)
})