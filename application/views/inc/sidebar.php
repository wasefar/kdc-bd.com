<aside  class="side-bar">  
        <!-- 2. RECENT POSTS -->
        <div class="widget bg-white  recent-posts-entry">
            <div class="section-content">
                <div class="wt-tabs tabs-default border">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#services">Services</a></li>
                        <li><a data-toggle="tab" href="#projects">Projects</a></li>
                    </ul>
                    <div class="tab-content">



                        <div id="services" class="tab-pane active">
                            <div class="widget-post-bx">

                               <?php foreach($services as $srv){?>
                                <div class="widget-post clearfix bg-gray">
                                    <div class="wt-post-media">
                                        <img src="<?php echo base_url($srv['thumb']);?>" alt=""  class="radius-bx-">
                                    </div>
                                    <div class="wt-post-info">
                                        <div class="wt-post-header">
                                            <h6 class="post-title"><?php echo $srv['title'];?></h6>
                                        </div>
<!--
                                        <div class="wt-post-meta">
                                            <ul>
                                                <li class="post-author">25 Dec</li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> 10 comment</li>
                                            </ul>
                                        </div>
-->
                                    </div>
                                </div>
                                <?php }?>



                            </div>
                        </div>

                        <div id="projects" class="tab-pane">
                            <div class="widget-post-bx">

                               <?php foreach($projects as $pro){?>
                                <div class="widget-post clearfix bg-gray">
                                    <div class="wt-post-media">
                                        <img src="<?php echo base_url($pro['thumb']);?>"  alt="" class="radius-bx-">
                                    </div>
                                    <div class="wt-post-info">
                                        <div class="wt-post-header">
                                            <h6 class="post-title"><?php echo $pro['title'];?></h6>
                                        </div>
<!--
                                        <div class="wt-post-meta">
                                            <ul>
                                                <li class="post-author">25 Dec</li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> 20comment</li>
                                            </ul>
                                        </div>
-->
                                    </div>
                                </div>
                                <?php }?>




                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



   </aside>