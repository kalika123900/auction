<div class="right_col" role="main" style="min-height: 3806px;">
<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Orders <small><a href="<?=site_url()?>admin/course/add/" class="btn btn-primary"><i class="fa fa-plus-circle"></i>&nbsp;Add Course</a></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Order Id</th>
                          <th>Display Name</th>
                          <th>Email</th> 
                          <th>Total Amount</th>
                          <th>Txn ID</th>
                          <th>Status</th>
                          <th>View</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                        <tbody>
                      <?php
                        $cnt=1;
                        foreach ($result as $row) {
                            ?>
                            <tr>
                            <td><?php echo str_replace('Payment ID - P-','#',$row->item_name);?></td>
                            <td><?php echo $row->first_name." (".$row->last_name.")";?></td>
                            <td><?php echo htmlentities($row->email);?></td>
                            <td><?php echo '$'.$row->payment_gross?></td>
                            <td><?php echo $row->txn_id?></td>
                            <td><span class="btn btn-<?php echo (strtoupper($row->payment_status)=='DONE')?'success':'warning';?>"> <?=strtoupper($row->payment_status)?></span></td>
                            <td><?php echo  anchor("admin/order/$row->payment_id",' ','class="btn btn-primary btn-xs glyphicon glyphicon-eye-open"')?></td>
                            <td><a data-href="admin/order/delete/<?=$row->payment_id?>" class="delete_item"> <i class="btn btn-danger btn-xs glyphicon glyphicon-trash"></i></a></td>
                        </td>
                        </tr>
                        <?php
                        // for serial number increment
                        $cnt++;
                        }
                        ?>
                     </tbody>
                   </table>
                  
                  
                 </div>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              <div>
              <div class="col-md-3"></div>
      </div>
      <script>
      $(document).ready(function(){
         $('#datatable').DataTable({ "ordering": false});
        $('.delete_item').click(function(){
          var _that = $(this);
          if(confirm('Are you sure you want to delete?'))
          {
            window.location.href = _that.attr('data-href');
          }
        });
      });
      
      </script>
