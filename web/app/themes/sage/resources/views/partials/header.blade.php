
    <section class="header">
              <header>
                  <div class="container">
                      <nav>
                          <div class="nav__logo">
                              <a href="#">immenu.com</a>
                          </div>

                              <div id='mobile' class="nav__items">
                              <div class="nav__search nav__search_header mobile_item">
                                  <a href="#"><i class="fas fa-search"></i></a>
                                  <input type="text" placeholder="Поиск заведений и блюд">
                              </div>
                              <select name="" id="" class=" nav__select nav__select_one mobile_item">
                                  <option value="Русский">Русский</option>
                                  <option value="Английский">Английский</option>
                                  <option value="Немецкий">Немецкий</option>
                              </select>
                              <select name="" id="" class=" nav__select nav__select_two mobile_item">
                                  <option value="Казань">Казань</option>
                                  <option value="Москва">Москва</option>
                                  <option value="Санкт-Петербург">Санкт-Петербург</option>
                              </select>

                          <div class="nav__usericon">

                             <a href="#" <i class="far fa-user"></i></a>
                          </div>


                          </div>
                          <div  class="menu_mobile" onclick="OpenMenu()">
                               <i class="fas fa-bars"></i>
                          </div>

                      </nav>
                  </div>
              </header>
          </section>
          <hr color="#f2f2f2">
          <!-- Блок с формой для поиска  -->
          <section>
              <div class="container">
                  <div class="image-block">

                      <h1 class="image-bloclk___title">Discover great places to eat <br>
                      around you in Kazan</h1>
                      <div class="nav__search nav__search_1">
                          <a href="#"><i class="fas fa-search"></i></a>
                          <input type="text" placeholder="Поиск заведений и блюд">
                      </div>
                  </div>
              </div>
          </section>

          <hr color="#f2f2f2" size='3px'>

          <!-- Секция выбора -->
          <section>
              <div class="shadow-block">
                  <div class="container">
                      <ul class="button-block">
                          <?php wp_nav_menu([
                          'container'=>null,
                          'items_wrap' => '%3$s'
                          ])?>
                          <select name="" id="" class="button-block__select">
                              <option value="Еще">Еще</option>
                              <option value="Не каши">Не каши</option>
                              <option value="Крекеры">Крекеры</option>
                              <option value="К пиву">К пиву</option>
                          </select>
                      </div>
                  </div>
              </div>
          </section>
    </header>
  </div>

