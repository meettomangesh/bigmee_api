  <div class="panel panel-success"> 
    <div class="panel-body">
     <div id="flash-news" class="owl-carousel news-slider owl-theme">    
    <?php foreach($broadcasted_news as $news): ?>
        <div class='panel panel-info'>
            <div class='panel-heading'>
                <h4><?= $news['news_title'] ?></h4>
            </div>
    
            <div class='panel-body'>
                <p><?= $news['news_content'] ?></p>
            </div>
            
        </div>
    <?php endforeach; ?>        
    </div>
    <div class="panel-footer text-center">
       <a href="javascript: void(0)" id="skipSpFlashNews" class="btn btn-info btn-sm">Don't show me again</a>
    </div>
  </div>
</div>
