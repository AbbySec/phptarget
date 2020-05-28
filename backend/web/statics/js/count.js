function countUp(count,val)
{
    var $display = $(val), int_speed = 12,intvall=1;
    $display.text('0');
    if(count>1000) intvall+=100;
    var int = setInterval(function() {
        if(parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + intvall;
            $display.text(curr_count);
        } else {
            $display.text(count);
            clearInterval(int);
        }
    }, int_speed);
}

countUp(Number($('#count-1').html()),'.count1');
countUp(Number($('#count-2').html()),'.count2');
countUp(Number($('#count-3').html()),'.count3');