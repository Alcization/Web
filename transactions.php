<?php include 'templates/header.php'; ?>
<h2>Transactions (Demo)</h2>
<div style="display:flex;justify-content:space-between;align-items:center;gap:12px;margin-bottom:12px">
  <div style="color:#5b6b7a">List of demo transactions</div>
  <div><button class="btn btn-ghost" onclick="location.href='/api.php?action=txs'">Open JSON</button> <button class="btn btn-primary" onclick="location.href='/index.php'">Back Home</button></div>
</div>
<?php
$txs = json_decode(file_get_contents(__DIR__ . '/data/txs.json'), true) ?? [];
if (count($txs) === 0) {
  echo "<p>No transactions yet. Submit the demo transfer form to create some.</p>";
} else {
  echo "<table class='table'><thead><tr><th>ID</th><th>From</th><th>To</th><th>Amount</th><th>Date</th></tr></thead><tbody>";
  foreach($txs as $t){
    echo "<tr><td>".htmlspecialchars($t['id'])."</td><td>".htmlspecialchars($t['from'])."</td><td>".htmlspecialchars($t['to'])."</td><td>".htmlspecialchars($t['amount'])."</td><td>".htmlspecialchars($t['date'])."</td></tr>";
  }
  echo "</tbody></table>";
}
?>
<?php include 'templates/footer.php'; ?>