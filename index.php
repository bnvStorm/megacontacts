<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<?php include 'includes/head.php'; ?>
<title>4920</title>
<!-- <meta name="description" content="Экологичные контейнерные площадки для вашего бизнеса. От проекта до внедрения"> -->
<meta name="robots" content="index,follow">
<link rel="canonical" href="https://rpo.kz"/>
<script src="../js/jquery.magnific-popup.js"></script>
<?php
// проверка на установленную сессию
if (!isset($_SESSION['first'])) {
  // если впервые на сайте - выводим форму
echo '<script src="../js/main.js"></script>';
}
$_SESSION['first'] = false;

?>
<link rel="stylesheet" href="../css/magnific-popup.css">
</head>

<body>
<div class="body-wrapper">
<?php include 'includes/navbar.php'; ?>
  <script src="https://rpo.kz/style/js/lazy.js"></script>
  <div id="services" class="section anchor">
    <div class="light-wrapper">
      <div class="container inner">
          <div class="row text-center services-1">
            <div class="col-sm-4">
                  <div class="col-wrapper">
              <div class="title red-title">
                  <h3 class="gray">ДЕПАРТАМЕНТ ЗАКУПОК:</h3>
              </div>
              <span>Единый номер:</span>
              <a class="phone" href="tel:+7 (7212) 42 42 11">+7 (7212) 42 42 11</a>
              <div class="item">
              <div class="purpule boss">Руководитель</div>
              <div class="people">
                <span>Евгения Александровна</span><span class="lastname">ТУР</span>
              </div>

              <a href="mailto:hp@qwmo.net">hp@qwmo.net</a>
              <a class="phone" href="tel:+77084368156">+7 708 436 81 56</a>
            </div>
            <div class="item">
            <div class="purpule boss">Менеджер по разработке коммерческих предложений</div>
            <div class="people">
              <span>Оксана</span> <span class="lastname">РЕХМАН</span>
            </div>
            <a href="mailto:hpa@qwmo.net">hpa@qwmo.net</a>
            <a class="phone" href="tel:+7 (708) 439 64 41">+7 (708) 439 64 41</a>
          </div>
          <div class="note main-note">
            Внимание: при отправке запроса на подготовку коммерческого
              предложения в теле письма необходимо обязательно указать
          реквизиты компании и перечень отходов.
        </div>
          <div class="item">
          <div class="purpule boss">
              Менеджеры по закупкам
          </div>
          <div class="people">
            <span>Карина</span> <sapn class="lastname">МАСТАЕВА</sapn>
          </div>
          <a href="mailto:hbb@qwmo.net">hbb@qwmo.net</a>
          <a class="phone" href="tel:+77084396449">+7 708 439 64 49</a>
          <div class="people">
            <span>Татьяна</span> <sapn class="lastname">ГРУЗИНСКАЯ</sapn>
          </div>
          <a href="mailto:hbc@qwmo.net">hbc@qwmo.net</a>
          <a class="phone" href="tel:+7 (7212) 42 42 11">+7 (7212) 42 42 11</a>
        </div>

              </div>
            </div>
                        <div class="col-sm-4">
                          <div class="col-wrapper">
                      <div class="item press-cont">
                    <h3 class="gray boss">ПРЕСС-СЛУЖБА, ОТДЕЛ СПЕЦПРОЕКТОВ</h3>

                    <div class="box row">
                     <div class="item_press col-sm-12 item">
                        <div class="purpule boss" style="text-transform: uppercase;">
                           Пресс-секретарь
                       </div>
                       <div class="people">
                             <span>Юрий</span> <span class="lastname">САВЧЕНКО</span>
                       </div>
                        <a href="mailto:pr@qwmo.net">pr@qwmo.net</a>
                       <a class="phone" href="tel:+77084396448">+7 708 439 64 48</a>
                   </div>
                </div>
                </div>
                <div class="item_press col-sm-12 item">
                      <h3 class="gray boss">Производственная площадка</h3>
                       <div class="purpule boss">Мастер производственной площадки</div>
                       <div class="people">
                         <span>Николай </span> <span class="lastname">ЮРЫШЕВ</span>
                       </div>
                       <a href="mailto:sm@qwmo.net">sm@qwmo.net</a>
                       <a class="phone" href="tel:+77021174777">+7 702 117 47 77</a>
                  </div>
                  <div class="item_press col-sm-12 item" style="text-align: center;">
                      <div class="purpule boss">Офис-менеджер производственной площадки</div>
                      <div class="people">
                        <span>Ирина</span> <span class="lastname">АНДРЕЕВА</span>
                      </div>
                      <a href="mailto:omm@qwmo.net">omm@qwmo.net</a>
                      <a class="phone" href="tel:+77084397430">+7 708 439 74 30</a>
                  </div>
                </div>
                </div>
                <div class="col-sm-4">
                  <div class="col-wrapper">
                    <div class="item">
                      <div class="title red-title"><h3 class="gray">ФИНАНСОВЫЙ ДЕПАРТАМЕНТ:</h3></div>
                      Единый номер:<br>
                      <a class="phone" href="tel:+77084396529">+7 708 439 65 29</a>
                      <span class="purpule boss">Руководитель</span>
                      <div class="people">
                        <span>Инна Владимировна</span> <span class="lastname">КРИВЧЕНКО</span>
                      </div>
                      <a class="mail" href="mailto:fs@qwmo.net">fs@qwmo.net</a>
                      <div class="purpule boss">Специалисты</div>
                      <div class="people">
                        Дана <span class="lastname">САДУОВА</span>
                      </div>
                      <a class="mail" href="mailto:fsa@qwmo.net">fsa@qwmo.net</a>
                      <span class="purpule boss">Бухгалтер по реализации</span>
                      <div class="people">
                        <span>Наталья</span> <span class="lastname">КОРЯКОВЦЕВА</span>
                      </div>
                       <a class="mail" href="mailto:fsk@qwmo.net">fsk@qwmo.net </a>
                      <div class="people">
                        <span>Наталья</span> <span class="lastname">СИДЯКИНА</span>
                      </div>
                      <a class="mail" href="mailto:fso@qwmo.net">fso@qwmo.net </a>
                      <a class="phone" href="tel:+77232996017">+7 (7212) 99 60 17</a>
                      <a class="phone" href="tel:+77232996114">+7 (7212) 99 61 14</a>
                  </div>
                </div>
                </div>
          </div>

        <div class="row text-center services-1">

          <div class="col-sm-4">
            <div class="col-wrapper">
              <div class="item">
                  <div class="title red-title"><h3 class="gray">ДЕПАРТАМЕНТ ИСПОЛНЕНИЯ ДОГОВОРОВ:</h3> </div>
                <div class="people">
                    <span>Айнура</span> <span class="lastname">ДУЙСЕНБЕКОВА</span>
                </div> <a href="mailto:mlb@qwmo.net">mlb@qwmo.net </a>
                  <a class="phone" href="tel:+7 708 436 80 55">+7 708 436 80 55</a>
                  <a class="phone" href="tel:+77212368055">+7 (7212) 36 80 55</a>
                  <div class="people">
                    <span>Анастасия</span> <span class="lastname">ГРОМЫКО</span>
                  </div>
                  <a href="mailto:mla@qwmo.net">mla@qwmo.net</a>
                  <a class="phone" href="tel:+7 771 705 18 13">+7 771 705 18 13</a>
              </div>
              <div class="item">
                  <div class="title red-title">
                      <h3 class="gray boss">Официальный представитель компании в государственных органах</h3>
                  </div>
                  <div class="people">
                    <span>Римма Рахметуллаевна </span><sapn class="lastname">ОСПАНОВА</sapn>
                  </div>
                  <a href="mailto:rg@qwmo.net">rg@qwmo.net</a>
                  <a class="phone" href="tel:+77212996817">+7 (7212) 99 68 17</a>
                  <a class="phone" href="tel:+77084361561">+7 708 436 15 61</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4" style="margin-top: -150px;">
            <div class="col-wrapper">
              <div class="item">
                  <div class="title red-title"><h3 class="gray">ЮРИДИЧЕСКИЙ ДЕПАРТАМЕНТ: </h3></div>
                  <div class="purpule boss">
                     Юрист по заключению договоров (после согласования коммерческого предложения)
                 </div>
                 <div class="people">
                   <span>Первана</span> <span class="lastname">ВАЛИЕВА</span>
                 </div>
                 <a href="mailto:ld@qwmo.net">ld@qwmo.net</a>
                 <a class="phone" href="tel:+77084397069">+7 708 439 70 69</a>
                 <a class="phone" href="tel:+77212996530">+7 (7212) 99 65 30</a>
                 <div class="purpule boss">Юрист</div>
                 <div class="people">
                   <span>Жазира</span> <span class="lastname">НУРЛАНОВА</span>
                 </div>
                  <a href="mailto:lda@qwmo.net">lda@qwmo.net</a>
             </div>
             <div class="item">
                 <div class="title red-title"><h3 class="gray">ДЕПАРТАМЕНТ ЭКОЛОГИИ:</h3></div>

                 <div class="purpule boss">Руководитель, зам. директора по экологии</div>
                 <div class="people">
                   Юрий <span class="lastname">ШЕДРИКС</span>
                 </div>
                  <a href="mailto:de@qwmo.net">de@qwmo.net</a>
                 <div class="purpule boss">Специалист</div>
               <div class="people">
                 <span>Зинаида Николаевна </span><span class="lastname">ТАРАСОВА</span>
               </div>
                 <a href="mailto:eco@qwmo.net">eco@qwmo.net</a>
                 <a class="phone" href="tel:+77212996817">+7 (7212) 99 68 17</a>
                 <a class="phone" href="tel:+77084361561">+7 708 436 15 61</a>

             </div>
            </div>
          </div>
          <div class="col-sm-4" style="margin-top: -170px;">
            <div class="col-wrapper">
              <div class="item">
               <div class="title red-title"><h3 class="gray">ПРИЕМНАЯ:</h3> </div>
               <div class="purpule boss">
                   Офис-менеджер
               </div>
               <div class="people">
                 Залина
               </div>
                 <a href="mailto:om@qwmo.net">om@qwmo.net</a>
               <table>
                   <tr>
                       <td>
                           <a class="phone"  href="tel:+7 (7212) 41 00 29">+7 (7212) 41 00 29</a>
                       </td>
                   </tr>
                   <tr>
                       <td>
                        <a class="phone"  href="tel:+77084395300">+7 708 439 53 00</a>
                    </td>
                </tr>
            </tr>
            </table>
            </div>
                <div class="item">
                    <div class="title red-title"><h3 class="gray">ДЕПАРТАМЕНТ HR:</h3> </div>
                    <div class="people">
                      Светлана Ивановна <span class="lastname">РОМАНЕНКО</span>
                    </div>
                    <a href="mailto:hr@qwmo.net">hr@qwmo.net</a>
                    <a class="phone" href="tel:+7 708 439 79 88">+7 708 439 79 88</a>
                    <a class="phone" href="tel:+77212996530">+7 7212 99 65 30</a>
                </div>
          </div>
          </div>
        </div>
        <div class="row text-center services-1">

          <div class="col-sm-12">
            <div class="col-wrapper">

            </div>
          </div>
        </div>
        <!-- /.services -->

  <div class="row text-center services-1">
    <div class="col-sm-12">
      <div class="col-wrapper">
  <div class="item press-cont">
<!-- <h3 class="gray boss">ПРЕСС-СЛУЖБА, ОТДЕЛ СПЕЦПРОЕКТОВ</h3> -->
   </div>
   </div>
   </div>
   </div>
   <div class="center">
            <div class="item">
              <h3 class="gray" style="text-align: center;">
                  ОФИЦИАЛЬНЫЕ ПРЕДСТАВИТЕЛЬСТВА
              </h3>
              <table class="city-table">
                  <tr>
                      <td>Нур-Султан </td>
                      <td><a class="phone" href="tel:8 775 081 08 06">8 775 081 08 06</a></td>
                  </tr>
                  <tr>
                      <td>Костанай </td>
                      <td><a class="phone" href="tel:8 705 450 29 41">8 705 450 29 41</a></td>
                  </tr>
                  <tr>
                      <td>Актобе</td>
                      <td><a class="phone" href="tel:8 707 041 41 80">8 707 041 41 80</a></td>
                  </tr>
                  <tr>
                      <td>Петропавловск</td>
                      <td><a href="tel:8 778 555 59 63" class="phone">8 778 555 59 63</a></td>
                  </tr>
                  <tr>
                      <td>Павлодар</td>
                      <td><a href="tel:8 701 520 61 11" class="phone">8 701 520 61 11</a></td>
                  </tr>
                  <tr>
                      <td>Экибастуз </td>
                      <td><a href="tel:8 701 921 11 71" class="phone">8 701 921 11 71</a></td>
                  </tr>
                  <tr>
                      <td>Кокшетау </td>
                      <td><a href="tel:8 771 817 99 27" class="phone">8 771 817 99 27</a></td>
                  </tr>
                  <tr>
                      <td>Алматы </td>
                      <td><a href="tel:8 777 245 97 34" class="phone">8 777 245 97 34</a></td>
                  </tr>
                  <tr>
                      <td>Тараз </td>
                      <td><a href="tel:8 777 117 54 82" class="phone">8 777 117 54 82</a></td>
                  </tr>
                  <tr>
                      <td>Талдыкорган </td>
                      <td><a href="tel:8 705 726 33 99" class="phone">8 705 726 33 99</a></td>
                  </tr>
                  <tr>
                      <td>Семей</td>
                      <td><a href="tel:8 747 743 16 11" class="phone">8 747 743 16 11</a></td>
                  </tr>
                  <tr>
                      <td>Кызылорда</td>
                      <td><a class="phone" href="tel:8 778 875 88 88">8 778 875 88 88</a></td>
                  </tr>
                  <tr>
                      <td>Усть-Каменогорск </td>
                      <td><a class="phone" href="tel:8 771 840 99 91">8 771 840 99 91</a></td>
                  </tr>
                  <tr>
                      <td>Балхаш</td>
                      <td><a class="phone" href="tel:8 776  296 01 51">8 776  296 01 51</a></td>
                  </tr>
                  <tr>
                      <td>Уральск</td>
                      <td><a class="phone" href="tel:8 705 450 29 41">8 705 450 29 41</a></td>
                  </tr>
                  <tr>
                      <td>Жезказган</td>
                      <td><a class="phone" href="tel:8 705 188 34 91">8 705 188 34 91</a></td>
                  </tr>
                  <tr>
                      <td>Шымкент   </td>
                      <td><a class="phone" href="tel:8 777 245 97 34">8 777 245 97 34</a></td>
                  </tr>

              </table>
              <div class="purpule note">
                  Договоры с заказчиками оформляются только
                  через центральный офис в Караганде:
              </div>

              <div class="purpule" style="text-align:center;">
                  100000, Казахстан, Караганда,
                  ул. Алиханова, 1, 3 этаж, каб. 312
              </div>
          </div>



      </div>
   <div class="sites_cont row text-center services-1">
       <h3 class="gray">Наши партнеры:</h3>
       <div class="sites_box">
        <div class="row">
           <div class="item">
               <div class="item_card">
                   <a target="_blank" href="https:/promothod.kz">
                       <img class=" lazyloaded" data-src="img/partners/pd.jpg" alt="promothod" src="img/partners/pd.jpg">
                       <br>
                       <span class="title">ТОО «Промотход Казахстан»</span>
                   </a>
                   <div class="text">
                       <span>Вид деятельности:</span>
                       <br>
                       <b>
                           <span>
                               ТОО «Промотход Казахстан» - научно-экспериментальная производственная компания по обращению с опасными отходами всех видов на территории Казахстана.
                           </span>
                       </b>
                   </div>
                   <div class="text">Адрес:
                       <br>
                       <span>
                           100000, Республика Казахстан, город Караганда, проспект Бухар Жырау, <br> дом 47, 1 этаж
                       </span>
                   </div>
                   <div class="text phone__text">
                       <div class="phone_left">
                           <img class="phone-ico" src="img/phone.png">
                       </div>
                       <div class="phone_right">
                          <span>Номера телефонов:</span>
                          <br>
                          <a class="phone" href="tel:+77212410029">+7 (7212) 41 00 29</a>
                      </div>

                  </div>
              </div>
          </div>
          <div class="item">
           <div class="item_card">
               <a class="text" target="_blank" href="https://kzsr.kz">
                   <img class=" lazyloaded" data-src="img/partners/4.jpg" alt="kzsr" src="img/partners/4.jpg">
                   <br>
                   <span class="title">ТОО «КазВторРесурс»</span>
               </a>
               <div class="text"><span><span>Вид деятельности:</span></span>
                   <br>
                   <b><span>Раздельный сбор отходов и их дальнейшая переработка.</span></b>
               </div>
               <div class="text"><span><span>Адрес:</span></span>
                   <br>
                   <span>Казахстан, г. Караганда, <br> ул. Механическая 1/1</span>
               </div>
               <div class="text phone__text">
                   <div class="phone_left">
                       <img class="phone-ico" src="img/phone.png">
                   </div>
                   <div class="phone_right">
                     <span>Номера телефонов:</span>
                     <br>
                     <a class="phone" href="tel:+7 775 265 42 13">+7 775 265 42 13</a>
                 </div>
             </div>
         </div>
     </div>
   <!--   <div class="item">
       <div class="item_card">
           <a target="_blank" href="https://qwmo.net">
               <img class=" lazyloaded" data-src="img/partners/111.jpg" alt="qwmo" src="img/partners/111.jpg">
               <br>
               <span class="title">ТОО «Казахстанский оператор по управлению отходами»</span>
           </a>
           <div class="text">
               <span>Вид деятельности:</span>
               <br>
               <b><span>Предоставление услуг по утилизации всех видов опасных отходов.</span></b>
           </div>
           <div class="text">
               <span>Адрес:</span>
               <br>
               <span>район Алматы,<br> шоссе Караганда-Астана, 3/6</span>
           </div>
           <div class="text phone__text">
               <div class="phone_left">
                   <img class="phone-ico" src="img/phone.png">
               </div>
               <div class="phone_right">
                   <span>Номера телефонов:</span>
                   <br>
                   <a class="phone" href="tel:+77750810806">+7 775 081 08 06</a></div>
               </div>
           </div>
       </div> -->
   </div>
   <div class="row">
       <div class="item">
          <div class="item_card">
           <a target="_blank" href="https://rpo.kz/">
               <img class=" lazyloaded" data-src="img/partners/8.jpg" alt="rpo" src="img/partners/8.jpg">
               <br>
               <span class="title">ТОО «Промотход Сервис»</span>
           </a>
           <div class="text">
               <span>Вид деятельности:</span>
               <br>
               <b><span>Производство контейнеров и емкостей различных объемов.</span></b>
           </div>
           <div class="text">
               <span>Адрес:</span>
               <br>
               <span>г. Караганда, ул. Алиханова д. 5,<br> офис 414</span>
           </div>
           <div class="text phone__text">
              <div class="phone_left">
               <img class="phone-ico" src="img/phone.png">
           </div>
           <div class="phone_right">
               <span>Номера телефонов:</span>
               <br>
               <a class="phone" href="tel:+7 7212 41 29 88">+7 7212 41 29 88</a>
               <br>
               <a class="phone" href="tel:+7 705 765 7788">+7 705 765 77 88</a>
           </div>
       </div>
   </div>
   </div>
   <div class="item">
       <div class="item_card">
          <a target="_blank" href="https://trrr.kz/">
           <img class=" lazyloaded" data-src="img/partners/3.jpg" alt="trrr" src="img/partners/3.jpg">
           <br>
           <span class="title">ТОО «RRR Technology»</span>
       </a>
       <div class="text">
           <span>Вид деятельности:</span>
           <br>
           <b><span>Сбор, транспортировка, переработка и отгрузка вторичного сырья.</span></b>
       </div>
       <div class="text">
           <span>Адрес:</span>
           <br>
           <span>Караганда, улица Механическая, <br> строение 1/1</span>
       </div>
       <div class="text phone__text">
          <div class="phone_left">
           <img class="phone-ico" src="img/phone.png">
       </div>
       <div class="phone_right">
           <span>Номера телефонов:</span>
           <br>
           <a class="phone" href="tel:+7 708 439 71 03">+7 708 439 71 03</a></div>
       </div>
   </div>
   </div>
   <div class="item">
       <div class="item_card">
           <a target="_blank">
               <img class=" lazyloaded" data-src="img/partners/2.jpg" alt="qwmo" src="img/partners/2.jpg">
               <br>
               <span class="title">ТОО «Waste Logistic»</span>
           </a>
           <div class="text">
               <span>Вид деятельности:</span>
               <br>
               <b><span> Транспортно-логистические услуги.</span></b>
           </div>
           <div class="text">
               <span>Адрес:</span>
               <br>
               <span>Караганда, улица Ушакова, 1а</span>
           </div>
           <div class="text phone__text">
              <div class="phone_left">
               <img class="phone-ico" src="img/phone.png">
           </div>
           <div class="phone_right">
               <span>Номера телефонов:</span>
               <br>
               <a class="phone" href="tel:+7 708 439 85 87">+7 708 439 85 87</a>
           </div>
       </div>
   </div>
   </div>
   </div>
   <div class="row">
       <div class="item">
           <div class="item_card">
            <a target="_blank">
               <img class=" lazyloaded" data-src="img/partners/9.jpg" alt="SmartWaste" src="img/partners/9.jpg">
           </a>
           <span class="title">ТОО «Smart Waste»</span>
           <div class="text">
               <span>Вид деятельности:</span>
               <br><b>Переработка и утилизация всех видов отходов.</b></div>
               <div class="text">
                   <span>Адрес:</span>
                   <br>
                   <span>Петропавловск, улица Медведева 41,<br> каб. 5</span>
               </div>
               <div class="text phone__text">
                  <div class="phone_left">
                   <img class="phone-ico" src="img/phone.png">
               </div>
               <div class="phone_right">
                   <span>Номера телефонов:</span>
                   <br>
                   <a class="phone" href="tel:+7 700 320 47 67">+7 700 320 47 67</a>
               </div>

           </div>
       </div>
   </div>
   <div class="item">
       <div class="item_card">
           <a target="_blank">
               <img class=" lazyloaded" data-src="img/partners/5.jpg" alt="qwmo" src="img/partners/5.jpg">
           </a>
           <span class="title">ТОО «Electronic Waste Recycling»</span>
           <div class="text">
               <span>Вид деятельности:</span>
               <br>
               <b><span>Утилизация компьютерной и оргтехники в государственных предприятиях.</span></b>
           </div>
       </div>
   </div>
   <div class="item">
       <div class="item_card">
           <a target="_blank" href="https://empls.biz">
               <img class=" lazyloaded" data-src="img/partners/6.jpg" alt="qwmo" src="img/partners/6.jpg">
               <br>
               <span class="title">
                   ТОО «ЭкоИмпульс»
               </span>
           </a>
           <div class="text">
               <span>Вид деятельности:</span>
               <br>
               <b><span>Прием плат и прочей электроники.</span></b>
           </div>
           <div class="text">
               <span>Адрес:</span>
               <br>
               <span>г. Караганда,ул. Молокова 100/7</span>
           </div>
           <div class="text phone__text">
              <div class="phone_left">
               <img class="phone-ico" src="img/phone.png">
           </div>
           <div class="phone_right">
            <span>
            Номера телефонов:</span>
            <br>
            <a class="phone" href="tel:+77012926898">+7 (701) 292 68 98</a>
        </div>

    </div>
   </div>
   </div>
   </div>
   <div class="row">
       <div class="item">
           <div class="item_card">
               <a target="_blank">
                   <img class=" lazyloaded" data-src="img/partners/7.jpg" alt="polymerwaste" src="img/partners/7.jpg">
                   <br>
               </a>
               <span class="title">
                   ТОО «Polymer Waste»
               </span>
               <div class="text">
                   <span>Вид деятельности:</span>
                   <br>
                   <b><span>Утилизация всех видов полимерных отходов.</span></b>
               </div>
           </div>
       </div>
       <div class="item">
           <div class="item_card">
            <a target="_blank">
             <img class=" lazyloaded" data-src="img/partners/0.jpg" alt="ТОО «Chemical Waste»" src="img/partners/0.jpg"><br>
         </a>
         <span class="title">
             ТОО «Chemical Waste»
         </span>
         <div class="text">
           <span>Вид деятельности:</span>
           <br>
           <b><span>Компания по переработке химических и ряда других опасных отходов.</span></b>
       </div>
       <div class="text">
           <span>Адрес:</span>
           <br>
           <span>
               Актобе, 030000, разъезд 41, дом 142
           </span>
       </div>
       <div class="text phone__text">
          <div class="phone_left">
           <img class="phone-ico" src="img/phone.png">
       </div>
       <div class="phone_right">
           <span>Номера телефонов:</span>
           <br>
           <a class="phone" href="tel:+77054502941">+7 705 450 29 41</a>
       </div>
   </div>
   </div>
   </div>
   <div class="item">
       <div class="item_card">
           <a target="_blank">
             <img class=" lazyloaded" data-src="img/partners/0.jpg" alt="ТОО «Chemical Waste»" src="img/partners/0.jpg">
             <br>
         </a>
         <span class="title">
             ТОО «EcoWaste Qazaqstan»
         </span>
         <div class="text">
           <span>Вид деятельности:</span>
           <br><b>Компания по переработке и утилизации отходов.</b></div>
           <div class="text">
               <span>Адрес:</span>
               <br>
               <span>141200, Экибастуз, бульвар Академика Марденова, 9 кв.2.<br>Территориально работает в Павлодарской области.</span>
           </div>
           <div class="text phone__text">
             <div class="phone_left">
               <img class="phone-ico" src="img/phone.png">
           </div>
           <div class="phone_right">
               <span>Номера телефонов:</span>
               <br>
               <a class="phone" href="tel:+77019211171">+7 701 921 11 71</a></div>
           </div>
       </div>
   </div>
   </div>
   <div class="row">
       <div class="item">
           <div class="item_card">
               <a target="_blank">
                 <img class=" lazyloaded" data-src="img/partners/0.jpg" alt="ТОО «Chemical Waste»" src="img/partners/0.jpg">
             </a>
             <span class="title">
                 ТОО «Waste Recycling Factory»
             </span>
             <div class="text">
               <span>Вид деятельности:</span>
               <br>
               <b><span>Компания по переработке и утилизации отходов.</span></b>
           </div>
           <div class="text">
               <span>Адрес:</span>
               <br>
               <span>Костанай, 110000, улица Байтурсынова, дом 67, офис 401. Территориально компания работает в Костанайской области.</span>
           </div>
           <div class="text phone__text">
             <div class="phone_left">
               <img class="phone-ico" src="img/phone.png">
           </div>
           <div class="phone_right">
               <span>Номера телефонов:</span>
               <br><a class="phone" href="tel:+77054502941">+7 705 450 29 41</a>
           </div>
       </div>
   </div>
   </div>
   <div class="item">
       <div class="item_card">
           <a target="_blank">
             <img class=" lazyloaded" data-src="img/partners/0.jpg" alt="ТОО «Chemical Waste»" src="img/partners/0.jpg"><br>
         </a>
         <span class="title">
             ТОО «Промотход Восток»
         </span>
         <div class="text">
           <span>Вид деятельности:</span>
           <br>
           <b><span>Компания по переработке и утилизации отходов.</span></b>
       </div>
       <div class="text">
           <span>Адрес:</span>
           <br>
           <span>
              Усть-Каменогорск, Новая Гавань, 6. <br> Территориально работает в Восточно-Казахстанской и прилегающих областях.
          </span>
      </div>
      <div class="text phone__text">
         <div class="phone_left">
           <img class="phone-ico" src="img/phone.png">
       </div>
       <div class="phone_right">
           <span>Номера телефонов:</span>
           <br>
           <a class="phone" href="tel:+77718409991">+7 771 840 99 91</a>
       </div>
   </div>
   </div>
   </div>
   <div class="item">
       <div class="item_card">
           <a target="_blank">
             <img class=" lazyloaded" data-src="img/partners/0.jpg" alt="ТОО «Chemical Waste»" src="img/partners/0.jpg"><br>
         </a>
         <span class="title">
             ТОО «ПромЭкоТехнология»
         </span>
         <div class="text">
           <span>Вид деятельности:</span>
           <br>
           <b>
               <span>
                   Проектно-экспертная компания в области охраны окружающей среды и экологии.
               </span>
           </b>
       </div>
       <div class="text">
           <span>Адрес:</span>
           <br>
           <span>Караганда, улица Алиханова, 8, нежилая постройка 1. Компания осуществляет свою деятельность на всей территории Казахстана.</span>
       </div>
       <div class="text phone__text">
         <div class="phone_left">
           <img class="phone-ico" src="img/phone.png">
       </div>
       <div class="phone_right">
           <span>Номера телефонов:</span>
           <br>
           <a class="phone" href="tel:+77212410029">+7 7212 41 00 29</a>
       </div>
   </div>
   </div>
   </div>
   </div>
   <div class="row">
       <div class="item">
           <div class="item_card">
            <a target="_blank">
             <img class=" lazyloaded" data-src="img/partners/0.jpg" alt="ТОО «Chemical Waste»" src="img/partners/0.jpg"><br>
         </a>
         <span class="title">
             ТОО «Промотход Development»
         </span>

         <div class="text">
           <span>Адрес:</span>
           <br>
           <span>Алматы, 050050, улица Полежаева, 92а, офис 208. Компания осуществляет свою деятельность в южных регионах Казахстана.</span>
       </div>
       <div class="text phone__text">
         <div class="phone_left">
           <img class="phone-ico" src="img/phone.png">
       </div>
       <div class="phone_right">
           <span>Номера телефонов:</span>
           <br>
           <a class="phone" href="tel:+77772459734">+7 777 245 97 34</a>
       </div>
   </div>
   </div>
   </div>
   </div>
   </div>
   <!-- </div>
   </div> -->

      </div>

      <!-- /.container -->

    </div>
  </div>
  <!-- /#home -->
        </div>
  <!-- /#contact -->
<?php include 'includes/footer.php'; ?>
</body>
</html>
