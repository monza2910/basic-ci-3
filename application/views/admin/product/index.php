<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Product</h1>
    </div>
    <div class="section-body">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered table-md">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($products as $index => $product) :?>
                <tr>
                    <td><?= $index+1?></td>
                    <td><?= $product['title']?></td>
                    <td><?= $product['img']?></td>
                    <td><?= $product['qty']?></td>
                    <td><?= $product['price']?></td>
                    <td>
                        <a href="#" class="badge badge-secondary">Detail</a>
                        <a href="#" class="badge badge-warning">Edit</a>
                        <a href="#" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach;?>
                </table>
                </div>
            </div>
        </div>
    </div>
  </section>
</div>