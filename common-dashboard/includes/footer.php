<script>
  $(document).ready(function () {
    //jquery for toggle sub menus
    $('.sub-btn').click(function () {
      $(this).next('.sub-menu').toggleClass('showMenu');
      $(this).find('.dropdown').toggleClass('rotate');
    });

    // highlight link on click

    $('.menu-link').click(function () {
      $('.menu-link').removeClass('active');
      $('.sub-btn').removeClass('sub-active');
      $('.menu-link').removeClass('sub-active');
      $('.sub-item').removeClass('active');
      $('.sub-menu').removeClass('showMenu');
      $(this).addClass('active');
    });
    $('.sub-item').click(function () {
      $('.sub-item').removeClass('active')
      $('.drop-menu').removeClass('sub-active');
      $('.sub-menu').removeClass('showMenu');
      $(this).parent().addClass('showMenu');

      $(this).addClass('active');
      $(this).parent().siblings().addClass('sub-active');
      $('.menu-link').removeClass('active');
    });
    var path = window.location.pathname.split("/").pop();
    if(path == ''){
      path = 'index.php';
    }
    var target = $('.sidebar-menu ul li a[href="'+path+'"]');
    target.addClass('active');

    var sublink = $('.sidebar-menu ul li .sub-menu .sub-item a[href="'+path+'"]');
    sublink.addClass('active');

    if(target.hasClass('active')){
      if(target.hasClass('sub-item')){
        target.parent().addClass('showMenu');
      if(target.parent().hasClass('sub-menu')){
        target.parent().siblings().addClass('sub-active');
      }
      }
    }

  });
</script>
</main>


</div>
</div>
</body>

</html>