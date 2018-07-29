
            <div class="col-lg-10 col-md-9 right-content-panel">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Downloads</h4>
                    </div>
                    <div class="panel-body">
                         <ul class="downloads">
                            <?php foreach($downloads as $download): ?>
                               <li><a href="javascript: void(0)" data-value="<?= $download['file_id'] ?>"><?= $download['link_name'] ?></a></li>
                            <?php endforeach; ?>
                         </ul>
                    </div>              
                  </div>
            </div>
        </div>
    </div>
</section>        