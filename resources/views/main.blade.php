@extends('layout')

@section('content')
  <div class="view">

    <div class="container">
      <div class="row">
        <div class="col-sm back text-center">
          <h3 class="mt-5">Качественное воплощение неординарных интерьеров</h3>
        </div>

        <div class="col-sm">
          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner" style=" width:100%; height: 400px !important;">
              <div class="carousel-item active">
                <img src=".\img\slider1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src=".\img\slider2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src=".\img\slider3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Предыдущий</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Следующий</span>
            </button>
          </div>
        </div>
      </div>

      <a href="https://api.whatsapp.com/send?phone=79161755759" target="_blank" rel="nofollow">
        <span class="whatsapp-button"></span>
    </a>

      <div class="row">
        <div class="text-center mb-5 mt-5">
          <p>NOVOLAD — деятельность в сфере ремонта, строительства и реконструкции с 1998 года по настоящее
            время. Реконструкция и обустройство коммерческих объектов (кафе, рестораны, отделения банков, магазины,
            офисы). В последние годы работы специализируемся на частных дизайнерских интерьерах высокого уровня.</p>
        </div>
      </div>
    </div>

    <div class="projects">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mt-5 mb-5">
            <h2 class="main-section-title">Наши работы</h2>
          </div>
        </div>
        <div class="row gy-5">
          <div class="col-12">
            <div class="row gx-5">

              <div class="col-8">
                <a href="{{ route('frank_page') }}"  style="text-decoration: none">
                <p class="project-img project-img-1">Проект Frank Lloyd Wright</p>
                </a>
                {{-- <img src="./img/ourjob3.png" class="project-img"> --}}
              </div>

              <div class="col-4">
                <a href="{{ route('whiteside_page') }}"  style="text-decoration: none">
                <p class="project-img project-img-2">Проект Whiteside</p>
                </a>
                {{-- <img src="./img/ourjob1.jpg" class="project-img"> --}}
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="row gx-5">
              <div class="col-4">
                <a href="{{ route('stolica_page') }}"  style="text-decoration: none">
                <p class="project-img p-5 project-img-3">Проект Сердце столицы</p>
                </a>
                {{-- <img src="./img/ourjob2.jpg" class="project-img"> --}}
              </div>
              <div class="col-8">
                <a href="{{ route('cdl_page') }}"  style="text-decoration: none">
                <p class="project-img project-img-4">Проект ЦДЛ</p>
                </a>
                {{-- <img src="./img/ourjob4.png" class="project-img"> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-3">
      <div class="row justify-content-center">
        <div class="col-md-6 pr-md-3">
          <p class="calc-text">Хотите узнать сколько стоит сделать ремонт у нас?</p>
        </div>
        <div class="col-md-6 pl-md-3 d-flex justify-content-center align-items-center">
          <a href="{{ route('calc') }}" class="btn btn-primary" role="button" style="padding-right: 10px">Калькулятор цены</a>
        </div>
      </div>
    </div>

    <div class="container mt-3 mb-3">
        <div class="row justify-content-center">
            <img src=".\img\заглушка калькулятор.png">
        </div>
    </div>


      <div class="container mt-3 mb-3">

      <div class="text-center mb-3 mt-3">
      <h2 class="mt-5">Отзывы о нас</h2>
      </div>

      <div class="col-12">
        <div id="carouselReview" class="carousel slide">
          <div class="carousel-inner" style=" width:100%; height: 400px !important;">
            <div class="carousel-item active">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <img src=".\img\отзыв1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-4">
                        <img src=".\img\отзыв2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-4">
                        <img src=".\img\отзыв3.png" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-4">
                        <img src=".\img\отзыв4.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-4">
                        <img src=".\img\отзыв5.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="col-4">
                        <img src=".\img\отзыв6.png" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
          </div>
          <button class="carousel-control-prev cstm-btn" type="button" data-bs-target="#carouselReview" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
          </button>
          <button class="carousel-control-next cstm-btn" type="button" data-bs-target="#carouselReview" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
          </button>
        </div>
      </div>
      </div>



      @auth
        <!-- Button trigger modal -->
        <a href="{{ route('review') }}" class="btn btn-secondary justify-content-center" role="button">Оставить отзыв</a>
      @endauth


        <div class="imageMain-container">
        <img class="image_after_review" src=".\img\Работаем пикчур.png" alt="Image">
        </div>

<div class="row justify-content-center">
        <div class="col text-center mt-3">
          <div class="count1">
            <h1 id="counter1">0</h1>
            <p>Лет работы</p>
          </div>
        </div>
          <div class="col text-center mt-3">
          <div class="count2">
            <h1 id="counter2">0</h1>
            <p>Проектов</p>
          </div>
        </div>
        <div class="col text-center mt-3">
          <div class="count3">
            <h1 id="counter3">0</h1>
            <p>Потворных обращений</p>
          </div>
        </div>
</div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="text-center mt-5 mb-5">
              <h2 class="main-section-title">Этапы ремонта</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="accordion mb-5" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseOne">
                    Создание дизайн-проекта
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                  <div class="accordion-body">
                    <strong>Все начинается с картинки.</strong> Наш дизайнер создаст дизайн помещения под ваши запросы,
                    проконсультирует и визуализирует ваши желания в 3д-модель.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwo">
                    Черновые работы
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    <strong>Обеспечивают надежность и долговечность будущих отделочных работ.</strong> Разборка старых
                    конструкций
                    и демонтаж старого отделочного материала. Выравнивание стен, потолков и полов, включая удаление старых
                    слоев
                    штукатурки, укладку нового основания для напольного покрытия и установку гипсокартонных
                    конструкций.Прокладка
                    и замена коммуникаций, включая водопровод, канализацию, электропроводку и отопление. Установка новых
                    дверей и
                    окон, а также ремонт и замена старых. Покраска стен, потолков и других поверхностей, которые не будут
                    покрыты
                    отделочным материалом.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThree">
                    Ремонт помещения
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    <strong>Ура, ремонт!.</strong>Сдаём комплект проектной документации.Подписываем акты и выходим на
                    строительную
                    площадку, а дальше начинается воплощение ваших желаний!
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


@endsection
