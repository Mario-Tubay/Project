


/*Slider Automatico*/
window.addEventListener('load',function(){
    console.log('documento cargado');
    const slider = document.getElementById('imagen');

    const imagenes=["img1.png","img2.png","img3.png","img4.png","img5.png"];
    let indexImagenes=0;

    const cambiarImagenes = function(){
        slider.src = `../img/${imagenes[indexImagenes]}`;
        if(indexImagenes < 4){
            indexImagenes++;
        }else{
            indexImagenes = 0;
        }
    };
    cambiarImagenes();

    setInterval(cambiarImagenes,2200);

});
/*Fin del Slider */






