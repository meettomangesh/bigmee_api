
		<section class="section-padding-bottom">
            <div class="container">
				<div class="row">
				    <div class="col-md-4 col-lg-3 col-sm-12 event-left-sidebar">
                    <h4>Events</h4>
                    <hr />
                      <ul class="nav nav-pills event-list nav-stacked left-menu" id="stacked-menu">
                         <?php foreach($event_list as $events): ?>
                         <li><a href="<?= link_url('pages/event-detail/'.$events['event_id']) ?>"><?= $events['event_title'] ?></a></li>
                         <?php endforeach; ?>
                      </ul>
                    </div>
                    <div class="col-md-8 col-lg-9 col-sm-12 event-main-content">
                        <div class="container-fluid">
                        <!--Event Detail  -->
                                        <section class="event-detail">
                                            <h4 class="main-title "><?= $event->event_title ?></h4>
                                            <!-- meta -->
                                            <ul class="meta clearfix">
                                                <li class="date"><i class="icon fa fa-calendar"></i> <?= formateDate($event->event_date) ?></li>
                                                <li><i class="icon fa fa-home"></i> <?= $event->event_addr ?></li>
                                                <li><i class="icon fa fa-map-marker"></i><?= $event->event_place ?></li>
                                            </ul>
                                            <!-- event-detail-img -->
                                            <div class="event-detail-img col-md-12">
                                                <div id="event-gallary" class="owl-carousel eventimg-slider owl-theme">
                                                <?php foreach($event_gallery as $gallery): ?>
                        						  <img src="<?= base_url('dist/img/event/alt/'.$gallery['egallery_img']) ?>">
                                                <?php endforeach; ?>
                                                </div>
                                            </div>
                        
                                            <h3 class="title">About Event</h3>
                                            <p><?= $event->event_detail ?></p>
                                            </section>
                             </div>
                         </div>
                    </div>
                 </div>
               </section>                         