
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="settitle">
          <form class=""  method="post" action="/newquestion/donewquestion">
            <input  maxlength="20" class="titleinput" type="text" name="settitle" placeholder="Your Question title:">
            <textarea class="questiontext" rows="25" cols="80" maxlength="2000" name="questiontext"></textarea>
            <br>
            <button class="postme"type="submit" name="postbutton">Post<span class="send"></span></button>

          </form>
        </div>
        <div class="newqtext">

        </div>


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
