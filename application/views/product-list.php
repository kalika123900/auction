<div class="right_col" role="main" style="min-height: 3806px;">
<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Product List</h2>
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
                          <th>Product Name</th>
                          <th>Product Slug</th>
                          <th>Product Price</th>
                          <th>Product Images</th>
                          <th>Is Deliverable</th>
                          <th>Product Condition</th>
                          <th>Added On</th>
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
                            <td><?php echo htmlentities($row->product_name); ?></td>
                            <td><?php echo htmlentities($row->product_slug); ?></td>
                            <td><?php echo htmlentities($row->product_price); ?></td>
                            <td><img src="<?=UPLOADS.$row->image_name?>" width="100" ></td>
                            <td><?=$row->product_deliverable==1?'Yes':'No'?></td>
                            <td><?=ucfirst($row->product_condition)?></td>
                            <td><?=$row->created_date?></td>
                            <td><?=$row->status; ?></td>
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

