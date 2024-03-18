<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Detail</title>
    <style>
        /* Your CSS styles here */
        .courses-list-item img {
            height: 300px;
            object-fit: cover;
            object-position: center;
        }

        .accordian-detail {
            border-radius: 4px;
            margin-bottom: .4rem;
            overflow: clip;
        }

        .accordian-detail>summary {
            padding: 1rem;
            background-color: #f8c311;
            color: #fff;
            font-weight: bold;
        }

        .accordian-detail .accord-item {
            background: #eee;
            padding: .5rem 1rem;
        }

        .accordian-detail .accord-item li:not(:last-child) {
            margin-bottom: .4rem;
        }

        .accordian-detail .accord-item li::marker {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <!-- Header Start -->
    <div class="program-detail-bg position-relative overlay-bottom main-section" style="margin-bottom: 40px;">
        <div class="container position-relative py-5">
            <div class="py-5 text-center text-md-left">
                <h1 class="text-white display-3 mb-5">Program Detail</h1>
                <div class="d-inline-flex text-white mb-5">
                    <p class="m-0 text-uppercase">
                        <a class="text-secondary" href="<?= base_url() ?>">Home</a>
                    </p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Program Detail</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Detail Start -->
    <?php foreach ($detail_view as $row) : ?>
        <?php
        $id = $row->id;
        ?>

        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="mb-5">
                            <div class="section-title position-relative mb-5">
                                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Course Detail</h6>
                                <h2 class="display-4"><?= $row->course_name ?></h2>
                            </div>
                            <img class="img-fluid rounded w-100 mb-4" src="<?= base_url() ?>public/web/img/header.jpg" alt="Image">
                            <p><?= $row->description ?></p>
                            <p><?= $row->long_description ?></p>

                            <h4>Program Content</h4>
                            <?php
                            $offlineBasic_topic = $this->topic_model->offlineBasic_topic($row->id);
                            foreach ($offlineBasic_topic as $row2) { ?>
                            
                            <details class="accordian-detail">
                                    <summary><?= $row2->topic_name ?></summary>
                                    <?php
                                        $sid = $row->id;
                                        $tp_id = $row2->id;
                                        $cur_dtl = $this->curriculum_model->curriculum($sid, $tp_id);
                                        foreach ($cur_dtl as $row3) { ?>
                                    <div class="accord-item">
                                    
                                        <ul>
                                            <li><?= $row3->sub_topic_name ?></li>
                                        </ul>
                                    </div>
                                    <?php } ?>
                                </details>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-5 mt-lg-0">
                        <div class="sticky-top">
                            <div class="bg-primary mb-5 py-3">
                                <h3 class="text-dark py-3 px-4 m-0">Program Features</h3>
                                <div class="d-flex justify-content-between border-bottom px-4">
                                    <h6 class="text-dark my-3">Programme Fee</h6>
                                    <h6 class="text-dark my-3">$ <?= $row->price ?></h6>
                                </div>
                                <div class="d-flex justify-content-between border-bottom px-4">
                                    <h6 class="text-dark my-3">Duration</h6>
                                    <h6 class="text-dark my-3"><?= $row->duration ?> hrs</h6>
                                </div>
                                <div class="d-flex justify-content-between border-bottom px-4">
                                    <h6 class="text-dark my-3">Mode</h6>
                                    <h6 class="text-dark my-3"><?= $row->mode ?></h6>
                                </div>
                                <div class="d-flex justify-content-between border-bottom px-4">
                                    <h6 class="text-dark my-3">Language</h6>
                                    <h6 class="text-dark my-3"><?= $row->language ?></h6>
                                </div>
                                <div class="d-flex justify-content-between border-bottom px-4">
                                    <h6 class="text-dark my-3">Certificate</h6>
                                    <h6 class="text-dark my-3">Yes</h6>
                                </div>
                                <h5 class="text-dark py-3 px-4 m-0">Total Price: $ <?= $row->price ?></h5>
                                <div class="py-3 px-4">
                                    <a class="btn btn-block btn-secondary py-3 px-5" href="">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- Detail End -->

    <!-- Related Programs Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="mb-3">Related Programs</h2>
                    <div class="owl-carousel related-carousel position-relative" style="padding: 0 20px;">
                        <?php for ($i = 0; $i < 6; $i++) { ?>
                            <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="<?= base_url() ?>detail">
                                <img class="img-fluid" src="<?= base_url() ?>public/web/img/program1.jpg" alt="">
                                <div class="courses-text">
                                    <h4 class="text-center text-white px-3">Intermediate Program</h4>
                                    <div class="border-top w-100 mt-3">
                                        <div class="d-flex justify-content-between p-4">
                                            <span class="text-white"><i class="fa fa-user mr-2"></i>Live Classes</span>
                                            <span class="text-white"><i class="fa-solid fa-clock mr-2"></i>20hrs</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Related Programs End -->

</body>

</html>
