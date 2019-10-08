<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],

    'page_title' => 'Modalmall',
    'page_desc' => 'ModalMall - интернет магазин качественных трикотажных, насочно-чулочных изделий и белья. Доставка по всей России',
    'page_keywords' => 'магазин одежды, детская одежда, женская одежда, мужская одежда',
    'page_img' => 'https://modalmall.ru/img/logo.png',
    'page_url' => 'https://modalmall.ru',

    'product_categories' => [
        1 => 'Мужское',
        2 => 'Женское'
    ],
    'product_sex' => [
        1 => 'Мужское',
        2 => 'Женское'
    ],
    'pagination' => 20,

    'images_type' => [
        'product' => 1,
        'post' => 2,
        'category' => 3,
    ],
    'brands' => [
        1 => 'JOHN FRANK',
        2 => 'DOREA',
    ],
    'producers' => [
        1 => 'Турция',
        'Россия',
        'Польша',
        'Украина'
    ],
    'units' => [
        1 => 'шт',
        2 => 'пар.',
        3 => 'упак.'
    ],
    'sizes' => [
        1 => 'S',
        'M',
        'L',
        'XL',
        'XXL',
        '3XL',
        '4XL',
    ],
    'posts_type' => [
        1 => 'Странички',
        2 => 'Новости и акции',
        3 => 'Видео',
        4 => 'Сервис',
    ],
    'colors' => [
        1 => 'белый',
        'красный',
        'розовый',
        'персиковый',
        'лососевый',
        'пудровый',
        'бордовый',
        'темно-розовый',
        'оранжевый',
        'желтый',
        'голубой',
        'синий',
        'темно-синий',
        'фиолетовый',
        'фуксия',
        'индиго',
        'кремовый',
        'бежевый',
        'телесный',
        'песочный',
        'коричневый',
        'горчичный',
        'каштановый',
        'черный',
        'серый',
        'серый меланж',
        'темно-серый',
        'светло-серый',
        'антрацит',
        'хаки',
        'салатовый',
        'зеленый',
        'ментол',
        'мятный',
        'бирюзовый',
        'темно-синий',
        'серо-голубой',
        'темно-оливковый'
    ],
    'menu_type' => [
        1 => 'Вверхнее меню с иконками',
        2 => 'Навигация',
        3 => 'Нижнее меню с иконками',
    ],
    'order_status' => [
        0 => 'Обрабатывается',
        1 => 'Отправлено',
        2 => 'Заказ отменен',
        3 => 'Завершено',
        4 => 'Отменено'
    ],
    'delivery_type' => [
        1 => 'Почта России',
        'СДЭК',
        'Курьер',
    ],
    'product_status' => [
        0 => 'Черновик',
        1 => 'Активный',
        2 => 'Не обработано'
    ],
    'cities' => [
        1 => 'Абакан',
        'Архангельск',
        'Астрахань',
        'Барнаул',
        'Белгород',
        'Биробиджан',
        'Благовещенск, Амурская область',
        'Брянск',
        'Великий Новгород',
        'Владивосток',
        'Владикавказ',
        'Владимир',
        'Волгоград',
        'Вологда',
        'Воронеж',
        'Горно-Алтайск',
        'Грозный',
        'Екатеринбург',
        'Иваново',
        'Ижевск',
        'Иркутск',
        'Йошкар-Ола',
        'Казань',
        'Калининград',
        'Калуга',
        'Кемерово',
        'Киров',
        'Кострома',
        'Краснодар',
        'Красноярск',
        'Курган',
        'Курск',
        'Кызыл',
        'Липецк',
        'Магадан',
        'Магас, Ингушетия респ.',
        'Майкоп',
        'Махачкала',
        'Москва',
        'Мурманск',
        'Нальчик',
        'Нарьян-Мар',
        'Нижний Новгород',
        'Новосибирск',
        'Омск',
        'Орел',
        'Оренбург',
        'Пенза',
        'Пермь',
        'Петрозаводск',
        'Петропавловск-Камчатский',
        'Псков',
        'Ростов-на-Дону',
        'Рязань',
        'Салехард',
        'Самара',
        'Санкт-Петербург',
        'Саранск',
        'Саратов',
        'Севастополь',
        'Смоленск',
        'Ставрополь',
        'Сыктывкар',
        'Тамбов',
        'Тверь',
        'Томск',
        'Тула',
        'Тюмень',
        'Улан-Удэ',
        'Ульяновск',
        'Уфа',
        'Хабаровск',
        'Ханты-Мансийск',
        'Чебоксары',
        'Челябинск',
        'Черкесск',
        'Чита',
        'Элиста',
        'Южно-Сахалинск',
        'Якутск',
        'Ярославль',
    ]
];
