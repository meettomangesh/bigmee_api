
		<section class="section-padding-bottom section-padding-top">
            <div class="container">
				<div class="row">
				    <div class="col-md-4 col-lg-3 col-sm-12 event-left-sidebar">
                    <h4>Events</h4>
                    <hr />
                    <ul class="nav nav-pills event-list nav-stacked left-menu" id="stacked-menu">
                         <?php foreach($event_list as $event): ?>
                         <li><a href="<?= link_url('pages/event-detail/'.$event['event_id']) ?>"><?= $event['event_title'] ?></a></li>
                         <?php endforeach; ?>
                      </ul>
                    </div>
                    <div class="col-md-8 col-lg-9 col-sm-12 event-main-content">
                        <div class="container-fluid">
                        <h3>All events</h3>
                        <?php foreach($event_list as $event): ?>
                            <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                               <div class="event">
                               <a href="<?= link_url('pages/event-detail/'.$event['event_id']) ?>">
                                <div class="eventsimg">
                                    <img src="<?= base_url('dist/img/event/'.$event['event_img']) ?>" alt="">
                                </div>
                                </a>
                                <div class="event-content">
                                    <a href="<?= link_url('pages/event-detail/'.$event['event_id']) ?>">
                                        <h5 class="title"><?= $event['event_title'] ?> </h5>
                                    </a>
                                    <p><?= shortText($event['event_detail']) ?> </p>
                                </div>
                            </div>
                            </div>
                       <?php endforeach; ?>     
                        </div>
                    </div>
                </div>
            </div>
        </section> 
       