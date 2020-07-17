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
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Phone Number</th>
                          <th>Profile Picture</th>
                          <th>Role</th>
                          <th>Status</th>
                          <th>Edit</th>
                          <th>Delete</th>
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
                            <td><img src="<?php echo base_url('uploads/'. ($row->profile_picture)); ?>" height="40" width="40"/></td>
                            <td><?php echo htmlentities($row->role); ?></td>
                            <td><?php echo htmlentities($row->status); ?></td>
                            <td>
                        <?php
                        //for passing row id to controller
                         echo  anchor("admin/user/edit/{$row->id}", ' ', 'class="btn btn-primary btn-xs glyphicon glyphicon-pencil"')?>
                        </td>
                        <td>
                        <?php
                        //for passing row id to controller
                         echo anchor("AdminController/delete/{$row->id}", ' ', 'class="glyphicon glyphicon-trash btn-danger btn-xs"')?>
                        </td>
                        </tr>
                        <?php
                        // for serial number increment
                        $cnt++;
                        }
                        ?>
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




























































































































































        