<!-- To fetch the header of the page  -->
<?php get_header();?>


<section class="page-wrap">

<div class="container">

   <h1><?php the_title();?></h1>

      <!--To include the folder and their file we use this function  -->
        <?php get_template_part('includes/section' , 'content');?>
</div>

</section>






<!-- To fetch the footer of the page  -->
<?php get_footer();?>





<!-- we can also used secondary header    -->
<!-- bygiving an argument to get_header('secondary') -->
