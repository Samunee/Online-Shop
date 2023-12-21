<main role="main" class="container">

    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/_alert') ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                        Successful Checkout
                </div>
                <div class="card-body">
                    <h5>Order Number: <?= $content->invoice ?></h5>
                    <p>Thank you for Shopping.</p>
                    <p>Please make a payment to be able to process further by:</p>
                    <ol>
                        <li>Make payment on account <strong>BCA 123901249421</strong> a/n PT. OnlineShop</li>
                        <li>Include a description with the order number: <strong><?= $content->invoice ?></strong></li>
                        <li>Total Payment: <strong>Rp.<?= number_format($content->total, 0, ',', '.') ?>,-</strong></li>
                    </ol>
                    <p>If so, please send proof of transfer on the confirmation page or can <a href="<?= base_url("myorder/detail/$content->invoice") ?>">Click Here</a></p>
                    <a href="<?= base_url('home') ?>" class="btn btn-primary"><i class="fas fa-angle-left"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
</main>