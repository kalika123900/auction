<div class="right_col" role="main" style="min-height: 1024px;">
<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>All Coupons <small> <a href="<?=site_url()?>admin/coupons/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i>&nbsp;Add New Coupons</a></small> </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Coupon Code</th>
                          <th>Coupon Type</th>
                          <th>RPU</th>
                          <th>Valid Till</th>
                          <th>Discount Type</th>
                          <th>Discount Amount</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                        <tbody>
                      <?php
                        if(count($result)>0):
                        $cnt=1;
                        foreach ($result as $row) {
                            ?>
                            <tr>
                            <td><?php echo htmlentities($row->coupon_code);?></td>
                            <td><?php echo htmlentities(ucfirst($row->coupon_type));?></td>
                            <td><?php echo htmlentities($row->redumption_per_user);?></td>
                            <td><?php echo htmlentities($row->validity_date);?></td>
                            <td><?php echo htmlentities($row->discount_type==1?'Fixed':'Perentage');?></td>
                            <td><?php echo htmlentities($row->discount_amount);?></td>
                            <td><?php echo htmlentities($row->status)==1?'Active':'Inactive';?></td>
                            <td>
                              <a class="delete_item" data-href="delete/<?=$row->id?>" > <i class="glyphicon glyphicon-trash btn-danger btn-xs"></i></a>  
                            </td>
                        </tr>
                        <?php
                        // for serial number increment
                        $cnt++;
                        }
                      else:?>
                        <tr>
                          <td colspan="9" style="text-align:center; text-transform: uppercase; font-weight: bold">No Chapter Has Been Added Yet!</td>
                        </tr>
                      <?php
                      endif;
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
        $('.delete_item').click(function(){
          var _that = $(this);
          if(confirm('Are you sure you want to delete?'))
          {
            window.location.href = _that.attr('data-href');
          }
        });
      });
</script>
