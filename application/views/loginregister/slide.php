<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Slideshow</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="slideshowContainer">
  
<!-- Replace the image 'src' with the images in your project.
Javascript is set up so that you can add as many images as you like, but make sure that you match the number of 'circle' span elements (below) to the number of images -->
  <img class="imageSlides" src="http://s1.picswalls.com/wallpapers/2015/09/20/beautiful-hd-wallpaper-2015_111526537_269.jpg" alt="beach side city view">
  <img class="imageSlides" src="http://4.bp.blogspot.com/-oxlezteeOII/TfiTImj4RlI/AAAAAAAAA1k/UAgctmU5VZo/s1600/Widescreen+Unique+And+Beautiful+Photography+%25284%2529.jpg" alt="leaf on the ground">
  <img class="imageSlides" src="https://i.pinimg.com/originals/cf/ed/a0/cfeda03d01da4b779093c9d928c01dee.jpg" alt="lake surrounded by mountains">
  
<!-- I would recommend to replace these 'span' elements with 'img' files
for each the left and right arrow that fits your project, and size accordingly.
I've shown 'span' elements because I didn't want to upload files. -->
  <span id ="leftArrow" class="slideshowArrow">&#8249;</span>
  <span id ="rightArrow" class="slideshowArrow">&#8250;</span>
  
  <div class="slideshowCircles">
<!-- Filled 'dot' class is set to first image in slideshow, and then via Javascript the filled 'dot' class follows the current image.
Make sure you match the number of these 'circle' span elements to the number of images in your slideshow. -->
    <span class="circle dot"></span>
    <span class="circle"></span>
    <span class="circle"></span>
  </div>
  
</div>
<!-- partial -->
  <script  src="<?php echo base_url(); ?>assets/js/script.js"></script>

</body>
</html>
