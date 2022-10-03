<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="shortcut icon" type="image/ico" href="./assets/img/favicon.ico"> -->
    <link rel="stylesheet" href="./assets/css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Главная</title>

</head>
<body>
  <?php include './header.php' ?>
  <main>
    <section class="hero">
      <div class="container">
        <h1 class="hero__title text-light">Туроператор детского отдыха</h1>
        <ul class="advantages hero__list list-reset">
          <li class="advantages__item">
            <img src="../assets/img/svg/advantages/1.svg" alt="advantages img" class="advantages__img">
            <p class="advantages__text">
              Официальный представитель ВДЦ Смена
            </p>
          </li>
          <li class="advantages__item">
            <img src="../assets/img/svg/advantages/1.svg" alt="advantages img" class="advantages__img">
            <p class="advantages__text">
              Более 11 лет опыта в организации детского отдыха
            </p>
          </li>
          <li class="advantages__item">
            <img src="../assets/img/svg/advantages/1.svg" alt="advantages img" class="advantages__img">
            <p class="advantages__text">
              Организация группового трансфера
            </p>
          </li>
          <li class="advantages__item">
            <img src="../assets/img/svg/advantages/1.svg" alt="advantages img" class="advantages__img">
            <p class="advantages__text">
              Официальный представитель ВДЦ Орлёнок
            </p>
          </li>
          <li class="advantages__item">
            <img src="../assets/img/svg/advantages/1.svg" alt="advantages img" class="advantages__img">
            <p class="advantages__text">
              Только проверенные лагеря
            </p>
          </li>
          <li class="advantages__item">
            <img src="../assets/img/svg/advantages/1.svg" alt="advantages img" class="advantages__img">
            <p class="advantages__text">
              В реестре туроператоров РТО № 023464
            </p>
          </li>
        </ul>
        <a href="#" class="btn hero__btn btn-reset">Выбрать лагерь</a>
      </div>
    </section>

    <section class="timer">
      <div class="contaimer">
        <h2 class="timer__title text-light">До осенних каникул осталось:</h2>
        <div class="timer__clock"></div>
      </div>
    </section>

    <section class="booking">
      <img class="booking__img booking__img_top" src="../assets/img/svg/wave.svg" alt="booking bg">
      <div class="container">
        <h3 class="booking__title text-active">
          УСПЕЙ ЗАБРОНИРОВАТЬ ПУТЕВКУ ДЛЯ СВОЕГО РЕБЕНКА!
        </h3>
      </div>
      <img class="booking__img booking__img_down" src="../assets/img/svg/wave.svg" alt="booking bg">
    </section>

    <section class="suggestions">
      <div class="container">
        <h2 class="suggestions__title text-light">Популярные предложения</h2>
        <div class="cards">
          <div class="card">
            <div class="card__img">
              <img src="../assets/img/camps/1.jpg" alt="card img">
            </div>
            <h4 class="card__title">Ленинградская область</h4>
            <div class="card__btns">
              <a href="#" class="btn card__btn">Подробнее</a>
              <a href="#" class="btn btn_active card__btn">Другие предложения</a>
            </div>
          </div>
          <div class="card">
            <div class="card__img">
              <img src="../assets/img/camps/2.jpg" alt="card img">
            </div>
            <h4 class="card__title">Краснодарский край</h4>
            <div class="card__btns">
              <a href="#" class="btn card__btn">Подробнее</a>
              <a href="#" class="btn btn_active card__btn">Другие предложения</a>
            </div>
          </div>
          <div class="card">
            <div class="card__img">
              <img src="../assets/img/camps/3.jpg" alt="card img">
            </div>
            <h4 class="card__title">Московская область</h4>
            <div class="card__btns">
              <a href="#" class="btn card__btn">Подробнее</a>
              <a href="#" class="btn btn_active card__btn">Другие предложения</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="seasons">
      <img class="seasons__img" src="../assets/img/svg/wave.svg" alt="seasons bg">
      <div class="container">
        <h2 class="seasons__title">Осенние/зимние смены</h2>
        <div class="cards">
          <div class="card">
            <div class="card__img">
              <img src="../assets/img/camps/seasons/1.jpg" alt="card img">
            </div>
            <h4 class="card__title">ДЦ "КОМПЬЮТЕРиЯ"</h4>
            <h6 class="card__subtitle">Тверская область</h6>
            <div class="card__btns">
              <a href="#" class="btn card__btn">Подробнее</a>
            </div>
          </div>
          <div class="card">
            <div class="card__img">
              <img src="../assets/img/camps/seasons/2.jpg" alt="card img">
            </div>
            <h4 class="card__title">Город мастеров</h4>
            <h6 class="card__subtitle">Московская область</h6>
            <div class="card__btns">
              <a href="#" class="btn card__btn">Подробнее</a>
            </div>
          </div>
          <div class="card">
            <div class="card__img">
              <img src="../assets/img/camps/seasons/3.jpg" alt="card img">
            </div>
            <h4 class="card__title">Открывая горизонты</h4>
            <h6 class="card__subtitle">Московская область</h6>
            <div class="card__btns">
              <a href="#" class="btn card__btn">Подробнее</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="shifts">
      <div class="container">
        <h2 class="shifts__title">Авторские смены</h2>
        <div class="cards">
          <div class="card">
            <div class="card__img">
              <img src="../assets/img/camps/shifts/1.jpg" alt="card img">
            </div>
            <h4 class="card__title">Batyrev Camp</h4>
            <h6 class="card__subtitle">Тверская область</h6>
            <div class="card__btns">
              <a href="#" class="btn card__btn">Подробнее</a>
            </div>
          </div>
          <div class="card">
            <div class="card__img">
              <img src="../assets/img/camps/shifts/2.jpg" alt="card img">
            </div>
            <h4 class="card__title">Город мастеров</h4>
            <h6 class="card__subtitle">ВДЦ “Смена”</h6>
            <div class="card__btns">
              <a href="#" class="btn card__btn">Подробнее</a>
            </div>
          </div>
          <div class="card">
            <div class="card__img">
              <img src="../assets/img/camps/shifts/3.jpg" alt="card img">
            </div>
            <h4 class="card__title">Открывая горизонты</h4>
            <h6 class="card__subtitle">ВДЦ “Орлёнок”</h6>
            <div class="card__btns">
              <a href="#" class="btn card__btn">Подробнее</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="benefits">
      <div class="container">
        <h2 class="benefits__title">Наши преимущества</h2>
        <ol class="benefits__list list-reset">
          <li class="benefits__item">
            <div class="benefits__descr">
              <p class="benefit__number">01</p>
              <p class="benefit__text">Квалифицированные сотрудники</p>
            </div>
          </li>
          <li class="benefits__item">
            <div class="benefits__descr">
              <p class="benefit__number">02</p>
              <p class="benefit__text">Поддержка до и после покупки тура</p>
            </div>
          </li>
          <li class="benefits__item">
            <div class="benefits__descr">
              <p class="benefit__number">03</p>
              <p class="benefit__text">Официальный представитель в каждом лагере 24/7​</p>
            </div>
          </li>
          <li class="benefits__item">
            <div class="benefits__descr">
              <p class="benefit__number">04</p>
              <p class="benefit__text">Нам доверяют крупные компании</p>
            </div>
          </li>
          <li class="benefits__item">
            <div class="benefits__descr">
              <p class="benefit__number">05</p>
              <p class="benefit__text">Ежегодно отправляем более 5 000 детей на отдых</p>
            </div>
          </li>
          <li class="benefits__item">
            <div class="benefits__descr">
              <p class="benefit__number">06</p>
              <p class="benefit__text">Индивидуальный подход к каждому клиенту</p>
            </div>
          </li>
          <li class="benefits__item">
            <div class="benefits__descr">
              <p class="benefit__number">07</p>
              <p class="benefit__text">Реализовано более 50 государственных контрактов</p>
            </div>
          </li>
          <li class="benefits__item">
            <div class="benefits__descr">
              <p class="benefit__number">08</p>
              <p class="benefit__text">Организация безопасного тура для детей</p>
            </div>
          </li>
        </ol>
        <h3 class="benefits__subtitle text-active">
          Нам можно доверить организацию отдыха ваших детей
        </h3>
      </div>
    </section>

    <section class="reviews">
      <div class="container">
        <h2 class="reviews__title">Отзывы Родителей</h2>
        <p class="reviews__subtitle">
          Нам можно доверить организацию отдыха ваших детей!
        </p>
      </div>
    </section>
  </main>
  <?php include './footer.php' ?>
</body>
