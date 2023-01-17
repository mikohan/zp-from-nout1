<?php

$tmp = get_image($data[0][0][6]);
//p($tmp);
?>
<div class="thumbnail b1c-good ang-prod-img">
  <div class="lable lable-primary">
    <a class="label label-primary" href="javascript:history.back(1)"> &lt;&lt; назад</a>
    <div class="yashare-auto-init pull-right" data-yashareL10n="ru" data-yashareType="small"
      data-yashareQuickServices="vkontakte,facebook,twitter,gplus" data-yashareTheme="counter"></div>
  </div>

  <div itemscope itemtype="https://schema.org/Product">
    <div class="row">
      <div class="col-xs-12 col-sm-12 ">
        <div itemprop="url" class="a-text">
          <div itemprop="name">
            <h1 id="ang-prod-h1" class="text-center ang-prod-price b1c-name">
              <?= $h1 ?>
            </h1>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 ">
        <a href="/public/img/parts/<?= get_image($data[0][0][6]) ?>" data-fancybox>
          <img itemprop="image" id="ang-prod-img" class="img-responsive img-thumbnail "
            src="/public/img/parts/<?= get_image($data[0][0][6]) ?>" alt="<?= trim($data[0][0][1]) ?>"
            title="<?= trim($data[0][0][1]) ?>">
        </a>
      </div>

      <div class="col-sm-6 prod-price-padd">
        <div class="alert alert-success" role="alert"><strong>Гарантия:</strong> Если запчасть не понадобилась или не
          подошла, мы вернем деньги!</div>
        <div class="row row-color">
          <div class="col-xs-4" itemprop="brand" itemscope itemtype="https://schema.org/Organization">
            <small><span itemprop="name">ООО "Хендай Портер" запчасти </span></small>
          </div>
          <div class="col-xs-8" itemprop="manufacturer" itemscope itemtype="https://schema.org/Organization">
            <small><span class="proizvoditel">Производитель: <span itemprop="name">Ю. Корея</span></span></small>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <h2 class="main-h2">Каталожный номер: <?= $data[0][0][3] ?>
            </h2>
            <?php if (isset($data7[0]) or isset($data8[0])) {
            ?>
            <br>
            <div style="display:flex;font-size:120%">
              Смотреть на схеме:
            </div>
            <ul>
              <?php

              if (isset($data7[0])) {
                $c = count($data7) - 1; ?>
              <li>Портер 1
                <ul>
                  <?php foreach ($data7 as $key => $value): ?>
                  <?php if ($key == $c): ?>

                  <?php else: ?>
                  <?php $arr = explode('`,`', $value); ?>
                  <li><a href="/catalog/<?= $arr[0] ?>/"><?= $arr[1] ?></a></li>
                  <?php endif ?>
                  <?php endforeach ?>
                </ul>
              </li>
              <?php

              }

              if (isset($data8[1])) {
                $c = count($data8) - 1; ?>
              <li>Портер 2
                <ul>
                  <?php
                foreach ($data8 as $key => $value) {
                  if ($key == $c) {
                  } else {
                    $arr = explode('`,`', $value); ?>

                  <li><a onclick="document.form.submit(); return false;" href="/catalog2/<?= $arr[0] ?>/"><?= $arr[1] ?></a></li>
                  <!-- <form action="/catalog2/<?= $arr[0] ?>/" method="post">
                    <input type="hidden" name="article" value="<?= $data[0][0][6] ?>">
                    <li><button type="submit" value="<?= $arr[1] ?>"
                        style="color:#337ab7;border:0px;background-color:white;text-align:left"><i
                          class="fa fa-book"></i> [<?= $arr[1] ?>]</button></li>
                  </form> -->

                  <?php }
                } ?>
                </ul>
              </li>
              <?php
              }
              ?>
            </ul>
            <?php } ?>

          </div>
        </div>
        <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
          <span class=" ang-prod-price">Цена: </span><span itemprop="price"
            class="text-justify ang-prod-price b1c-price">
            <?= $data[0][0][4] ?> руб.
          </span>
          <meta itemprop="priceCurrency" content="RUB" />
          <link itemprop="itemCondition" href="https://schema.org/NewCondition" />
          <!-- <small class="small-new" >Новый</small> -->
        </div>
        <button type="button" class="btn btn-success ang-byu-oneclick b1c" id="b1_click_ga">Заказать
          консультацию</button>
        <a href="/contacts/" class="btn btn-success ang-byu-oneclick">Посмотреть контакты</a>
        <?php if ($data[1]): ?>
        <div class="cheap-good">
          <h5 class="red-mon"><i class="fa fa-money"></i> &nbsp; &nbsp; Внимание! Есть бюджетные аналоги</h5>
          <hr>
          <?php foreach ($data[1] as $ch): ?>
          <?php preg_match('/^([\w\d\]+[\s]+)/ui', $ch[1], $match); ?>
          <a href="/part/<?= $ch[6] ?>/<?= str2url($ch[1]) ?>/">
            <p>
              <?= make_h1($ch[1])['h1'] ?>&nbsp; <b class="pull-right red-mon">
                <?= $ch[4] ?> руб
              </b>
            </p>
          </a>
          <hr>
          <?php endforeach ?>
        </div>
        <?php endif ?>
      </div>
    </div>
    <!-- Проверка есть ли видео, если есть показываем -->
    <?php if (!empty($data6)): ?>
    <div class="row">
      <div class="col-md-12">
        <div class="ang-dostavka">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $data6[0]['link'] ?>?rel=0"
              allowfullscreen>
            </iframe>
          </div>
        </div>
      </div>
    </div>
    <?php endif ?>
    <div class="row">
      <div class="col-sm-12">

        <div class="ang-dostavka">

          <div class="well">
            <h3>Информация о доставке:</h3>
            <ul>
              <li>Если запчасть нужна срочно, приезжайте с <?= WORK_FROM_DAYS ?> утра до <?= WORK_TO_DAYS ?> вечера по
                будням. С <?= WORK_FROM_WEEKENDS ?> утра до <?= WORK_TO_WEEKENDS ?> вечера по выходным. Все, кто
                приезжает сам, получают подарки.</li>
              <li>Доставка по Москве, при покупке на сумму от <?= DOSTAVKA ?> рублей - бесплатно.</li>
              <li>Если сумма заказа меньше <?= DOSTAVKA ?> рублей, доставка <?= DOSTAVKA_COST ?> рублей.</li>
              <li>Клиентам из регионов, доставка примерно 500 рублей.<a href="/delivery/"> Подробнее здесь...</a></li>

            </ul>
          </div>
        </div>
        <div class="caption-full">
          <?php if ($data[0][0][10]): ?>
          <h4>Описание товара</h4>
          <p>
            <span itemprop="description">
              <?= $data[0][0][10] ?>
            </span>
            <?php endif ?>
        </div>
      </div>
    </div>
  </div>
</div>
<script async type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script>