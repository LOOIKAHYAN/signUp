function enlarge(img) {
    img.classList.toggle('large'); 
}

function changeSize(size) {
    var video = document.getElementById("video01");
    switch (size) {
        case 'smallest':
            video.style.width = '150px';
            break;
        case 'small':
            video.style.width = '400px';
            break;
        case 'normal':
            video.style.width = '500px';
            break;
        case 'large':
            video.style.width = '600px';
            break;
        case 'largest':
            video.style.width = '750px';
            break;
        default:
            break;
    }
}