const track = document.querySelector('.carousel__track');
const slides = Array.from(track.children);
const nextButton = document.querySelector('.carousel__button--right');
const previousButton = document.querySelector('.carousel__button--left');
const slideWidth = slides[0].getBoundingClientRect().width;

// Funkcja ustawiajaca slajdy obok siebie, od lewej do prawej strony
const setSlidePosition = ((slide, index) => {
    slide.style.left = slideWidth * index + 'px';
});  

// Ustawia slajdy obok siebie
slides.forEach(setSlidePosition);

// Przesuwa slajdy w wybranym kierunku
const moveToSlide = (track, currentSlide, targetSlide) => {
    // Przesuwamy na nowy slajd
    track.style.transform = 'translateX(-' + targetSlide.style.left + ')';

    // Usuniecie klasy oznaczacej obecny slajd z poprzedniego slajdu
    currentSlide.classList.remove('current-slide');
    // Oznaczenie nastepnego slajdu jako obecny
    targetSlide.classList.add('current-slide');
}

// Usuwa lub dodaje strzalki w zaleznosci od indeksu obecnego slajdu
const updateArrows = (slide) => {
    if (slides.indexOf(slide) == 0) {
        previousButton.classList.add('is-hidden');
        nextButton.classList.remove('is-hidden');
    } else if (slides.indexOf(slide) == slides.length - 1) {
        previousButton.classList.remove('is-hidden');
        nextButton.classList.add('is-hidden');
    } else {
        previousButton.classList.remove('is-hidden');
        nextButton.classList.remove('is-hidden');
    }
}  

// W momencie klikniecia prawego przycisku, przesuwamy slajdy w lewo
nextButton.addEventListener('click', e => {

    // Wyszukuje obecny slajd
    const currentSlide = track.querySelector('.current-slide');
    
    // Wyszukuje nastepny slajd
    const nextSlide = currentSlide.nextElementSibling;

    updateArrows(nextSlide);
    moveToSlide(track, currentSlide, nextSlide);
});

// W momencie klikniecia lewego przycisku, przesuwamy slajdy w prawo
previousButton.addEventListener('click', e => {
     // Wyszukuje obecny slajd
     const currentSlide = track.querySelector('.current-slide');

     // Wyszukuje poprzedni slajd
     const previousSlide = currentSlide.previousElementSibling;
    
     updateArrows(previousSlide);
     moveToSlide(track, currentSlide, previousSlide);
});