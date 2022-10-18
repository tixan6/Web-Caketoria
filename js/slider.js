    let offset = 0; //Смешение от левого края
    let offsetForMass = 1; //Смешение от левого края
    const sliderline = document.querySelector('.sliderLine');

    document.querySelector('.ArrowToTheRigth').addEventListener('click', function(){
        offsetForMass++;
        offset += 942;
        if(offset > 1884) 
        {
            offset = 0;
        }
        sliderline.style.left = -offset + 'px';
    });

    document.querySelector('.ArrowToTheLeft').addEventListener('click', function(){
        offsetForMass--;
        offset -= 942;
        if(offset < 0) 
        {
            offset = 1884;
        }
        sliderline.style.left = -offset + 'px';
    });
        