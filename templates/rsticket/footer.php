    <div class="row">
	    <div class="twelve columns">
            This is footer
        </div>
    </div>
	<script>
        document.write('<script src=' +
        ('__proto__' in {} ? 'templates/<?php echo Template ?>/js/vendor/zepto' : 'js/vendor/jquery') +
        '.js><\/script>')
    </script>
  
  <script src="templates/<?php echo Template ?>/js/foundation.min.js"></script>
  <script src="templates/<?php echo Template ?>/js/foundation/foundation.reveal.js"></script>
  <script>
	  $(document).foundation();
  </script>

</body>
</html>