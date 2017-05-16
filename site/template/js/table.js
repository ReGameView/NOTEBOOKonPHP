function anim(event, color)
{
    text.value += event.type + ' [target: ' + event.target.id + ']\n';
    text.scrollTop = text.scrollHeight;
    if (event.type = "mouseover") {
        event.target.style.background = color;
        text.value += event.type + 'Покрашено в Чёрный \n'
    }
    if (event.type = 'mouseout') {
        event.target.style.background = color;
        text.value += event.type + 'Покрашено в Белый \n'
    }
}