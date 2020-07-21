

<!-- Main component for a primary marketing message or call to action -->
<div class="jumbotron">
  <?php
    foreach($questions as $question):
   ?>
	<div class="question">
		<div class="vote">
			<a class="up" href="#"><img class="resize" src="/images/voteup.png" alt="D:"></a>
			<br>
			<p class="count"><?php echo $question->Upvotes ?></p>

			<a class="down" href="#">
				<img  class="resize" src="/images/votedown.png"  alt="D:">
			</a>
		</div>
		<button type="button" class="x"> </button>
		<div class="qtitle">
				<h2><?php echo $question->Titel ?></h2>
		</div>
		<div class="q">

			<p class="qtext">
        <?php echo $question->Inhalt ?>

			</p>


		</div>
		<div class="tags">
			<a href="#">#example1</a> <a href="#">#example2</a>
		</div>
	</div>
  <?php
    endforeach
   ?>
</div>
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
