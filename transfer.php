<?php include 'templates/header.php'; ?>
<h2>Transfer (Demo)</h2>
<p style="color:#5b6b7a">This form is for UI testing only — submitting writes to a demo transactions file.</p>
<div class="card">
<form method="post" action="/transfer.php" style="display:grid;gap:12px;max-width:520px">
  <label>From (username): <input name="from_username" value="alice" required></label>
  <label>To (username): <input name="to_username" value="bob" required></label>
  <label>Amount: <input name="amount" value="100.00" required></label>
  <div style="display:flex;gap:8px">
    <button class="btn btn-primary" type="submit">Send (demo)</button>
    <button class="btn btn-ghost" type="button" onclick="location.href='/transactions.php'">View Transactions</button>
  </div>
</form>
</div>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $from = $_POST['from_username'] ?? '';
  $to = $_POST['to_username'] ?? '';
  $amount = floatval($_POST['amount'] ?? 0);
  $txs_file = __DIR__ . '/data/txs.json';
  $txs = json_decode(file_get_contents($txs_file), true) ?? [];
  $txs[] = ['id'=>time(),'from'=>$from,'to'=>$to,'amount'=>$amount,'date'=>date('c')];
  file_put_contents($txs_file, json_encode($txs, JSON_PRETTY_PRINT));
  echo '<p class="note">Demo transfer recorded to data/txs.json</p>';
}
?>
<?php include 'templates/footer.php'; ?>