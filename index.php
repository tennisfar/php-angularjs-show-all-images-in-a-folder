<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type='text/javascript'>
    var images = {};
    <?php
        $all_images = glob("img/{*.jpg, *.JPG, *.JPEG, *.png, *.PNG}", GLOB_BRACE);
        $count = count($all_images);
        for ($i = 0; $i < $count; $i++) {
            echo "images[".$i."] = {};\n";
            echo
            "images[".$i."].image = '".$all_images[$i]."';\n";
            echo
            "images[".$i."].modified = '".date('YmdHis', filemtime($all_images[$i])).$i."';\n";
        }
        ?>
    </script>

</head>
<body>

<!-- Add your site or application content here -->
<p>JS object created from PHP.</p>

</body>
</html>
