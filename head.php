<head>
    <?php
    $w_base_url = "http://localhost:1347";
    $w_public_url = "http://145.79.13.109:1347";
    $w_context = stream_context_create(array(
        'http' => array('ignore_errors' => true),
    ));
    $data = file_get_contents($w_base_url . "/api/website?populate[0]=socialMedia.icon&populate[1]=whatsapp&populate[2]=sites.icon&populate[3]=media.video&populate[4]=media.image&populate[5]=media.slider&populate[6]=media.image.icon&populate[7]=logo", false, $w_context);
    $data = json_decode($data)?->data;
    $w_name = $data?->name;
    $w_address = $data?->address;
    $w_whatsapp = $data?->whatsapp;
    $w_email = $data?->email;
    $w_social_media = $data?->socialMedia;
    $w_sites = $data?->sites;
    $w_media = $data?->media;
    $w_logo = $data?->logo;
    ?>
    <title><?= $w_name ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <style>
        #myTable {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 14px;
        }

        #myTable th,
        #myTable td {
            text-align: left;
            padding: 10px;
        }

        #myTable tr {
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header,
        #myTable tr:hover {
            background-color: #f1f1f1;
        }
    </style>
    <!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>