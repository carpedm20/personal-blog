<div class="post">
   <h2>About</h2>
   <br>
   <div class="about">
   <?
      use \Michelf\Markdown;
      $content = Markdown::defaultTransform(file_get_contents(config('views.root').'/me.md'));
      echo $content;
   ?>
   </div>
</div>
