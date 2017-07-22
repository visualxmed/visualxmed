
var imageArray = new Array();
imageArray[0] = new Image();
imageArray[0].src = '/lib/images/birth_control.jpg';

imageArray[1] = new Image();
imageArray[1].src = '/lib/images/cavities.jpg';

imageArray[2] = new Image();
imageArray[2].src = '/lib/images/clinicalpsychology.jpg';

imageArray[3] = new Image();
imageArray[3].src = '/lib/images/community.png';

imageArray[4] = new Image();
imageArray[4].src = '/lib/images/education.jpeg';

imageArray[5] = new Image();
imageArray[5].src = '/lib/images/evidencebasedmedicine.jpg';

function display(element){
    var img = document.getElementById(element);

    for (var i = 0; i < imageArray.length; i++)
        {
            if (imageArray[i].src == img.src)
                {
                    if (i === imageArray.length)
                        {
                            document.getElementById(element).src = imageArray[0].src;
                            break;
                        }
                    document.getElementById(element).src = imageArray[i+1].src;
                    break;
                }
        }
}

