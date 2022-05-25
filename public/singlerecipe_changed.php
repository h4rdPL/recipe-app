<?php include '../src/inc/header.php';?>
<style>
.recipe-categories__container h2 {
    text-align: center;
    font-size:1.2rem;
    font-weight:bold;
    text-transform: uppercase;
}

.recipe-radius {
    border-radius:5px;
}

.ingredients__list__item {
            border: none;
            border-bottom: 2px solid #559b61;
            outline: none;
            display:flex;
            justify-content: space-between;
            width:50%;
            padding: .5rem 0;
}

.recipe-description {
    text-align: justify;
}
.recipe-title {
  font-size: 1.2rem;
  font-weight: bold;
  margin: .5rem 0;
}
.ingredients__list__item {
    margin: 0 auto;
}
.recipe-categories__item {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 10px;
}

.recipe-categories__item img {
  width: 30px;
  height: 30px;
}

.recipe-categories {
  align-items: center;
}

</style>
<article>
    <div class="recipe-image__container">
        <img src="img/pexels-abhilash-sahoo-3896066.jpg" alt="">
    </div>
    <div class="recipe-details">
        <!-- <h1>Pomidorowa</h1> -->
        
        <div class="recipe-categories">
            <div class="recipe-categories__item recipe-radius">
                <img src="img/time-icon.svg" alt="">
                <p>30 min</p>
            </div>
            <div class="recipe-categories__container">
                <h2>
                    Zupa pomidorowa
                </h2>

            </div>
            <div class="recipe-categories__item recipe-radius">
                <img src="img/chart.svg" alt="">
                <p>Łatwe</p>
            </div>

        </div>

        <div class="recipe-description recipe-radius">

            <h2 class="recipe-title">
                Składniki
            </h2>
            <div class="ingredients">
                <ul class="ingredients__list">
                    <li class="ingredients__list__item">
                        Jajka 
                        <span>
                            2 szt
                        </span>
                    </li>
                    <li class="ingredients__list__item">
                        Mąka 
                        <span>
                            500 gram
                        </span>
                    </li>
                    <li class="ingredients__list__item">
                        Drożdże 
                        <span>
                            25 gram
                        </span>
                    </li>
                    <li class="ingredients__list__item">
                        Mleko 
                        <span>
                            400 ml
                        </span>
                    </li>
                </ul>
            </div>
            <h2 class="recipe-title">
                Sposób przygotowania
            </h2>
            <p>
                Do ugotowania zupy polecam garnek o pojemności minimum 2,5 litra.

                Warzywa ważone były przed ewentualnym obraniem/przygotowaniem. Zawsze podaję wagę użytych przeze mnie warzyw. Nie trzeba jednak stosować się do wytycznych idealnie co do grama. Wagi podaję po to, by łatwiej było zorientować się, jaka mniej więcej ilość potrzebna jest do zrobienia zupy.

                Kalorie policzone zostały na podstawie użytych przeze mnie składników. Jest to więc orientacyjna liczba kalorii, ponieważ Twoje składniki mogą mieć inną liczbę kalorii niż te, których użyłam ja. Podczas liczenia kalorii nie uwzględniłam dodatków w postaci makaronu lub ryżu. Z podanej ilości składników otrzymasz około 1450 ml zupy pomidorowej. 

                Pomidorówkę możesz ugotować zarówno na drobiu, na wołowinie lub na bazie bulionu z samych warzyw. Wszystko szykujesz tak samo. Jedyna różnica polega na tym, że same warzywa oraz drób gotujesz około godziny do półtorej, wołowinę zaś od dwóch do trzech godzin. Zalecam też łączyć ze sobą kurczaka i wołowinę. 

                Ważne: Nie trzeba gotować bulionu, który podałam w przepisie. Możesz użyć około 1200 ml wcześniej ugotowanego wywaru z warzyw, kurczaka, czy wołowiny. Jeśli dzień wcześniej ugotujesz dużo rosołu, to wystarczy, że odlejesz sobie 1200 ml rosołu i zostawisz do pomidorówki na następny dzień. 
            </p>
        </div>
    </div>
</article>

<?php include '../src/inc/footer.php';?>