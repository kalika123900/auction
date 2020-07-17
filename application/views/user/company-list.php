<div class="right_col" role="main" style="min-height: 3806px;">
<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>User Record <small> <a href="<?=site_url()?>admin/user/add" class="btn btn-primary"><i class="fa fa-plus-circle"></i>&nbsp;Add User</a></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Contact Person</th>
                          <th>Company Name</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Phone Number</th>
                          <th>APN Number</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                        <tbody>
                      <?php
                        $cnt=1;
                        foreach ($result as $row) {
                            ?>
                            <tr>
                           
                            <td><?php echo htmlentities($row->id); ?></td>
                            <td><?php echo htmlentities($row->first_name); ?></td>
                            <td><?php echo htmlentities($row->last_name); ?></td>
                            <td><?php echo htmlentities($row->email); ?></td>
                            <td><?php echo htmlentities($row->password); ?></td>
                            <td><?php echo htmlentities($row->phone_number); ?></td>
                            <td><?php echo getUserMeta($row->id,'abn_name');?></td>
                            <td><a href="javascript:void(0)" data-id="<?=$row->id?>" class="btn btn-secondary active">Active Now</a></td>
                            </tr>
                        <?php } ?>   
                     </tbody>
                   </table>
                   <div style="text-align:center">
                   </div>
                 </div>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              </div>
         </div>    
         <script>
         $(document).ready(function(){
           $('.active').click(function(e){
            e.preventDefault();
            var _that = $(this);
            var _id = _that.attr('data-id');
            $.ajax({ 
              method: 'POST',
              data: {action:'activeCompany',id:_id},
              url:'/api'

            }).done(function(response){
              var response = JSON.parse(response);
              if(response.status==1)
              {
                window.location.reload();
              }
              else
              {
                //notify
              }
            })
           })
         });
         
         </script>