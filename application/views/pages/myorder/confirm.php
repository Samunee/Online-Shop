<main role="main" class="container">
    <div class="row">
        <div class="col-md-3">
            <?php $this->load->view('layouts/_menu') ?>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    Confirm Order #<?= $order->invoice ?>
                    <div class="float-right">
                        <?php $this->load->view('layouts/_status', ['status' => $order->status]) ?>
                    </div>
                </div>
                <?= form_open_multipart($form_action, ['method' => 'POST']) ?>
                <?= form_hidden('id_orders', $order->id) ?>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Transaction</label>
                        <input type="text" class="form-control" value="<?= $order->invoice ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">From Account a/n</label>
                        <input type="text" name="account_name" class="form-control" value="<?= $input->account_name ?>">
                        <?= form_error('account_name') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Account number</label>
                        <input type="text" name="account_number" class="form-control"
                            value="<?= $input->account_number ?>">
                        <?= form_error('account_number') ?>
                    </div>
                    <div class="form-group">
                        <label for="">As big as</label>
                        <input type="number" name="nominal" class="form-control" value="<?= $input->nominal ?>">
                        <?= form_error('nominal') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Note</label>
                        <textarea name="note" cols="30" rows="5" class="form-control">-</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Transfer proof</label> <br>
                        <input type="file" name="image">
                        <?php if ($this->session->flashdata('image_error')) :  ?>
                        <small class="form-text text-danger"><?= $this->session->flashdata('image_error') ?></small>
                        <?php endif ?>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Payment Confirmation</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</main>