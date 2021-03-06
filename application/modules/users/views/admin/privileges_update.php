          <section class="vbox">
            
            <?php echo $this->load->get_section('users_menu_header'); ?>

            <section class="scrollable wrapper">

              <!-- Codeigniter Flash Messages Area -->

              <?php if (! empty($message)) { ?>

                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <i class="fa fa-info-sign"></i>
                    <strong>
                    <?php echo $message; ?>
                  </strong>
                </div>

              <?php } ?>
              
              <!-- Codeigniter Flash Messages Area -->

              <div class="m-b-md">
                <h3 class="m-b-none"><?php echo $this->lang->line('update_privilege');?></h3>
              </div>   

              <?php echo form_open(current_url()); ?>

              <div class="row"><!--Starts div raw -->

                <div class="col-lg-4"><!--Starts Groups Genereal Info and Links -->
 
                  <section class="panel panel-default">
                    <div class="panel-body">
                      <div class="clearfix text-center m-t">
                        <div class="inline">

                          <span class="fa-stack fa-4x pull-center m-r-sm">
                            <i class="fa fa-circle fa-stack-2x text-dark"></i>
                            <i class="fa fa-key fa-stack-1x text-warning"></i>
                          </span>

                          <div class="h1 m-t m-b-xs text-info"><?php echo $this->lang->line('update_privilege');?></div>
                        </div>                      
                      </div>
                    </div>
                    <footer class="panel-footer bg-dark text-center">
                      <div class="row pull-out">
                        <div class="col-xs-4">
                          <div class="padder-v">

                            <small class="text-muted">

                              #ID
                            
                            </small>

                            <span class="m-b-xs h4 block text-warning"> 

                              <?php echo $privilege[$this->flexi_auth->db_column('user_privileges', 'id')];?>

                            </span>

                          </div>
                        </div>
                        <div class="col-xs-4 dk">
                          <div class="padder-v">

                            <small class="text-muted">

                              Name
                            
                            </small>

                            <span class="m-b-xs h4 block"> 

                              <?php echo $privilege[$this->flexi_auth->db_column('user_privileges', 'name')];?>

                            </span>                            

                          </div>
                        </div>
                        <div class="col-xs-4">
                          <div class="padder-v">

                            <small class="text-muted"> Privilege Type</small>

                            <span class="m-b-xs h4 block"> 

                              <?php if ($privilege[$this->flexi_auth->db_column('user_privileges', 'is_frontend_priv')] == 1 ) { ?>

                              <span class="text-info">Frontend Privilege</span>


                              <?php } else { ?>

                              <span class="text-warning">Core Privilege</span>

                              <?php } ?>

                            </span>
                          </div>
                        </div>
                      </div>
                    </footer>
                  </section>

                  <a class="btn btn-lg btn-block btn-warning" href="<?php echo base_url();?>admin/users/privileges">
                    <i class="fa fa-key"></i>

                    <?php echo $this->lang->line('form_manage_privileges');?>
                  
                  </a>

                  <button type="submit" name="update_privilege" id="submit" value="Submit" class="btn btn-info btn-lg btn-block"><i class="fa fa-check-circle pull-left"></i>  <?php echo $this->lang->line('update_privilege');?></button>

                </div><!--Ends Groups Genereal Info and Links -->

                <div class="col-lg-8">
                  	<!--Group Information Form Panel -->
       				     <section class="panel panel-default">
                        <header class="panel-heading font-bold"><?php echo $this->lang->line('form_privilege_details_title');?></header>
                        <div class="panel-body">

                            <div class="form-group">
                              <label><?php echo $this->lang->line('privilege_name');?></label>
                              <input type="text" id="privilege" name="update_privilege_name" value="<?php echo set_value('update_privilege_name', $privilege[$this->flexi_auth->db_column('user_privileges', 'name')]);?>" class="form-control input-lg m-b" placeholder="<?php echo $this->lang->line('placeholder_privilege_name');?>">
                            </div>
                            <div class="line line-dashed line-lg pull-in"></div>
                            <div class="form-group">
                              <label><?php echo $this->lang->line('privilege_description');?></label>
                              <textarea id="description" name="update_privilege_description" class="form-control input-lg m-b" placeholder="<?php echo $this->lang->line('placeholder_privilege_description');?>"><?php echo set_value('update_privilege_description', $privilege[$this->flexi_auth->db_column('user_privileges', 'description')]);?></textarea>
                            </div>
                            <div class="line line-dashed line-lg pull-in"></div>

                        <div class="form-group">
                          <label>Privilege Type: Core or Frontend</label>
                          <div>
                            <label class="switch">
                                    <input type="checkbox" id="update_is_frontend_priv" name="update_is_frontend_priv" value="1" <?php echo set_checkbox('update_is_frontend_priv',1, $privilege[$this->flexi_auth->db_column('user_privileges', 'is_frontend_priv')] == 1 );?> >
                              <span></span>
                            </label>
                          </div>
                          <div>
                            <span class="help-block m-b-none">* If this is a <span class="label bg-warning"><strong>Core</strong></span> Privilege <span class="text-danger"><strong>DO NOT</strong></span> check it.<br>* If checked the privilege will be consumed as a <span class="text-info"><strong>Frontend Privilege</strong></span> for frontend usage.</span>
                          </div>
                        </div>

                        </div>
                  </section>
                  <!--Ends Usergroup Informations Form Panel -->
                </div><!--Ends div class = "col-lg-6-->

              </div><!--Ends div raw -->

              <?php echo form_close();?>

          	</section><!--Ends scrollable padder -->
      	  </section><!--Ends vbox -->
