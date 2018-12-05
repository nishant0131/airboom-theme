<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo('title'); ?></title>
<link href="style.css" rel="stylesheet">
</head>
<body style="text-align:center; color:#112255; background: #d2d2d2" >
<h1><?php bloginfo('title'); ?></h1>
<h4><?php bloginfo('description'); ?></h1>

<p><?php while(have_posts())
        {
          the_post();
          the_title();
          the_content();
        }
          ?>

        </p>
<!-- <h1><?php bloginfo('title'); ?></h1>
<h3><?php bloginfo('description'); ?></h3>
<?php while (have_posts()) { the_post(); ?>
<h5><?php the_date(); ?></h5>
<h2>
<a href="index.php?p=<?php the_ID(); ?>">
<?php the_title(); ?>
</a>
</h2>
<?php the_content(); ?>
<hr/>
<?php } ?> -->
</body>
</html>
