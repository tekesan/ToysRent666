<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Toys Rent</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/chat.css') ?>">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
                                
<body>
        <div class="container">
                      <!-- <div class="inbox_msg"> -->
                        <div class="inbox_people">
                          <div class="headind_srch">
                            <div class="recent_heading">
                              <h4>TOYS RENT
                                <a href="<?php echo site_url('dashboard');?>"><i class="fa fa-chevron-left"></i></a></h4>
                              </a>
                            </div>
                          </div>
                          <div class="inbox_chat">
                          <?php
                                    foreach ($query->result() as $row){
                                  ?>
                            <div class="chat_list active_chat">
                              <div class="chat_people">
                                <div class="chat_ib">
                                  <a href="<?php echo site_url('chat/admin_conv/'.$row->no_ktp_anggota);?>">
                                  <h5><?php echo $row->nama_lengkap; ?><span class="chat_date"><?php echo $row->date_time; ?></span></h5>
                                  </a> 
                                </div>
                              </div>
                            </div>
                            <?php }  ?>
                          </div>
                        </div>
                        <div class="mesgs">
                          <div class="msg_history">
                            <div class="incoming_msg">
                              <div class="received_msg">
                              </div>
                            </div>
                            <div class="outgoing_msg">
                            </div>
                          </div>
                        </div>
                      <!-- </div> -->
                    </div>  
</body>
</html>