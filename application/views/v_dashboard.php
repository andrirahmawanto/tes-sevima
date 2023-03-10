            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
              <!-- Start content -->
              <div class="content">
                <div class="container">


                  <div class="row">
                    <div class="col-xs-12">
                    </div>
                  </div>
                  <!-- end row -->

                  <div class="blog-list-wrapper m-t-10">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="p-20">
                          <?php foreach ($post as $rowdata) {?>
                          <!-- Image Post -->
                          <div class="blog-post m-b-30">
                            <div class="m-b-10">
                              <img src="<?php echo base_url() ?>assets/images/users/user-2.png" alt="user-img" class="img-circle user-img" height="35">
                              <span style="font-weight: bold; margin-left: 10px;"> <?= $rowdata->nama_pengguna ?></span>
                            </div>
                            <div class="post-image">
                              <img src="<?php echo base_url() ?>assets/upload_foto/<?= $rowdata->foto; ?>" alt="" class="img-responsive">
                            </div>
                            <div>
                              <img src="<?php echo base_url() ?>assets/images/heart.svg" height="35">
                              <img src="<?php echo base_url() ?>assets/images/comment.svg" height="35">
                              <img src="<?php echo base_url() ?>assets/images/share.svg" height="35">
                            </div>
                            <span><?= $rowdata->like ?> likes</span>
                            <div class="post-title">
                              <a href="javascript:void(0);"><?= $rowdata->nama_pengguna ?></a>
                            </div>
                            <div>
                              <p><?= $rowdata->isi ?></p>
                            </div>
                          </div>
                          <?php } ?>
                        </div>
                      </div> <!-- end col -->

                      <div class="col-sm-4">
                        <div class="p-20">
                          <div class="m-t-50">
                            <h4 class="text-uppercase">Suggestion For You</h4>
                            <div class="border m-b-20"></div>

                            <div class="media latest-post-item">
                              <div class="media-left">
                                <a href="#"> <img src="<?php echo base_url() ?>assets/images/users/user-2.png" alt="user-img" class="img-circle user-img" height="35"> </a>
                              </div>
                              <div class="media-body">
                                <h5 class="media-heading"><a href="#">Malinda Herlingga</a> </h5>
                                <p class="font-13">
                                  <a href=""> Follow </a>
                                </p>
                              </div>
                            </div>

                            <div class="media latest-post-item">
                              <div class="media-left">
                                <a href="#"> <img src="<?php echo base_url() ?>assets/images/users/user-2.png" alt="user-img" class="img-circle user-img" height="35"> </a>
                              </div>
                              <div class="media-body">
                                <h5 class="media-heading"><a href="#">Emran Aadhev J</a> </h5>
                                <p class="font-13">
                                  <a href=""> Follow </a>
                                </p>
                              </div>
                            </div>
                            <div class="media latest-post-item">
                              <div class="media-left">
                                <a href="#"> <img src="<?php echo base_url() ?>assets/images/users/user-2.png" alt="user-img" class="img-circle user-img" height="35"> </a>
                              </div>
                              <div class="media-body">
                                <h5 class="media-heading"><a href="#">Surya Ade</a> </h5>
                                <p class="font-13">
                                  <a href=""> Follow </a>
                                </p>
                              </div>
                            </div>
                            <div class="media latest-post-item">
                              <div class="media-left">
                                <a href="#"> <img src="<?php echo base_url() ?>assets/images/users/user-2.png" alt="user-img" class="img-circle user-img" height="35"> </a>
                              </div>
                              <div class="media-body">
                                <h5 class="media-heading"><a href="#">Nanda Yana</a> </h5>
                                <p class="font-13">
                                  <a href=""> Follow </a>
                                </p>
                              </div>
                            </div>

                          </div>




                        </div>
                      </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                  </div>



                </div> <!-- container -->

              </div> <!-- content -->


            </div>