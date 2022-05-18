<?php 

$events = [
    [
        'title' => 'Nordic Proof Webinar and One2One',
        'date' => '26',
        'month' => 'April',
        'time' => '12:00 - 17:00',
        'location' => 'Hosted from Oslo, Norway'
    ],
    [
        'title' => 'Industry hybrid meeting in Stavanger, Norway',
        'date' => '10',
        'month' => 'June',
        'time' => '12:00 - 17:00',
        'location' => 'Online Webinar, Hosted from Oslo'
    ],
    [
        'title' => 'Nordic Proof can meet your clinical test needs',
        'date' => '12',
        'month' => 'January',
        'time' => '12:00 - 17:00',
        'location' => 'Online Webinar'
    ],
    [
        'title' => 'Breakfast meeting in Oulu, Finland',
        'date' => '19',
        'month' => 'January',
        'time' => '12:00 - 17:00',
        'location' => 'Oulu, Finland'
    ],
    [
        'title' => 'Nordic Proof shares test service capabilities through case stories',
        'date' => '25',
        'month' => 'February',
        'time' => '12:00 - 17:00',
        'location' => 'Hosted from Oslo, Norway'
    ]
    ];

    $partners = [
        [
            'image' => 'landspital.jpg',
            'url' => ''
        ],
        [
            'image' => 'swecare.jpg',
            'url' => 'https://www.swecare.se/en/ '
        ],
        [
            'image' => 'smile.png',
            'url' => 'https://www.smileincubator.life/'
        ],
        [
            'image' => 'stavanger-uh.jpg',
            'url' => 'https://trokit.com'
        ],
        [
            'image' => 'terkko.jpeg',
            'url' => 'https://trokit.com'
        ],
    ];

    $collaborations = [
        [
            'image' => 'landspital.jpg',
            'url' => ''
        ],
        [
            'image' => 'swecare.jpg',
            'url' => 'https://www.swecare.se/en/ '
        ],
        [
            'image' => 'smile.png',
            'url' => 'https://www.smileincubator.life/'
        ],
        [
            'image' => 'stavanger-uh.jpg',
            'url' => 'https://trokit.com'
        ],
        [
            'image' => 'terkko.jpeg',
            'url' => 'https://trokit.com'
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Link Swiper's CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Events</h1>
        <div class="bottom-border"></div>
        <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab facilis ullam eaque labore
            laborum debitis, commodi dolores itaque dolorem neque.</p>
        <div class="upcoming-events-wrapper">
            <!-- Swiper -->
            <div class="swiper">
                <div class="swiper-wrapper">

                    <?php foreach($events as $event){ ?>

                    <div class="swiper-slide">
                        <a href="#" style="color:inherit; text-decoration:none !important">
                            <div class="upcoming-event-box <?php echo $event['date'] == '10' ? 'is-upcoming' : '' ?>">

                                <?php if($event['date'] == '10'){ ?>
                                <!-- <span class="upcoming-label">Upcoming</span> -->
                                <?php } ?>
                                <div class="content">
                                    <div class="content-header">
                                        <span class="event-date"><?php echo $event['date']?></span>
                                        <span class="event-month"><?php echo $event['month']?></span>
                                    </div>

                                    <div class="content-body">
                                        <span class="event-title">
                                            <?php echo $event['title']?>
                                        </span>
                                        <span class="event-time"><?php echo $event['time']?></span>
                                        <span class="event-location"><?php echo $event['location']?></span>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <span class="section-divider" style="margin: 100px 0; display:block"></span>
        <div class="partners-wrapper">
            <h1 class="text-center">Our Partners</h1>
            <div class="bottom-border"></div>
            <p class="text-center">Our network offers easy access to the most renowned test facilities for health and
                wellbeing products and solutions in the Nordics.</p>
            <div class="partners-slider-wrapper">

                <!-- Swiper -->
                <!-- Swiper -->
                <div class="partners-swiper swiper">
                    <div class="swiper-wrapper">

                        <?php foreach($partners as $partner){ ?>

                        <div class="swiper-slide">
                            <a href="<?php echo $partner['url'] != '' ? $partner['url']: '#';?>"
                                style="color:inherit; text-decoration:none !important">
                                <div class="partner-box">
                                    <img src="./partners/<?php echo $partner['image']; ?>" alt="">
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>

                </div>
                <!-- Swiper -->
                <div class="partners-button-next custom-slider-button-next"><img src="./chevron.svg" alt=""
                        class="slider-button"></div>
                <div class="partners-button-prev custom-slider-button-prev"><img src="./chevron.svg" alt=""
                        class="slider-button"></div>
            </div>
        </div>
        <span class="section-divider" style="margin: 100px 0; display:block"></span>
        <div class="partners-wrapper">
            <h1 class="text-center">Collaboration Network</h1>
            <div class="bottom-border"></div>
            <p class="text-center">Our network offers easy access to the most renowned test facilities for health and
                wellbeing products and solutions in the Nordics.</p>
            <div class="collaborations-slider-wrapper">

                <!-- Swiper -->
                <!-- Swiper -->
                <div class="collaborations-swiper swiper">
                    <div class="swiper-wrapper">

                        <?php foreach($collaborations as $collaboration){ ?>

                        <div class="swiper-slide">
                            <a href="<?php echo $collaboration['url'] != '' ? $collaboration['url']: '#';?>"
                                style="color:inherit; text-decoration:none !important">
                                <div class="partner-box">
                                    <img src="./partners/<?php echo $collaboration['image']; ?>" alt="">
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>

                </div>
                <!-- Swiper -->
                <div class="collaborations-button-next custom-slider-button-next"><img src="./chevron.svg" alt=""
                        class="slider-button"></div>
                <div class="collaborations-button-prev custom-slider-button-prev"><img src="./chevron.svg" alt=""
                        class="slider-button"></div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>



    <script>
    const swiper = new Swiper('.upcoming-events-wrapper .swiper', {
        slidesPerView: 4,
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10,
                
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            760: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            990: {
                slidesPerView: 4,
                spaceBetween: 30
            }
        }
    });
    const partnerSlider = new Swiper('.partners-swiper', {
        slidesPerView: 4,
        spaceBetween: 30,
        // centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".partners-button-next",
            prevEl: ".partners-button-prev",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            760: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            990: {
                slidesPerView: 4,
                spaceBetween: 30
            }
        }
    });

    const collaborationSlider = new Swiper('.collaborations-swiper', {
        slidesPerView: 4,
        spaceBetween: 30,
        // centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 4000,
        },
        navigation: {
            nextEl: ".collaborations-button-next",
            prevEl: ".collaborations-button-prev",
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            760: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            990: {
                slidesPerView: 4,
                spaceBetween: 30
            }
        }
    });
    </script>
</body>

</html>